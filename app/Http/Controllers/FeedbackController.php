<?php
// app/Http/Controllers/FeedbackController.php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FeedbackController extends Controller
{
    public function index()
    {
        //  return Feedback::with('user')->where('user_id', auth()->id())->get();
        return Feedback::with('user')->get();
        }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
        ]);

        $feedback = Feedback::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'user_id' => auth()->id(),
        ]);

        // Load the user relationship before returning
        return response()->json($feedback->load('user'), 201);
    }

    public function show(Feedback $feedback)
    {
        Gate::authorize('view', $feedback);
        
        // Load user relationship for single feedback
        return response()->json($feedback->load('user'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        Gate::authorize('update', $feedback);

        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'category' => 'sometimes|string',
        ]);

        $feedback->update($request->all());

        // Load user relationship after update
        return response()->json($feedback->load('user'));
    }

    public function destroy(Feedback $feedback)
    {
        Gate::authorize('delete', $feedback);
        
        $feedback->delete();

        return response()->json(['message' => 'Feedback deleted'], 200);
    }
}
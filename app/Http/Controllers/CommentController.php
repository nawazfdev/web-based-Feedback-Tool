<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request, $feedbackId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $feedback = Feedback::findOrFail($feedbackId);

        $comment = Comment::create([
            'content' => $request->content,
            'feedback_id' => $feedback->id,
            'user_id' => Auth::id(),
        ]);

        return response()->json($comment, 201);
    }

    // Get all comments for a specific feedback item
    public function index($feedbackId)
    {
        $feedback = Feedback::with(['comments.user'])->findOrFail($feedbackId);
        return response()->json($feedback->comments);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'feedback_id', 'user_id'];

    // Relationship with Feedback
    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

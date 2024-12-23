<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    // Specify which attributes are mass assignable
    protected $fillable = [
        'title', 
        'description', 
        'category', 
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

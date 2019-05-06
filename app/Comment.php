<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the review that owns the comment.
     */
    public function review()
    {
        return $this->belongsTo('App\Review');
    }
}

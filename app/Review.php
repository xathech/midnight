<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    /**
     * Return the most voted review of the day.
     */
    public function mostVotedReview()
    {
      //return App\Review::all()->whereDate('created_at',date('Y-m-d H:i:s'))->sortByDesc('votes')->first();
        return App\Review::all()->whereDate('created_at',Carbon())->sortByDesc('votes')->first();
    }

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the comments for the review.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

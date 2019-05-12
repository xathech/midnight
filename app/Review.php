<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
//use Carbon\Carbon;

class Review extends Model
{

    /**
     * Make this model searchable by scout
     */
    use Searchable;

    
    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('title'=> $array['title']);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'image','language'
    ];

    /**
     * Return all reviews
     * 
     * return $this
     */

    public function allReviews(){

        return $this::paginate(10);
    }

    /**
     * Return the review/reviews that match the paremeter
     * 
     * return $this
     */

    public function searchReview($param, $sort){

        //$reviews = $this::paginate(10);

        //return $this::where('title', $search)->orWhere('title', 'like', '%' . $search . '%')->get();
        //$reviews = $this::where('title', $search)->orWhere('title', 'like', '%' . $search . '%')->paginate(10);
        //$reviews->withPath('search/review');

        $query="id";

        if ($sort=="votes") {

            $query = "votes";
        }

        if ($sort=="lang") {

            $query = "language";
        }

        return $this::search($param)->orderBy($query,'desc')->paginate(10)->appends(['sort' => $query]);
    }

    /**
     * Return the most voted review of the day.
     */
    public function mostVotedReview()
    {
      //return App\Review::all()->whereDate('created_at',date('Y-m-d H:i:s'))->sortByDesc('votes')->first();
      //return App\Review::all()->whereDate('created_at',Carbon())->sortByDesc('votes')->first();
      //return App\Review::all()->latest()->first();
        return $this::latest()->first();
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

<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    /**
     * Display the most commented, the most commented of the day, a random list of the 8 most recent reviews
     * 
     */
    public function home(){

        $review = new Review;

        $mostCommentedEver = $review->mostCommentedEver();
        $randomReview = $review->randomReview();
        $recentList = $review->recentReviews();
        
        return view('home', compact('mostCommentedEver','randomReview','recentList'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('query', '');
        $check = $request->input('sort', '');

        $reviews = new Review();
        $reviews = $reviews->searchReview($search,$check);

        //return view('reviewslist', [ "reviews" => $reviews ]);
        return view('reviews.reviewslist', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'image' => 'required|image|max:3072',
            'game' => 'required|max:100',
            'body' => 'required|max:2000',
        ]);

        $review = new Review;

        $review->user_id = Auth::user()->id;
        $review->title = $request->input('title');
        $review->image = $request->file('image')->store('/images/posts');
        //$review->image = $request->file('image')->store('public/images/posts');
        $review->game_title = $request->input('game');
        $review->body = $request->input('body');
        $review->language = app()->getLocale();

        $review->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        $comments = $review->comments()->paginate(10);
        /*
        $comments = new Comment();
        $comments = $comments->commentsInReview($review);
        */
        return view('reviews.view', compact('review',"comments"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {        
        $review->deleteReview($review->id);

        return redirect()->route('home');
    }
}

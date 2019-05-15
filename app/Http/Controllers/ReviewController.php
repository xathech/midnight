<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    /**
     * Test.
     * @return \App\Review
     */
    public function test1()
    {
        $review = new Review();
        return $review->mostVotedReview();
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
            'title' => 'required|max:255',
            'image' => 'required|image|max:3072',
            'game' => 'required',
            'body' => 'required',
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

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
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
        //
    }
}

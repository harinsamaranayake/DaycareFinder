<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use DB;

class ReviewController extends Controller
{
    public function add_review(Request $request){
        $this->validate($request,[
            // 'daycare_id' => 'required',
            // 'reviewer_id' => 'required',
        ]);

        $review = new Review;

        $review->daycare_id = $request->input('daycare_id');
        $review->reviewer_id = $request->input('reviewer_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review'); 

        $review->save();

        // $url = '/daycare/'.$request->input('daycare_id');

        // // return $request;
        // return redirect($url);

        return $review;
    }
}

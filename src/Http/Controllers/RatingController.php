<?php

namespace Kelompok1\StarRating\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kelompok1\StarRating\Models\Rating;

class RatingController extends Controller
{
    public function addRating(Request $request, $id){
        $rating = new Rating();
        $rating->article_id = $id;
        $rating->rating = $request->rating;
        if(isset($request->name)){
            $rating->nama = $request->name;
        }
        if(isset($request->comment)){
            $rating->comment = $request->comment;
        }
        $rating->save();
        return back()->with(['message' => 'Thank you, your rating has been submitted succesfully.']);;
    }

}

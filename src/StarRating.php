<?php

namespace Kelompok1\StarRating;

use Kelompok1\StarRating\Models\Rating;

class StarRating implements RatingContract
{

    public function calculateRating($id)
    {
        $rating = Rating::where('article_id', $id)->get(['rating']);
        if ($rating->isEmpty()) {
          $result= 'n/a';
        } else {
            $rate = (float)$rating->count(['rating']);
            $total_rating = (float)$rating->sum(['rating']);
            $result = round($total_rating / $rate, 2);
        }
//        printf($result);
        return $result;
    }

    public function showComment($id)
    {
        $comment = Rating::where('article_id', $id)->whereNotNull('comment')->get();
        return $comment;
    }
}

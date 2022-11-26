<?php

namespace Kelompok1\StarRating;

interface RatingContract {
    public function calculateRating($id);
    public function showComment($id);

}

?>

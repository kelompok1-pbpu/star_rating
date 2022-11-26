<?php
namespace Kelompok1\StarRating\Facades;

use Illuminate\Support\Facades\Facade;

class StarRating extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Kelompok1\StarRating\RatingContract';
    }
}

?>

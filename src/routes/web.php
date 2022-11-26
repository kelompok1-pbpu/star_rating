<?php
// YourVendor\contactform\src\routes\web.php
use Kelompok1\StarRating\Http\Controllers\RatingController;

Route::group(['namespace' => 'Kelompok1\StarRating\Http\Controllers', 'middleware' => ['web']], function () {
    Route::post('/{id}/rate', [RatingController::class, 'addRating'])->name('rating');
});



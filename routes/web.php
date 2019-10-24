<?php

use EndorphinStudio\Detector\Detector;

Route::get('/', function () {
    $detector = new Detector();
    return view('welcome',['Detector' => $detector->analyse()]);
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',
    [
        'job' => [
            [
                'title' => 'Director',
                'salary' => 'Rs. 10,000,000'
            ],
            [
                'title' => 'Programmer',
                'salary' => 'Rs. 2,000,000'
            ],
            [
                'title' => 'Teacher',
                'salary' => 'Rs. 1,000,000'
            ],
        ]
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});
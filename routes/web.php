<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs);
    return view('home');
});


Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->paginate(10);
    return view(
        'jobs.index',
        [
            'job' => $jobs
        ]
    );
});

Route::get('/jobs/create', function(){
    return view('Jobs.create');
});

//show view
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//create
Route::post('/jobs', function(){

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => '1',
        ]);

        return redirect('/jobs');

});

//edit
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
//validate
request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required'],
]);
//authorize
//update
$job = Job::findOrFail($id);

// $job->title = request('title');
// $job->salary = request('salary');
// $job->save();

$job->update([
    'title' => request('title'),
    'salary' => request('salary'),
]);

return redirect('/jobs/'.$job->id);
});

//Delete
Route::delete('/jobs/{id}', function ($id) {
//authorize
//delete
$job = Job::findOrFail($id)->delete();
return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

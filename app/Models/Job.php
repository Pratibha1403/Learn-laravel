<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all():array{
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 'Rs. 10,000,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => 'Rs. 2,000,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 'Rs. 1,000,000'
            ],
        ];
    }

    public static function find(int $id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if(! $job){
            abort(404);
        }else{
            return $job;
        }
    }
}
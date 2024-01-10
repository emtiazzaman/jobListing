<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JobsController;

class MainController extends Controller
{
    public function all_data(JobsController $jobs )
    {
        $all_jobs =  $jobs->all_jobs();

        return view
        (
            'index',
            [
                'jobs'=> $all_jobs
            ]
        );
    }
}

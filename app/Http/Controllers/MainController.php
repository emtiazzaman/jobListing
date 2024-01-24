<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CategoryController;

class MainController extends Controller
{
    public function all_data(JobsController $jobs , CategoryController $categories)
    {
        $all_jobs =  $jobs->all_jobs();
        $all_categories =  $categories->all_categories();
        $all_job_data =$jobs->all_data();

        return view
        (
            'index',
            [
                'jobs'=> $all_jobs,
                'categories' => $all_categories,
                'all_job_data' => $all_job_data,
                'users' => User::all()
                
            ]
        );
    }
}

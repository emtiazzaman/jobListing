<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobsController extends Controller
{
    public function all_jobs()
    {
        return Jobs::latest()->paginate();
    }

    public function show_single_job(Jobs $job_id)
    {
        return view('jobs.job-single', ['job' => $job_id] );
    }

    public function create_job()
    {
        return view('users.create-job');
    }

    public function store_job(Request $request)
    {

        $formFields = $request->validate(
            [
                'name' => ['required', Rule::unique('jobs','name')],
                'job_title' => 'required',
                'location' => 'required',
                'category' => 'required',
                'experience' => 'required',
                'job_type' => 'required',
                'qualification' => 'required',
                'gender' => 'required',
                'yearly_salary' => 'required',
                'vacancy'  => 'required',
                'description' => 'required'
            ]
        );

        Category::create( [ 'name'=>$formFields['category'] ] );

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('photo','public');
        }

        $formFields['category_id'] = Category::latest()->get('id')->first()->id;
    
        Jobs::create($formFields);

        return redirect('/')->with('message','jobs created successfully!');
    }

   
}

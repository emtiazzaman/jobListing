<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobsController extends Controller
{
    public function all_jobs()
    {   //dd(request);
        return Jobs::latest()->filter(request(['category_tag','keyword','category','location']))
        ->paginate(5)
        ->appends(request()->query())
        ;
    }

    public function all_data()
    {
        return Jobs::all();
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

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('photo','public');
        }

        Category::create( [ 'name'=>$formFields['category'] ] );

       
        $formFields['category_id'] = Category::latest()->get('id')->first()->id;
        $formFields['user_id'] = auth()->user()->id;

        Jobs::create($formFields);

        return redirect('/')->with('message','jobs created successfully!');
    }

}

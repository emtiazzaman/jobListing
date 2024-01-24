<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    

    public function store_user(Request $request)
    {

        $formFields = $request->validate(
            [
                'email'  => [ 'required', 'email',Rule::unique("users")],
                'password' => ['required','confirmed','min:5'],
                'full_name' => ['required','min:3'],
                'current_profession' => 'required',
                'cv' => 'required'
            ]
        );

        $formFields['password'] = bcrypt(  $formFields['password'] );

        if($request->hasFile('profile_picture'))
        {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('profile_pictures','public');
        }

        if($request->hasFile('cv'))
        {
            $formFields['cv'] = $request->file('cv')->store('user_cv','public');
        }

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message','user registerd successfully!');
    }

    public function logout(Request $request)
    {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/')->with('message','Log Out successful!');
    }
    
    
         //show login form
    public function login()
    {
            return view
            ('users.login');
    }
    
    
          //login porcess or authintcate
    public function logger(Request $request)
    {
        
           $formFields = $request->validate([
                'email'  => [ 'required'],
                'password' => ['required','min:5']
    
            ]);
    
            if(auth()->attempt($formFields))
            {
                $request->session()->regenerate();
                return redirect('/')->with('message','User LoggedIn successfully!');
            }
     
             return redirect('/login')->withErrors(['email'=>'invalid credtinals'])
             ->onlyInput('email');
    }

}

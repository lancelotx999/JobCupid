<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;
// use App\Http\Controller\Requests;
use App\Employer;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        // $data = [];
        // $data['employer'] = Employer::all();
        // $data['user'] = User::all();
        // $data['job'] = Job::all();

        // $order = User::find('sean@jobcupid.my');  
        // return $data['user'];
        $users = User::all();
        $employers = Employer::all();


        foreach ($users as $user) {

            if ($request->email == $user->email && $request->password == $user->password) {
                return "login pass";
                //success login code here
                // return redirect('/');
            }
        }

        foreach ($employers as $employer) {

            if ($request->email == $employer->email && $request->password == $employer->password) {
                return "login pass";
                //success login code here
                // return redirect('/');
            }
        }
        // return "fail";
        return view('/pages/login', ['login' => 'Incorrect login information.']);

        // if () {
        //     # code...
        // }


        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     // Authentication passed...
        //     // return redirect()->intended('dashboard');
        //      return redirect('/')->withInput();
        // }
    }
}

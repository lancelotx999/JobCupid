<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;
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
        $users = User::all();
        $employers = Employer::all();


        foreach ($users as $user) {
            if ($request->email == $user->email && $request->password == $user->password) {
                $data = [];
                $data['user'] = User::find($user->id);

                $request->session()->put('current_user', User::find($user->id));

                return view('/pages/user_profile',$data);
            }
        }

        foreach ($employers as $employer) {

            if ($request->email == $employer->email && $request->password == $employer->password) {
                $data = [];
                // $data['user'] = User::all();
                $data['employer'] = Employer::find($employer->id);

                $request->session()->put('current_employer', Employer::find($employer->id));

                return view('/pages/employer_profile', $data);
            }
        }
        return view('/pages/login', ['login' => 'Incorrect login information.']);
    }
}

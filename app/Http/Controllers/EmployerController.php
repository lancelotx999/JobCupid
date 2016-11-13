<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Job;
use App\Employer;
class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $data['current_user'] = $request->session()->get('current_user');
        // $data['employer'] = Employer::all();
        $data['users'] = User::all();
        $data['job'] = Job::all();
        
        return view('/pages/employer_main', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employer = new Employer;

        $employer->name = $request->name;
        $employer->email = $request->email;
        $employer->password = $request->password;
        $employer->sector = $request->sector;
        $employer->website = $request->website;
        $employer->description = $request->description;
        $employer->uploadfile = $request->uploadfile;

        $employer->save();

        // $data = [];
        // $data['employers'] = Employer::all();

        return view('./pages/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

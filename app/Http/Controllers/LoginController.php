<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function registerform()
    {
         return view('login.register');
    }


    public function loginform()
    {
         return view('login.login');
    }

    
    public function registered(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $password=\Hash::make($request->password);
        
        $user=new User();
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->save();
        return redirect('/auth/login');
    }
    
    
     public function logined(Request $request)
    {
        //dd($request->all());
         $credentials =[
             'email'=>$request['email'],
             'password'=>$request['password'],];
         
         if(Auth::attempt($credentials)){
             return view('admin.dashboard');
         }
         return 'Failure';
    }
    
    public function error500()
    {
        return view('error');
    }
}
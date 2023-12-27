<?php

namespace App\Http\Controllers;

use App\Models\Logins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
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
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login failed');
    
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

        // dd('ini a');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function show(Logins $logins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function edit(Logins $logins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logins $logins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logins  $logins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logins $logins)
    {
        //
    }
}

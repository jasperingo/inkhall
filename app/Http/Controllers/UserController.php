<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
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
        
        return view('login.register');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name'=> 'required',
            'username'=> ['required', 'unique:users'],
            'email'=> ['required', 'unique:users', 'email:filter'],
            'password'=> ['required', 'alpha_num', 'min:6', 'max:10', 'confirmed']
        ]);
        

        if ($validator->fails()) {
            return IH_response(422, __('validation.form_data_error'), $validator->errors());
        }

        $request->password = Hash::make($request->password);

        $user = User::create($request->all());

        //$user->save();

        
        return IH_response(201, __('validation.sign_up_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
        
        $user = User::where('username', $id)->first();

        return view('login.user', ['user'=> $user]);
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
        
    }

    public function login()
    {
        
        return view('login.login');

    }


    public function verifyLogin(Request $request) 
    {
        
        $field = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($field, $request->username)->first();

        if ($user === null)
             return $this->onVerifyLoginFailed('username', $request);

        if (! Hash::check($request->password, $user->password)) 
            return $this->onVerifyLoginFailed('password', $request);

        auth()->login($user, true);

        return redirect()->route('index', ['locale'=> app()->getLocale()]);
    }
    
    private function onVerifyLoginFailed($field, $request)
    {
        return back()->withErrors([
                $field => __('auth.'.$field)
            ])->withInput($request->except('password'));
    }

    public function logout()
    {
        
        auth()->logoutCurrentDevice();

        return redirect()->route('index',  ['locale'=> app()->getLocale()]);

    }



}




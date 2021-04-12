<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
            'password'=> ['required', 'min:6', 'max:20', 'confirmed',
                'regex:/^(?=.*?[a-zA-Z])(?=.*?[0-9]).*$/'
            ]
        ]);
        

        if ($validator->fails()) {
            return IH_response(422, __('validation.form_data_error'), $validator->errors());
        }
        
        
        $requestData = $request->all();
        $requestData['receive_email_digest'] = 1;
        $requestData['receive_social_notification'] = 1;

        $user = User::create($requestData);

        $token = $user->createToken("API_KEY");
        
        return IH_response(201, __('validation.sign_up_success'), [
            'token' => $token->plainTextToken
        ]);
    }


    /**
     * Sign in and authenticate a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signIn(Request $request)
    {
        
        $with = isset($request['email']) ? "email" : "username";

        $data = $request->only($with, "password");

        if (!Auth::attempt($data)) {
            return IH_response(422, __('auth.failed'));
        }

        $user = User::where($with, $request->input($with))->first();

        $token = $user->createToken("API_KEY");
        
        return IH_response(201, __('validation.sign_in_success'), [
            'token' => $token->plainTextToken
        ]);
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




    public function forgotPassword(Request $request) 
    {
        
        return 22;
    }
    

    


   /*private function onVerifyLoginFailed($field, $request)
    {
        return back()->withErrors([
                $field => __('auth.'.$field)
            ])->withInput($request->except('password'));
    }

    public function logout()
    {
        
        auth()->logoutCurrentDevice();

        return redirect()->route('index',  ['locale'=> app()->getLocale()]);

    }*/



}




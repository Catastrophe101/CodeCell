<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("profile");
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
    public function store($request,$id)
    {

        $request_array=array(
            'name' => $request->name,
            'email' => $request->email,
            'expiresIn' => $request->expiresIn,
            'id' => $request->id,
            'token' => $request->token,
            'avatar' => $request->avatar,
            'avatar_original' => $request->avatar_original
        );

        $request_object=new Request($request_array);

        $this->validate($request_object,array(
            'email' => "required|email|unique:users,email,$id"
        ));

        $user=new User;
        $user->name=$request->name;
        $user->expiresIn=$request->expiresIn;
        $user->token=$request->token;
        $user->id=$request->id;
        $user->avatar=$request->avatar;
        $user->avatar_original=$request->avatar_original;
        //$user->$user['domain']=$request->domain;
        $user->email=$request->email;

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public static function where($id){



    }

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

<?php

namespace App\Http\Controllers;

use App\Models\UserController;
use Illuminate\Http\Request;

class UserControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = UserController::all();

        return UserController;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = UserController::Create($request->all());

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserController $userController)
    {
        //
    }
}

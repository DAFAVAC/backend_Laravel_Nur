<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        return $task = User::all();
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());
  
        return $user;
    }

    public function update(Request $request, Test $test)
    {
        //
    }
    public function destroy(Test $test)
    {
        //
    }
}

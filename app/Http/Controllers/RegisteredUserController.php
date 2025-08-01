<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation 
        $attributes= $request->validate([
            'name'=>['required'], 
            'email'=>['required', 'email', 'unique:users'], 
            'password'=>['required', 'confirmed', Password::min(6)], 
               

        ]); 

        //create a user
        $user= User::create($attributes); 



        //login the user 
        Auth::login($user);

        return redirect('/products');

        //return redirect 
    }


    public function showAll(){
        $users= User::all();

        return view('admin.all-users', [
            'users'=> $users
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * delete the user from the database 
     */
    public function destroy(User $user)
    {
        //

        $user->delete();

        return redirect('/all-users'); 


    }
}

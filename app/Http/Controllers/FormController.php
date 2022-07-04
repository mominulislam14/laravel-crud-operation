<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Validator;

class FormController extends Controller
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

    public function Form()
    {
        return view('FormPage');
    }

    public function Home()
    {
        return view('HomePage');
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
        // $validator = Validator::make($request->all(),[
        //     'name'=> 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'phone' => 'nullable|numeric|digits:11',
        //     'password' => 'required|numeric|digits:6',
        //     'address' =>'nullable|max:255',
        // ]);

        // if($validator->fails()){
        //     return "error data";
        // }

        $request -> validate([
            'uname'=> 'required',
            'email' => 'required|email',
            'phone' => 'numeric',
            'password' => 'required|numeric',
        ]);
       

        $name = $request -> uname;
        $email = $request -> email;
        $phone = $request -> phone;
        $password = $request -> password;
        $address = $request -> address;

        User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
            'address' => $address,
           ]);
        return redirect() -> back();
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

    public function List()
    {
        $users = User::all();
        return view('ListPage',compact('users'));
    }
}

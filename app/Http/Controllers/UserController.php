<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('front.auth.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        //
        if (!empty($request->password)) {
            $validataDate = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

            $password = Hash::make($request->password);
            $user->password =$password;
        }else{
            $validataDate =  $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        try {
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش با موفقست ثبت گردید';
        return redirect('/')->with('success', $msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

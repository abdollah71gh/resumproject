<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
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
        $users = User::all();
        return view('back.users.users', compact('users'));
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
    public function show($user)
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
        return view('back.users.profile', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        if (!empty($request->password)) {
            $validataDate = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

            $password = Hash::make($request->password);
            $user->password = $password;
        } else {
            $validataDate = $request->validate([
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
        return redirect(route('admin.users'))->with('success', $msg);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        $msg = 'ایتم مورد نظر با موفقیت حذف گردید';
        return redirect(route('admin.users'))->with('success', $msg);
    }

    public function updatestatus(User $user)
    {
        if ($user->status ==1) {
            $user->status =0;
        } else {
            $user->status =1;
        }
        $user->save();
        $msg='بروز رسانی با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.users'))->with('success',$msg);


    }

}




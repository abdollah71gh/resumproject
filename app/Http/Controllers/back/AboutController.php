<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\About;
use App\Comment;
use Illuminate\Http\Request;
use Mockery\Exception;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::orderBy('id', 'DESC')->get();
        return view('back.abouts.abouts', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.abouts.create');
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
        $validataDate = $request->validate([
            'name' => 'required',

        ]);
        $about = new About();
        $about->create($request->all());

        try {
//           $articles= $articles->create($request->all());
//           $articles->categories()->attach($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect(route('admin.abouts.edit'))->with('warning', $exception->getCode());
        }
        $msg = 'پروفایل با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.abouts'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
        return view('back.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $validataDate = $request->validate([
            'name' => 'required',

        ]);
        $about->update($request->all());

        try {
//           $articles= $articles->create($request->all());
//           $articles->categories()->attach($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect(route('admin.abouts.edit'))->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش پروفایل با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.abouts'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
        $about->delete();
        $msg = 'ایتم مورد نظر حذف گردید';
        return redirect(route('admin.abouts'))->with('success', $msg);
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Category;
use App\Http\Controllers\Controller;
use App\Sample;
use Illuminate\Http\Request;
use Mockery\Exception;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $samples = Sample::orderBy('id', 'DESC')->get();
        return view('back.samples.samples', compact('samples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.samples.create');
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
        $samples = new Sample();
        $validataDate = $request->validate([
            'name' => 'required',

        ]);
        try {
            $samples->create($request->all());

        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.samples')->with('warning', $exception->getCode());
        }
        $msg = 'نمونه کار با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.samples'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        //
        return view('back.samples.edit', compact('sample'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
        //
        $validataDate = $request->validate([
            'name' => 'required',

        ]);
        try {
            $sample->update($request->all());

        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.samples')->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش نمونه کار  با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.samples'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        //
        $sample->delete();
        $msg = 'ایتم مورد نظر حذف گردید';
        return redirect(route('admin.samples'))->with('success', $msg);
    }

    public function updatestatus(Sample $sample)
    {
        if ($sample->status == 1) {
            $sample->status = 0;
        } else {
            $sample->status = 1;
        }
        $sample->save();
        $msg = 'بروز رسانی با موفقیت در دیتا ثبت گردید';
     return  redirect(route('admin.samples'))->with('success',$msg);

    }
}

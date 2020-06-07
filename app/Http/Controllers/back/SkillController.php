<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use App\Category;
use App\Skill;
use Illuminate\Http\Request;
use Mockery\Exception;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills = Skill::orderBy('id', 'DESC')->get();
        return view('back.skills.skills', compact('skills'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.skills.create');
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
        $skills = new Skill();
        $validataDate = $request->validate([
            'name' => 'required',
            'body'=>'required',

        ]);
        try {
            $skills->create($request->all());

        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.skills')->with('warning', $exception->getCode());
        }
        $msg = 'ایجاد مهارت با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.skills'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
        return view('back.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $validataDate = $request->validate([
            'name' => 'required',
        ]);
        try {
            $skill->update($request->all());

        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.skills')->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش مهارت  با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.skills'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        $msg = 'ایتم مورد نظر حذف گردید';
        return redirect(route('admin.skills'))->with('success', $msg);
    }

    public function updatestatus(Skill $skill)
    {
        if ($skill->status == 1) {
            $skill->status = 0;
        } else {
            $skill->status = 1;
        }
        $skill->save();
        $msg = 'بروز رسانی با موفقیت ثبت گردید';
        return redirect(route('admin.skills'))->with('success', $msg);
    }

}

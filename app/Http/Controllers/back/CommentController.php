<?php

namespace App\Http\Controllers\back;

use App\Article;
use App\Http\Controllers\Controller;
use App\Comment;
use Illuminate\Http\Request;
use Mockery\Exception;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::orderBy('id', 'DESC')->get();
        return view('back.comments.comments', compact('comments'));
    }

    public function edit(Comment $comment)
    {
        //
        return view('back.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {

        $validataDate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ]);
        $comment->update($request->all());

        try {
//           $articles= $articles->create($request->all());
//           $articles->categories()->attach($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect(route('admin.commnts.edit'))->with('warning', $exception->getCode());
        }
        $msg = 'ایجاد دسته بندی با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.comments'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        $msg = 'ایتم مورد نظر حذف گردید';
        return redirect(route('admin.comments'))->with('success', $msg);
    }

    public function updatestatus(Comment $comment)
    {
        if ($comment->status == 1) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }
        $comment->save();

        $msg = 'بروز رسانی با موفقیت ثبت گردید';
        return redirect(route('admin.comments'))->with('success', $msg);
    }
}

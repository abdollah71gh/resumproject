<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Article;
use App\frontmodels\Category;
use App\frontmodels\Comments;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentSend;

class CommentController extends Controller
{
    //
    public function store(Request $request, Article $article)
    {
        //
//     return $article;

//      $article->comments()-create([
//          'name'=>$request->name,
//          'email'=>$request->email,
//          'body'=>$request->body,
//      ]);
        $article->comments()->create($request->all());

        $validataDate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ]);

        Mail::to($request->email)
            ->send(new CommentSend($request,$article));

        $msg = 'کامنت مورد نظر ارسال شد';
        return back()->with('success', $msg);

    }
}

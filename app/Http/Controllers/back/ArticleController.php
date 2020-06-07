<?php

namespace App\Http\Controllers\back;

use App\Category;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Mockery\Exception;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('id', 'DESC')->get();
        return view('back.articles.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoris = Category::all()->pluck('name', 'id');
        return view('back.articles.create', compact('categoris'));
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
        if (empty($request->slug)) {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->name);
        } else {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->slug);
        }
        $request->merge(['slug' => $slug]);
        $articles = new Article();
        $articles = $articles->create($request->all());
        $articles->categoris()->attach($request->categories);
        $validataDate = $request->validate([
            'name' => 'required',
        ]);
        try {
//           $articles= $articles->create($request->all());
//           $articles->categories()->attach($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.articles.create')->with('warning', $exception->getCode());
        }
        $msg = 'ایجاد دسته بندی با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $categoris = Category::all()->pluck('name', 'id');
        return  view('back.articles.edit',compact('article','categoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $article->update($request->all());
        $article->categoris()->sync($request->categories);
        $validataDate = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        try {
//           $articles= $articles->create($request->all());
//           $articles->categories()->attach($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect('admin.articles.edit')->with('warning', $exception->getCode());
        }
        $msg = 'ایجاد دسته بندی با موفقیت در دیتا ثبت گردید';
        return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        $msg='ایتم مورد نظر با موفقیت حذف گردید';
        return  redirect(route('admin.articles'))->with('success',$msg);
    }

    public function updatestatus(Article $article)
    {
        if ($article->status == 1) {
            $article->status = 0;
        } else {
            $article->status = 1;
        }
        $article->save();

        $msg = 'بروز رسانی با موفقیت ثبت گردید';
        return redirect(route('admin.articles'))->with('success', $msg);
    }
}


<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\frontmodels\Article;
use App\frontmodels\Category;
use App\frontmodels\About;
use App\frontmodels\User;
use App\frontmodels\Skill;
use App\frontmodels\Sample;

class HomeController extends Controller
{
    //
    public function index()
    {
        $abouts = About::orderBy('id', 'DESC')->get();
        $skills = Skill::all();
        $name = $skills->unique('name');
        $portfolios = Sample::all();
        $tags = $portfolios->unique('tag');
        $list = $portfolios->unique('name');
        return view('front.main', compact('abouts', 'skills', 'name', 'portfolios','tags','list'));
    }
}

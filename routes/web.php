<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify'=>true]);
//روت های ادمین برای مدیریت کاربران
Route::prefix('admin')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\AdminController@index')->name('admin.back');
    Route::get('/users', 'back\UserController@index')->name('admin.users');
    Route::get('/profile/{user}', 'back\UserController@edit')->name('admin.profile');
    Route::post('/profileupdate/{user}', 'back\UserController@update')->name('admin.profileupdate');
    Route::get('/delete/{user}', 'back\UserController@destroy')->name('admin.user.delete');
    Route::get('/user/status/{user}', 'back\UserController@updatestatus')->name('admin.user.status');
});
//روت های ادمین برای مدیریت دسته بندی ها
Route::prefix('admin/categoris')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\CategoryController@index')->name('admin.categoris');
    Route::get('/create', 'back\CategoryController@create')->name('admin.categoris.create');
    Route::post('/store', 'back\CategoryController@store')->name('admin.categoris.store');
    Route::get('/edit/{category}', 'back\CategoryController@edit')->name('admin.categoris.edit');
    Route::post('/update/{category}', 'back\CategoryController@update')->name('admin.categoris.update');
    Route::get('/user/destroy/{category}', 'back\CategoryController@destroy')->name('admin.categoris.destroy');
});
//روت های ادمین برای مدیریت مطالب
Route::prefix('admin/articles')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\ArticleController@index')->name('admin.articles');
    Route::get('/create', 'back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'back\ArticleController@update')->name('admin.articles.update');
    Route::get('/user/destroy/{article}', 'back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}', 'back\ArticleController@updatestatus')->name('admin.articles.status');

});
//روت های ادمین برای مدیریت نظرات
Route::prefix('admin/comments')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\CommentController@index')->name('admin.comments');
    Route::get('/edit/{comment}', 'back\CommentController@edit')->name('admin.comments.edit');
    Route::post('/update/{comment}', 'back\CommentController@update')->name('admin.comments.update');
    Route::get('/user/destroy/{comment}', 'back\CommentController@destroy')->name('admin.comments.destroy');
    Route::get('/status/{comment}', 'back\CommentController@updatestatus')->name('admin.comments.status');

});
//روت های ادمین برای مدیریت پروفایل کاربر
Route::prefix('admin/abouts')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\AboutController@index')->name('admin.abouts');
    Route::get('/create', 'back\AboutController@create')->name('admin.abouts.create');
    Route::post('/store', 'back\AboutController@store')->name('admin.abouts.store');
    Route::get('/edit/{about}', 'back\AboutController@edit')->name('admin.abouts.edit');
    Route::post('/update/{about}', 'back\AboutController@update')->name('admin.abouts.update');
    Route::get('/destroy/{about}', 'back\AboutController@destroy')->name('admin.abouts.destroy');
});
//روت های ادمین برای مدیریت مهارت
Route::prefix('admin/skills')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\SkillController@index')->name('admin.skills');
    Route::get('/create', 'back\SkillController@create')->name('admin.skills.create');
    Route::post('/store', 'back\SkillController@store')->name('admin.skills.store');
    Route::get('/edit/{skill}', 'back\SkillController@edit')->name('admin.skills.edit');
    Route::post('/update/{skill}', 'back\SkillController@update')->name('admin.skills.update');
    Route::get('/destroy/{skill}', 'back\SkillController@destroy')->name('admin.skills.destroy');
    Route::get('/status/{skill}', 'back\SkillController@updatestatus')->name('admin.skills.status');

});
//روت های ادمین برای مدیریت نمونه کارها
Route::prefix('admin/samples')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\SampleController@index')->name('admin.samples');
    Route::get('/create', 'back\SampleController@create')->name('admin.samples.create');
    Route::post('/store', 'back\SampleController@store')->name('admin.samples.store');
    Route::get('/edit/{sample}', 'back\SampleController@edit')->name('admin.samples.edit');
    Route::post('/update/{sample}', 'back\SampleController@update')->name('admin.samples.update');
    Route::get('/destroy/{sample}', 'back\SampleController@destroy')->name('admin.samples.destroy');
    Route::get('/status/{sample}', 'back\SampleController@updatestatus')->name('admin.samples.status');

});

//روت فرانت
Route::get('/','front\HomeController@index')->name('front.main');



// پروفایل سمت کربر شامل ویرایش و ذخیره سازی
Route::get('/profile/{user}', 'UserController@edit')->name('profile')->middleware(['auth','verified']);
Route::post('/profile/{user}', 'UserController@update')->name('profileupdate');
Route::get('/articles', 'front\ArticleController@index')->name('articles');
Route::get('/article/{article}', 'front\ArticleController@show')->name('article');
Route::post('/comment/{article}', 'front\CommentController@store')->name('comment.store');


//روت فایل منیجر
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

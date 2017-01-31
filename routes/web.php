<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/", 'Controller@manageWelcome');
Route::get('/test', function () {
    return view('test');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/createAccount', function () {
    return view('register');
});
Route::post('create','Controller@insert');
Route::any('matriphe/imageupload', function(){
    $data = [];

    echo config('imageupload.library');

    if (Request::hasFile('file')) {
        $data['result'] = Imageupload::upload(Request::file('file'));
    }

    return view('form')->with($data);
});
Route::get('/admin', function () {
    return view('admin');
});
Route::post('adminLogin','Controller@adminLogin');
Route::get('/admin/createHash', function () {
    return view('createHash');
});
Route::post('createHash','Controller@createHash');
Route::get('/admin_panel', function () {
    return view('admin_panel');
});
Route::get('switchSubjects/{subId}',
        ['as'=> 'subjectswitch', 'uses'=>'Controller@switchSubjects']
);
Route::get('userProfile/{userId}',
        ['as'=> 'userView', 'uses'=>'Controller@userProfile']
);
Route::post("storesubjects", 'Controller@storeSubjects');
Route::post("storeSlider", 'Controller@storeSlider');
Route::post("createmaster", 'Controller@createMaster');
//Route::post("loginUser", 'Controller@loginUser');
Route::post("updateSubjectScreen", 'Controller@updateSubjectScreen');
Route::post("updateSlider", 'Controller@updateSlider');
Route::post("updateExpiraData", 'Controller@updateExpiraData');
Route::post("updateNews", 'Controller@updateNews');
Route::post("storeNews", 'Controller@storeNews');
Route::any("/addingTimeTable", 'Controller@addingTimeTable');
Route::any("/updateteachersubjet", 'Controller@updateTeacherSubject');
Route::any("/updatecontact", 'Controller@updateContact');
Route::any("/updateabout", 'Controller@updateAbout');
Route::post("storeGeneral", 'Controller@storeGeneral');
Route::post("updateGeneral", 'Controller@updateGeneral');
Route::get("/show", 'Controller@showSubjects');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::any('loginUser','Controller@loginUser');
Route::post("storeLocation", 'Controller@storeLocation');
Route::get('searchajax',array('as'=>'searchajax','uses'=>'Controller@autoComplete'));
Route::get('subjectNameajax',array('as'=>'subjectNameajax','uses'=>'Controller@subjectNameAuto'));

<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



//AdminController
Route::group(['namespace' => 'Admin\Auth\Teacher'] , function () {
    
    // Route::group(['prefix' => 'teacher'] , function () {
    
        Route::get('','AuthController@login')->name('teacher.login');
    
    // });

});


//AdminController
Route::group(['namespace' => 'Admin\Auth'] , function () {

    Route::get('adminstrator','AuthController@login')->name('admin.login');
    Route::POST('/Admin/login','AuthController@Submitlogin')->name('admin.Submitlogin');
    Route::group(['middleware'=>'PreventBackHistory'],function(){
        Route::POST('/Admin/logout','AuthController@signout')->name('admin.signout');
    });

    Route::get('/forget/password','AuthController@forgetpassword')->name('admin.forgetpassword');

    Route::POST('/Admin/recive/email','AuthController@reciveemail')->name('admin.reciveemail');
    Route::get('/forget/password/sendtoken','AuthController@sendToken')->name('admin.sendToken');
    Route::post('/forget/password/ressetpassword','AuthController@ressetpassword')->name('admin.ressetpassword');
});
    Route::group([ 'namespace' => 'Admin','middleware' => ['AdminAuth','PreventBackHistory'] ,'prefix'=>'admin'] , function () {
    //user operations
    Route::get('/user','UserController@index')->name('admin.user');
    Route::post('/usertype','UserController@usertype')->name('admin.usertype');
    Route::post('/searchuser','UserController@searchuser')->name('admin.searchuser');
    Route::get('/user/create','UserController@create')->name('admin.usercreate');
    Route::post('/user/store','UserController@store')->name('admin.user.store');
    Route::get('/user/edit/{id}/{usertype}','UserController@edit')->name('admin.useredit');
    Route::post('/user/update/','UserController@update')->name('admin.userupdate');
    Route::post('/user/destroy/','UserController@destroy')->name('admin.userdestroy');

    //liberary opreation
    Route::get('/liberary/download-pdf/{id}','liberaryController@downloadPdf')->name('admin.download_pdf');
    Route::get('/liberary','liberaryController@index')->name('admin.liberary');
    Route::get('/liberary/createbook','liberaryController@create')->name('admin.createbook');
    Route::post('/liberary/storebook','liberaryController@store')->name('admin.storeebook');
    Route::get('/liberary/editbook/{id}','liberaryController@edit')->name('admin.editbook');
    Route::post('/liberary/updatebook','liberaryController@update')->name('admin.updatebook');
    Route::post('/liberary/destroybook','liberaryController@destroy')->name('book.destroy');
    Route::post('/liberary/search','liberaryController@search')->name('liberary.search');

    Route::get('/liberary/changebook/Acceptance/{bookid}/{newstatus}','liberaryController@updatestatus')->name('admin.changestatus.book');

    //setting
    Route::resource('/subjects','subjectController');
    Route::resource('/classes','classesController');
    Route::resource('/semesters','semesterController');
    Route::resource('/acadimicyears','acadimicyearController');
    Route::resource('/bookcategories','bookcategoryController');
    Route::resource('/fileextentions','fileextentionController');

    //dashboard
    Route::get('/dashboard','dashboardController@index')->name('admin.dashboard');

    # Subscribtions
    Route::get('/subscribtions','SubscribtionsController@index')->name('admin.subscribtions.index');


    //frontend views
    Route::get('/setuplogbook',function(){
        return view('Admin.setupLogbook.index');
    })->name('Admin.setuplogbook');

    Route::get('/setuplogbook/create',function(){
        return view('Admin.setupLogbook.create');
    })->name('Admin.setuplogbook.create');

    Route::get('/logbook',function(){
        return view('Admin.logbook.index');
    })->name('Admin.logbook');


    Route::get('/homework',function(){
        return view('Admin.homework.index');
    })->name('Admin.homework');
    Route::get('/homework/create',function(){
        return view('Admin.homework.create');
    })->name('Admin.homework.create');


    Route::get('/exam',function(){
        return view('Admin.exam.index');
    })->name('Admin.exam');
    Route::get('/exam/create',function(){
        return view('Admin.exam.create');
    })->name('Admin.exam.create');



    Route::get('/notification',function(){
        return view('Admin.notification.index');
    })->name('Admin.notification');

    Route::get('/notification/create',function(){
        return view('Admin.notification.create');
    })->name('Admin.notification.create');

    Route::get('/finance',function(){
        return view('Admin.financeopreation.index');
    })->name('Admin.finance');

    Route::get('/generalsetting',function(){
        return view('Admin.generalSetting.index');
    })->name('Admin.generalsetting');
});





Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    });
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    });
});


Route::fallback(function () {
    // Route::group(['namespace' => 'Admin\Auth'] , function () {
    //  Route::get('/login','AuthController@login')->name('admin.login');
    // });

    return view('Admin.pages.error_404');

    // return response()->json([
    //     'data' => [],
    //     'success' => false,
    //     'status' => 404,
    //     'message' => 'Invalid Route'
    // ]);
});


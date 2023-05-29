<?php

/* .................Unauthentication Group .............*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));
Route::get('/category/{designation}', array('as' => 'getcategory','uses' => 'CategoryController@getcategory'));
Route::get('/profile/{id}', array('as' => 'getprofile','uses' => 'CategoryController@getprofile'));
Route::get('/message/{id}', array('as' => 'getmessage','uses' => 'MessageController@getmessage'));

Route::get('/members', array('as' => 'getmembers','uses' => 'MembersController@getmembers'));
Route::get('removemember/{id}','MembersController@removemember');

Route::group(array('before' => 'csrf'), function(){

Route::post('/query', array('as' => 'postquery','uses' => 'CategoryController@postquery'));
Route::post('/search', array('as' => 'postsearch','uses' => 'CategoryController@postsearch'));
Route::post('/members', array('as' => 'postmembers','uses' => 'MembersController@postmembers'));

       });



Route::group(array('before' => 'guest'), function() {

Route::get('/login', array('as' => 'getlogin', 'uses' => 'AccountController@getlogin'));
Route::group(array('before' => 'csrf'), function(){
        Route::post('/login', array('as' => 'postlogin', 'uses' => 'AccountController@postlogin' ));
    });
Route::get('/registration', array('as' => 'getregistration', 'uses' => 'AccountController@getregistration'));
Route::group(array('before' => 'csrf'), function(){
        Route::post('/registration', array('as' => 'postregistration', 'uses' => 'AccountController@postregistration' ));
    });
Route::get('/activate/{code}', array('as' => 'activate','uses' => 'AccountController@getActivate'));
Route::get('/forgotpassword', array('as' => 'getforgotpassword','uses' => 'AccountController@getforgotpassword'));
Route::group(array('before' => 'csrf'), function(){
        Route::post('/forgotpassword', array('as' => 'postforgotpassword', 'uses' => 'AccountController@postforgotpassword' ));
    });
Route::get('/recover/{code}', array('as' => 'getrecover','uses' => 'AccountController@getrecover'));




// My First Project

});








  /*........Authenticated group.......... */

Route::group(array('before' => 'auth'), function() {


Route::get('/changepassword', array('as' => 'changepassword','uses' => 'AccountController@getchangepassword'));
Route::group(array('before' => 'csrf'), function() {
		 Route::post('/changepassword', array('as' => 'postchangepassword','uses' => 'AccountController@postchangepassword'));
	 });

Route::get('/logout', array('as' => 'logout',                    'uses' => 'AccountController@getlogout'));
Route::get('/next', array('as' => 'next',                        'uses' => 'HomeController@next'));
Route::get('/viewprofile', array('as' => 'getviewprofile',       'uses' => 'AccountController@getviewprofile'));
Route::get('/downloadpublish/{id}', array('as' => 'downloadpublish',   'uses' => 'ProfileController@downloadpublish'));

Route::group(array('before' => 'csrf'), function() {
        /* For post adding */
         Route::post('/viewprofile1', array('as' => 'posteducationalbackground',  'uses' => 'ProfileController@posteducationalbackground'));
         Route::post('/viewprofile2', array('as' => 'postprofessionalexperience', 'uses' => 'ProfileController@postprofessionalexperience'));
         Route::post('/viewprofile3', array('as' => 'postfieldofinterest',        'uses' => 'ProfileController@postfieldofinterest'));
         Route::post('/viewprofile4', array('as' => 'postpublications',           'uses' => 'ProfileController@postpublications'));
         
         /* For post editing */
         Route::post('/viewprofile11', array('as' => 'postediteducation',           'uses' => 'ProfileController@postediteducation'));
         Route::post('/viewprofile22', array('as' => 'posteditexperience',          'uses' => 'ProfileController@posteditexperience'));
         Route::post('/viewprofile33', array('as' => 'posteditfields',              'uses' => 'ProfileController@posteditfields'));
         Route::post('/viewprofile44', array('as' => 'posteditpublications',        'uses' => 'ProfileController@posteditpublications'));
         Route::post('/viewprofile55', array('as' => 'postdownloads',               'uses' => 'ProfileController@postdownloads'));

         Route::post('/posteditprofile', array('as' => 'posteditprofile',           'uses' => 'ProfileController@posteditprofile'));
         Route::post('/postprofilepicture', array('as' => 'postprofilepicture',     'uses' => 'ProfileController@postprofilepicture'));
         

     });
Route::get('deletedownloads/{id}','CategoryController@deletedownloads');






	
});




?>


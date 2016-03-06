<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AboutCtrl@home');
	/*$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result,true);*/

	//$result = json_encode($result);
	//$result = $result[0]['author'];
	
	//$result = json_encode($data);
	//$result = ['kartk','raj','ishan','roy','adi','rachit'];
	//var_dump($result);

	/*$url = "https://graph.facebook.com/?ids=http://mycodingtricks.com";
	$result = json_decode(file_get_contents($url), true);
	*/	
    /*return view('welcome',compact('result'));*/
    //return view('welcome')->with('result',$result);
    //return (json_encode($result[0]));
    //return View('welcome')->with();
    //return $result[0];




Route::get('about/{id}','AboutCtrl@about');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::group(['middleware' => ['web']], function () {
    //
});
*/
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutCtrl extends Controller
{
    public function home(){
      //With out proxy server
      /*$url = "https://offline-news-api.herokuapp.com/stories";
      $result = json_decode(file_get_contents($url), true);
      */
     
      /*In proxy server this works well sometime coz curl works faster then above method*/
    	$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      $result = json_decode($result,true);
    	return view('welcome',compact('result'));
    }
    
    public function about($id) {
      //With out proxy server
      /*$url = "https://offline-news-api.herokuapp.com/stories";
      $result = json_decode(file_get_contents($url), true);
      */
      $ch = curl_init();
  		curl_setopt($ch, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
  		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  		$result = curl_exec($ch);
  		curl_close($ch);
  		$result = json_decode($result,true);
		foreach($result as $temp){
        if($temp['guid'] == $id){
          $details['guid'] = $temp['guid'];
          $details['author'] = $temp['author'];
          $details['title'] = $temp['title'];
          $details['date'] = $temp['date'];
          $details['body'] = $temp['body'];
          return View('about')->with('details',$details);
        }
      }
    }
}
 
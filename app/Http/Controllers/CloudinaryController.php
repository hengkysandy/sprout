<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

use App\CloudinaryMapping;

class CloudinaryController extends Controller
{

  public function download(Request $request){
      
      $url = urldecode($request->url);
      $cm = CloudinaryMapping::where('url',$url)->first();
      $currTime = strtotime(date('c'));
      $mask = file_get_contents('images/masking.png');
      $raw = file_get_contents($url);
      $newData = substr($raw, strlen($mask),strlen($raw));
      file_put_contents('cache/'.$cm['original_filename'], $newData);

      $file_url = 'cache/'.$cm['original_filename'];
      header('Content-Type: application/octet-stream');
      header("Content-Transfer-Encoding: Binary"); 
      header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
      readfile($file_url); 

      ignore_user_abort(true);
      unlink($file_url);
      

  }

    public function upload(Request $request)
    {
  //   	$response = Cloudder::upload($request->filename->path())->getResult();
  //   	$url = $response['url']; //url
  //   	echo $url;

  //       var d = {     'nama' : 'haha',     'pass' : 'hehe' }
		// sessionStorage.setItem('data',JSON.stringify(d)) var obj =
		// JSON.parse(sessionStorage.getItem('data'))     
		// obj.nama
	}

    public function test()
    {
    	return view('test');
    }
}

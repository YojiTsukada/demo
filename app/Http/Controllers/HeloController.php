<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Http\Controllers\Controller;

class HeloController extends Controller
{
//    public function Index(Request $request)
    public function getIndex(Request $request)
    {
    return view('sample',['message' => 'please type........']);
//    $res = 'ID : ' . $request->id;
//    $geturl = $request->url();
    return view('sample', ['message' => $res]);
//    return view('sample', ['url' => $geturl]);
    }

    public function update(Request $request)
    {
      $geturl = $request->url();
      $fullurl = $request->path();


      $res = "you typed: " . $request->input('str');
      $res .= "<br />" . "url : " . $geturl;
      $res .= "<br />" . "fullurl : " . $fullurl;
//      return view('sample', ['message' => $res]);
      return view('sample',['message' => $res ]);

    }
}

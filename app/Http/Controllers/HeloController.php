<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Http\Controllers\Controller;

class HeloController extends Controller
{
//    public function Index(Request $request)
    public function getIndex(Request $request)
    {
//      $users = DB::statement('select * from test.check');

    $users = DB::select('select * from test.check where id = ?', [1]);
    var_dump($users);
    return view('sample', ['message' => $users]);
//    return view('sample',['message' => 'please type........']);
//    return view('sample', ['message' => $res]);
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

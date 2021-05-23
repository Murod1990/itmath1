<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class EcxelController extends Controller
{
  

public function indexexcel()
{

$sqk = DB::table('ecxels')->paginate(5);

$sqc = DB::table('cplus')->paginate(5);

$sqd = DB::table('python')->paginate(5);

return view('tur',compact('sqk','sqc','sqd'));




}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Darscontroller extends Controller
{
    public function php1()
    {
      return view ('darslar.php1');  
    }
    public function boshlandi()
    {
      return view ('darslar.index'); 
    }
}
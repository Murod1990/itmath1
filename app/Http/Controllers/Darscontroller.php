<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Darscontroller extends Controller
{
    public function php1()
    {
      return view ('darslar/php_dars.php1');  
    }
    public function boshlandi()
    {
      return view ('darslar.index'); 
    }

public function ozgar()
{
  return view ('darslar/php_dars.hompage');
}

public function sintaksis()
{
  return view ('darslar/php_dars.sintaksis');
}

public function orgauvchi()
{
  return view ('darslar/php_dars.ozgauvchi');
}
public function maltur()
{
  return view ('darslar/php_dars.maltur');
}
 public function strlar()
 {
   return view ('darslar/php_dars.satrlar');
 }

}
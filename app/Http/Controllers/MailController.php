<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
     public function emailCont(Request $request)
     {
$this->validate($request,[

'name'=>'Required',
'email'=>'Required',
'subject'=>'Required',
'message'=>'Required'
]);

$date = array(

'name'=>$request->name,
'subject' => $request->subject,
'message' => $request->message
 
);
Mail::to('jonsrasulov@gmail.com')->send(new SendMail($date));
return back()->with('success', " So'rovingiz uchun Rahmat !");

 }




}

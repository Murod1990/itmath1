<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
     public function build(Request $request)
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
return back()->with('success', " So'rovingiz uchun rahmat sizga tez orada bog'lanamiz !");

 }
}

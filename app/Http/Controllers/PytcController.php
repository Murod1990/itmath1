<?php

namespace App\Http\Controllers;

use App\pytc;
use Illuminate\Http\Request;
use DB;
use  Validator;
class PytcController extends Controller
{


    public function saqqq()
    {
  
        $seach = DB::table('pytcs')->paginate(5);

         return view ('darslar/php_dars.lar_video',compact('seach'));
    }


    public function postmani()
{
    return response()->json(pytc::get(),200);// Barcha qiymatlarni olish
}




public function postmaniedit($id)
{
    $qiymatei = pytc::find($id);

    if(is_null($qiymatei))
    {

        return response()->json(['error'=>'true','message'=>'Not found'], 404);
    }
      return response()->json(pytc::find($id),200); //qiymatning id sini tanlash uchun ishlatiladi
}
    

   
    public function inserta(Request $request)
    {

$insertu=[
'mavzu'=>'required|min:2|',
'mavzu_title'=> 'required|min:2|',
'Video' => 'required|min:2|',
'video_title'=> 'required|min:2|',
'kod'=> 'required|min:2|',
'kod_title' => 'required|min:2|'
];
$velidator= Validator::make($request->all(),$insertu);

if($velidator->fails())
{
    return response()->json($velidator->errors(),400);
}
        $qiymatei=pytc::create($request->all()); // qiymat qo'shish uchun ishlatiladi
        return response()->json($qiymatei,201);
    }
        
    public function editwer(Request $request, $id)
    {
        $insertu=[
            'mavzu'=>'required|min:2|',
            'mavzu_title'=> 'required|min:2|',
            'Video' => 'required|min:2|',
            'video_title'=> 'required|min:2|',
            'kod'=> 'required|min:2|',
            'kod_title' => 'required|min:2|'
            ];
            $velidator= Validator::make($request->all(),$insertu);
            
            if($velidator->fails())
            {
                return response()->json($velidator->errors(),400);
            }
            $qiymatei = pytc::find($id);

            if(is_null($qiymatei))
           {
      
            return response()->json(['error'=>'true','message'=>'Not found'], 404);
            }

        $qiymatei->update($request->all());
        return response()->json($qiymatei,200);   //qiymatlarni  edit qilish uchun ishlatiladi
        } 
    
       public function delateas(Request $request, $id)
      {
        $qiymatei = pytc::find($id);

        if(is_null($qiymatei))
        {
    
            return response()->json(['error'=>'true','message'=>'Not found'], 404);
        }

        $qiymatei->delete();
        return response()->json('',204);      //qiymatlarni  o'chirish  uchun ishlatiladi
    } 
    
    




}

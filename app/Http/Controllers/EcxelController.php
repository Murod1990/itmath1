<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\excxel;
use App\cplusws;
use App\pythin;
use Validator;

class EcxelController extends Controller
{
  

public function indexexcel()
{

$sqk = DB::table('ecxels')->paginate(5);

$sqc = DB::table('cplus')->paginate(5);

$sqd = DB::table('python')->paginate(5);

return view('tur',compact('sqk','sqc','sqd'));


}


public function postmaniop()
{

    return response()->json(excxel::get(),200);
}



public function postmanieditwq($id)
{
    $qiymatei = excxel::find($id);

    if(is_null($qiymatei))
    {

        return response()->json(['error'=>'true','message'=>'Not found'], 404);
    }
      return response()->json(excxel::find($id),200); //qiymatning id sini tanlash uchun ishlatiladi
}


public function postmaninsert( Request $request)

{
    
$postmaninsert = [

'mavzu'=>'required|min:2|max:255|',
'mavzu_title'=>'required|min:2|max:255|'

];

$vel = Validator::make($request->all(),$postmaninsert);

if($vel->fails())
{
    return response()->json($vel->errors(),400);
}
        $qiymatei=excxel::create($request->all()); 
        return response()->json($qiymatei,201); // qiymat qo'shish uchun ishlatiladi

}


public function exeleditor(Request $request, $id)
{
    $ecxeletitor = [
        'mavzu'=>'required|min:2|max:255|',
        'mavzu_title'=>'required|min:2|max:255|'
    ];
    $ecxelre = Validator::make($request->all(),$ecxeletitor);
if($ecxelre->fails())
{
    return response()->json($ecxelre->errors(),400);

}
$eritorwq = excxel::find($id);

          if(is_null($eritorwq))
           {
      
            return response()->json(['error'=>'true','message'=>'Not found'], 404);
            }

            $eritorwq->update($request->all());
            return response()->json($eritorwq,200);   //qiymatlarni  edit qilish uchun ishlatiladi

}


public function deletecxel(Request $request,$id)
{

    $excedelet = excxel::find($id);
    if(is_null($excedelet))
    {
        return response()->json(['error'=>'true','message'=>'Not found'], 404);
    }
    $excedelet->delete();
    return response()->json('',204);  //qiymatlarni  o'chirish  uchun ishlatiladi
}





}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PytcController extends Controller
{
    public function saq()
    {
  
        return view ('welcome');
    }

    
    public function seach(Request $request )
    {
  if($request->ajax())
  {
    $qiymat =" ";
 $shart =  $request ->get('search');

  if( $shart !='')
  {
    
    $seach = DB::table('pytcs')->Where('mavzu','Like','%'.$shart ."%")->simplePaginate(5);  
        foreach( $seach as $key => $sea )
       
        {
            $qiymat .='<tr>'.

            '<td>'.$sea->id.'</td>'.
            '<td>'.$sea->mavzu.'</td>'.
            '<td>'.$sea->izoh.'</td>'.
            '</tr>'; 
        }
        
        echo  ($qiymat);
       
    }

    else

    {
        $seach = DB::table('pytcs')
        ->orderBy('id','desc')
        ->simplePaginate(5);

        return Response($qiymat);

    }
}
    }
    
}

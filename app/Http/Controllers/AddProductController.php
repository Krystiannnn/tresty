<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShowItems;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
  
    public function addproduct(Request $request){
       
        $reg = $request->query('type');

        $items = new ShowItems();
      

        return view('page/add_product', [
            'key' => $reg,
            'type' => $items->showType()
            
            
         ]);
    }
  

    public function addDb(Request $requesty){
       dd($requesty);
        $regs = $requesty->query('type');

        $items = new ShowItems();
      

        return view('page/add_product', [
            'info' => 'dodano',
            'type' => $items->showType()
            
            
         ]);
    }
   
}
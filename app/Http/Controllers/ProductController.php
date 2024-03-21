<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShowItems;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  

  
    public function authors(){
       
      $authors = new ShowItems();

        return view('page/authors', [
            // 'users' => User::all(),
            'type' => $authors->showType(),
             'authors' => $authors->getAuthors()
            
         ]);
    }

    public function products(){
       
      $items = new ShowItems();

       return view('page/items', [
             'keys' => $items->showKeys(),
            'type' => $items->showType(),
             'items' => $items->getItems(),
         
            
         ]);
    }

    public function type(Request $request){

      $reg = $request->query('type');
      $type = new ShowItems();

      $typekey = $type->showKeys();

      //dd($typekey[$reg]);
       
    return view('page/type', [
            'request' => $type->findType($reg),
            'type' => $type->showType(),
            'key' => $typekey[$reg],
            'typeItem' => $reg
           
        ]);
   }
   
}

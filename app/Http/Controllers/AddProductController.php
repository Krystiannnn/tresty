<?php

namespace App\Http\Controllers;

use App\Models\Additem;
use App\Models\ShowItems;
//use Illuminate\Http\RedirectResponse;
//use Illuminate\View\View;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
  
    public function addproduct(Request $request){
      // dd($request);
        $reg = $request->query('type');

        $items = new ShowItems();
      

        return view('page/add_product', [
            'key' => $reg,
            'type' => $items->showType(),
            'authors' => $items->getAuthors()
        ]);
    }

  

    public function addDb(Request $request){
      
      $title = $request->input('title');
      $price = $request->input('price');
      $author = $request->input('author');
      $genre = $request->input('genre');

      $validated = new Additem;
      $validated->validateB($title,  $price, $author, $genre); 

      //dd($validated);

        $items = new ShowItems();
      

       return view('page/add_product', [
        'key' => 'book',
        'type' => $items->showType(),
        'authors' => $items->getAuthors(),
        
       ]);
    }
   
}
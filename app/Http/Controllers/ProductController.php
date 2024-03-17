<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShowItems;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  

   // public function showUserProfile(Request $request)
   // {
   //     $user_id = $request->query('user_id');
        // Tutaj możesz wykonać inne operacje na przekazanym ID użytkownika
        // np. pobranie danych z bazy danych, wyświetlenie profilu, itp.
   // }
    
    public function authors(){
       
      $authors = new ShowItems();

        return view('authors', [
            // 'users' => User::all(),
            // 'users' => User::paginate(3),
             'authors' => $authors->getAuthors()
            
         ]);
    }

    public function products(){
       
      $items = new ShowItems();

       return view('items', [
            // 'users' => User::all(),
            // 'users' => User::paginate(3),
             'books' => $items->getItems()
            
         ]);
    }

    public function type(Request $request){

      $reg = $request->query('type');
      $type = new ShowItems();
      
       
    return view('type', [
            'request' => $type->findType($reg)
           // 'users' => User::paginate(3),
           // 'books' => $items->getItems()
           
        ]);
   }
   
}
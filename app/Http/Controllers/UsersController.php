<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Testy;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(){
   
        return view('users', [
           // 'users' => User::all(),
            'users' => User::paginate(3),
            'testy' => new Testy('blady', 'jerzyk')
        ]);
    }

   // public function showUserProfile(Request $request)
   // {
   //     $user_id = $request->query('user_id');
        // Tutaj możesz wykonać inne operacje na przekazanym ID użytkownika
        // np. pobranie danych z bazy danych, wyświetlenie profilu, itp.
   // }
    
    public function autors(){
       // echo 'ok';
        return view('autors', [
            // 'users' => User::all(),
            // 'users' => User::paginate(3),
            // 'testy' => new Testy('blady', 'jerzyk')
            
         ]);
    }
   
}

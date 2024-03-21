<?php

namespace App\Http\Controllers;
use App\Models\ShowItems; 
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function showHome(){
       // echo 'ok';

       $type = new ShowItems();

         return view('welcome', [
           
             'type' => $type->showType()

         ]);

    }



}
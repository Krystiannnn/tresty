<?php


namespace App\Models;
use App\Models\Items;
use Illuminate\Support\Facades\DB;

class ShowItems extends Items{
  //  public $name;
  //  public $surname;
  
 //   function __construct($name, $surname){
  //      $this->name = $name;
  //      $this->surname = $surname;
  //  }

    function getAuthors(){

        $q = DB::table('author')
        ->get();

        return $q;    

    }

    function getItems(){

        $q = DB::table('book')
        ->leftJoin('author', 'book.author_id', '=', 'author.id')
        ->get();

        $q2 = DB::table('comic')
        ->leftJoin('author', 'comic.author_id', '=', 'author.id')
        ->get();

        $q3 = DB::table('short_story_collection')
        ->leftJoin('author', 'short_story_collection.author_id', '=', 'author.id')
        ->get();

        $result = [$q,$q2,$q3];
  
        return $result;    

    }

    function showType(){
    
            return $this->type;
     
    }

    function findType($t){

      
        $ql = DB::table($t)
        ->leftJoin('author', $t.'.author_id', '=', 'author.id')
        ->get();


        return $ql;    
 
}
    
}
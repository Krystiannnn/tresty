<?php


namespace App\Models;
use App\Models\Items;
use Illuminate\Support\Facades\DB;

class ShowItems extends Items{
 

    function getAuthors(){

        $q = DB::table('author')
        ->get();

        return $q;    

    }

    function getItems() {
      $result = [];
  
      foreach ($this->type as $tableName) {
          $q = DB::table($tableName)
              ->leftJoin('author', $tableName . '.author_id', '=', 'author.id')
              ->get();
  
          $result[$tableName] = $q;
      }
  
      return $result;
  }

    function showType(){
    
            return $this->type;
     
    }

    function showKeys(){
    
      return $this->getKey();

}

    function findType($t){

      
        $ql = DB::table($t)
        ->leftJoin('author', $t.'.author_id', '=', 'author.id')
        ->get();


        return $ql;    
 
}
    
}
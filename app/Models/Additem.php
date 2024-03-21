<?php


namespace App\Models;
use App\Models\Items;
use Illuminate\Support\Facades\DB;

class Additem extends Items{
 
    function addProduct(){
        

     //   DB::table('users')->insert([
     //       'name' => 'John Doe',
     //       'email' => 'john@example.com',
     //   ]);
    }
  
    public function validateB($title,  $price, $author, $genre){
       
        unset($_SESSION['query']);
        unset($_SESSION['e_tytul']);
        unset($_SESSION['e_tytul2']);
        unset($_SESSION['e_price']);
        unset($_SESSION['e_genre']);
        unset($_SESSION['e_genre1']);




        $wszystko_OK=true;
        
        // walidacja
        $firstName = $title;       
        if ((strlen($firstName)<3) || (strlen($firstName)>30))
        {
            $wszystko_OK=false;
            $_SESSION['e_tytul']="the title must have from 3 to 30 characters!";
        }
        if (ctype_alnum($firstName)==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_tytul2']="Only letters and numbers";
        }
        

         $telefon = $price;
        if(ctype_digit($telefon)==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_price']="Only numbers";
        } 

               
        if ((strlen($genre)<3) || (strlen($genre)>30))
        {
            $wszystko_OK=false;
            $_SESSION['e_genre']="the genre must have from 3 to 30 characters!";
        }
        if (ctype_alnum($genre)==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_genre1']="Only letters and numbers";
        }
       
      
      
        if ($wszystko_OK==true)
         
        {        
          

            DB::table('book')->insert([
                'title' => $title,
                'price' => $price,
                'author_id' => $author,
                'genre' => $genre
            ]);

            $_SESSION['query']="added book";
        } else {
            $_SESSION['query']="book not added";
        }
        
        
    }    
}
<?php

if (isset($_REQUEST['analyze'])){
    
function word_validation ($string){
       
      if(!empty($string)){
         if (strlen($string) > 2){
            if (preg_match('/^[A-zčšžđćŠČĆŽĐ]+$/', $string)){
                  return 'Regex prošao';
            }else{
                return "Riječ za analizu ne smije sadržavati brojeve ili posebne znakove";
            }
         }else{
             return 'Riječi za analizu mora sadržavati najmanje tri slova';
         }
      }else{
         return 'Upišite riječ u polje!';
      }
   }

   function to_uppercase ($string){


   }
   function separate_into_letters ($string){
     //implode()  
   }

   function vowels($string){

   }

   function consonants ($string){
   }

   function cro_letters ($string){
   }

   function print ($string){
   }
} 

?>
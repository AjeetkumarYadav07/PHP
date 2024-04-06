<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <?php 
        // echo "Ajeet kumar";

           $name = "Ajeetkumar";
           $age = 23;
           $marks = 45.4;
           $isMaried = true ;
           $nam = "Ajay kumamr ";

           
    echo "My name is " . $name . "<br/>"; // Corrected the line break syntax
    echo "My age is " . $age  . "<br/>" ;
    echo " MY marks is "  . $marks   ; 
    echo " <br/> My name is  $nam  % " ; 
    echo "  are you married " . $isMaried ; 

     var_dump($name);  
     var_dump($age) ; 
     var_dump($marks) ;  
     ?> -->


     <?php  
       
        //  Operators In PHP 


        // $a = 10;
        // $b = 20 ; 
        //  $c = 2 ;

        //   echo " total of number = "  .  $a + $b  . "<br/>" ; 

        //   echo $a - $b ; 
        //   echo " <br/>  a and c total of  = " . $a * $c ; 



        // Post Incremeant and Post decrement 

        //  $a = 12;
          
        //  echo $a  . "<br/>" ;
        //   $a++ ; 
        //  echo $a . "<br/>" ;
        //   $a-- ;  
        //  echo $a ; 



        // Pre define function in php 
 
        //    Case Senstive ::::
         $user = "  Ankush " ;
          
         echo strlen($user) . "<br/>" ; 
         echo str_replace( "an" , "luv" , $user ) . "<br/> ";

        
          

        //  InCase Senstive ::

        // $newUser =  " Mohak "  ;
        //  echo   $newUser  ; 

        //  echo str_ireplace ("m" , "S"  , $newUser ) ; 


        //  $User = " Sanu " ;

        //  echo strtoupper ($User); 







        // --- Number function ---

          $num = 40.2 ;
            var_dump (is_int($num))  ;
            var_dump (is_float ($num)); 









            // ----Condition Statements ---=

   $number = 78077 ;
   if ($number == 78077) {
    echo " ok login " ;

   }
   
    else if ( $number  == 0) {
         echo " Invaild "; 
    }
   else {
      echo " youu can't login  " ; 
   }
   


//    $hours = 50 ;
//    $rate = 10 ;
//    $weekelyPaymetn = 0 ;
//     if ( $hours === 0) {
//          $weekelyPaymetn = 0 ;
//     }

//     if ( $hours <= 40){
//         $weekelyPaymetn = $hours * $rate ; 
//     }
      
//     else { 
//         $weekelyPaymetn = ( 40 * $rate) + ( ( $hours -  40  ) * $rate )  ; 
//     }
//     echo "Your total Wages is =  $weekelyPaymetn  " ; 


        //  $temp = 20 ;
         
         $Apple = 50 ;

         if  ( $Apple > 20 && $Apple  < 40 ){
                echo " its cheap"; 
         }

         else {
             echo  "its not cheap" ;
         }

         


        //  $network = " issue " ;

        //   switch ($network) {
        //     case 'A':
        //     echo " netwok is  not good" ;
                
            
        //     case "  issue  " :
        //       echo " network work is  working  ";
        

        //         case " isuue" :
        //         echo " network is failed " ; 
        //   }
  

    //     $network = " A";
    //  switch ($network) {
    //     case "A ":
    //      echo "network is good ";
    //         break;
        
    //     case " B" :
    //         echo " network is A  " ;
    //         break;

    //         case 'fine':
    //             echo " network error" ;
    //             break;
    //  }

    // $network = "A";
    // switch ($network) {
    //     case "A":
    //         echo "Network is good";
    //         break;
        
    //     case "B":
    //         echo "Network is A";
    //         break;
    
    //     case 'fine':
    //         echo "Network error";
    //         break;
    // }
    

    // $user1 = "user1";
    // $user2 = "user2";
    
    // $userCombined = $user1 . $user2;
    
    // switch ($userCombined) {
    //     case "user1":
    //         echo "Hello user2";
    //         break;
    //     case "user2":
    //         echo "Hello user1";
    //         break;
    //     case "user3":
    //         echo "Hello user 4";
    //         break;
    //     default:
    //         echo "Unknown user";
    //         break; }



$user1 = "user1";
$user2 = "user2";

switch ($user1) {
    case "user1":
        echo "Hello user1";
        break;
    default:
        echo "Unknown user";
        break;
}

switch ($user2) {
    case "user2":
        echo "Hello user2";
        break;
    default:
        echo "Unknown user";
        break;
}






     ?>
</body>
</html>
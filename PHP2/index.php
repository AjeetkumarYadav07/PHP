<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
</head>
<body>
    
  <?php   
     
      echo "hello ajeet  <br/> "  ;

      // $var = 5 ;

      //  echo " hello  $var "   ; 


      //    $age = 4 ;  
      //  if ( $age > 5) {
      //   echo "hello derr bayuay" ;
      //  }
      //  else {
      //     echo "kuch nhi mil hra " ;

     
      //  $i = 1 ;
      //  for ($i= 1; $i <=10 ; $i++) { 
      //     echo $i . "<br/>";
      //  }
         


    // $fruits = array ( "apple"  , "orange" , "bana" , "mango" ); 
      
    //   echo $fruits[0] ; 

    //   foreach($fruits as $fruit ){
    //       echo $fruit . "<br/>" ;
    //   }



      // Indexed Array 


      $Vegs = array("Sbji " , "Aalu" , "Kakri " , "Tamto ") ;

        // array_push($Vegs , " Tiki");
        // array_pop($Vegs) ;

        array_shift($Vegs);

        
        foreach ($Vegs as $Veg) {
           echo $Veg . "<br/>"  ; 
        }




   /*   
      associative array - An array with keuy => value pair 
      */


      $employess = array(
        "ajeet" => "software dev " ,
        "Komal"  => "Web dev " ,
        "Anshu" => "web sedi" ,
        ) ;

        echo "<pre>";
        print_r($employess) ;



  ?>
</body>
</html>
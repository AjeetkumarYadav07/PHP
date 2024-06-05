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
      
      // use Illuminate\Support\Facades
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
        
        ) ;

        echo "<pre>";
        print_r($employess) ;






        /* 

         multidimensional array - Array inside array 
         */


    $students = array(
         array("name" => "Ajeet" , "class" => "BCA"),
         array("name" => "kumar" , "class" => "B.Tech")
    );

   

    foreach ($students as $key => $value ){
      // echo "<pre>" ; 
      // print_r($value);
      
    foreach ($value as $k => $v){
       echo  "<br> $k <br/> :" .  $v . "<br>" ;
    }

    }
  //   $students = array(
  //     array("name" => "Ajeet", "class" => "BCA"),
  //     array("name" => "Kumar", "class" => "B.Tech")
  // );
  
  // // Loop through the array and echo each element
  // foreach ($students as $student) {
  //     echo "Name: " . $student['name'] . ", Class: " . $student['class'] . "<br>";
  // }
  
  ?>
</body>
</html>
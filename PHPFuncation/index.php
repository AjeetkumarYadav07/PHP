<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php 

   /*   
       user defined function 
       function  -is a block of statments that
       can be resued in a program 
       1: funtion call
       2: function defination 

   */


     Function call 

     $a = 15 ;
     $b = 20;
      sum($a , $b);

      function sum($a , $b)
      {
         echo $a + $b  . "<br>" ;
      }


        $firstNum = 15;
        $secondNum = 30;
          $total = sum($firstNum , $secondNum);
           echo $total . "<br>" ;
          function sum($num1 , $num2){
               return $num1 + $num2 ;
          }







     $a = 20;
     $b = 2;
      
      $output = minus($a , $b);
        echo $output . "<br>" ;
      function minus($a , $b) {
          return $a - $b ;
      }
   





      $test = 40 ;
      $marks = 2;

      $final = mul($test , $marks);
       echo $final ;
       function mul($mul1 , $mul2){
             return $mul1 * $mul2 ;
       }
     


  //  function myFun (){
  //   echo "hello function   <br>  ";
  //  }
    
  //  myFun() ;

  // echo "hello g "



?>
  
</body>
</html>
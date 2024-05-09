<?php 


   $servername = "localhost";
   $username =  "root";
   $password = "" ;
   $dbName = "phpfirst";


   /*   
      Creat ceonnection 
       */

//   $connection = new mysqli($servername , $username , $password);

//       // Check connection 

//        if ($connection->connect_error  ){
//           die ( "Coneection failed:"  . $connection->connect_error);


//        }

//        echo "Connection successful !" ; 






       
// Create connection
// $conn = mysqli_connect($servername, $username, $password , $dbName);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully !";


   $conn = mysqli_connect(
       $servername ,
       $username ,
       $password ,
       $dbName ,

   );
   if ($conn){
      echo "Connection successful";
   }
    else {
      echo "Connection unsuccessful";
    }
  

    
















?>
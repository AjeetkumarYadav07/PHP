<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php 
      
       echo "hello ajeet <br>  " ;
      
        /* 
           ##isset() 
           Return TRUE , if a variable is declared and not null 


           ## empty ()
            Return TRUE , if a variable is not declared , false, null , '"

        
        */


        // $name = "ajeet" ;
        // if(empty ($name)){
        //    echo "Name is SET" ;

        // }
        //  else 
        // echo   "Name is not SET" ;


      

    /*  
     ## $_GET , $_POST  

       PHP Special  / Super global varibales used to collect data from the HTML FORM , When data is sent a file via action 
         attribut in the <form> tag .

           <form action= "some_file.php" mehtod="post">

    */


      
      ?>

      <form action = "index.php" mehtod= "get" >
          <div>
             <label for=""> Username:</label>
             <input type="text" name= "username" >
          </div>

           <br>
            <div>
                <label for="">Password:</label>
                <input type="password" name ="password" >
            </div>
             <button type="submit" >  Log in  </button>
        </form>
</body>
</html>
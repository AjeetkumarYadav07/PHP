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
      //  echo "<pre>"; 
    
      if (isset($_POST["submit"])) {
          if (empty($_POST["username"])) {
              echo "Username is empty";
          } else {
              echo "Username is not empty";
          }
      }

      
      //  print_r($_GET); 


      
      ?>

      <form action = "index.php" method= "post" >
          <div>
             <label for=""> Username:</label>
             <input type="text" name= "username" >
          </div>

           <br>
            <div>
                <label for="">Password:</label>
                <input type="password" name ="password" >
            </div>
             <button type="submit"  name = "submit" >  Log in  </button>
        </form>



        <br> <br> <br>

        <a href="./index.php " > Home </a>;









        <form action="index.php" method="post">
    <label>Select your course:</label> <br> 

    <input type="radio" value="BCA" name="course"> BCA <br>
    <input type="radio" value="MCA" name="course"> MCA <br>
    <input type="radio" value="Same" name="course"> Same <br>
    <input type="radio" value="BA" name="course"> BA <br>
    <input type="radio" value="BBA" name="course"> BBA <br>
    <input type="radio" value="B.Tech" name="course"> B.TECH <br>

    <input type="submit" name="submit" value="Confirm">
</form>





        <?php 
if (isset($_POST["submit"])){
    $output = $_POST['course'];

    switch ($output) {
        case 'BCA':
            echo "You selected BCA";
            break;
        
        case "Same":
            echo "You selected Same";
            break;
        
        case "MCA":
            echo "You selected MCA";
            break;
        
        case "BBA":
            echo "You selected BBA";
            break;

        default:
            echo "Please select something!";
    }
}
?>







  <!-- // checkbox in PHP  -->

     <form action="" method="post" >
        
       <label for=""> Please slecte your fav. dishes </label> <br> <br>
        <input type="checkbox" value="Apple" name="fruit" > Apple  <br>
        <input type="checkbox" value="Banna" name="fruit" > Banna  <br>
        <input type="checkbox" value="Chiku" name="fruit" > Chiku <br>
        <input type="checkbox" value="Graps" name="fruit" > Graps <br>
        <input type="checkbox" value="Mango" name="fruit" > Mango <br>
      
          <input type="submit"  value="submit" name="sumit" >
     
     </form>
   

        
    

</body>
</html>
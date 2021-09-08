<?php

   //  header( "refresh:1; url=http://localhost/project/entry.php" );

?>


<?php      
    include('log_con.php');      $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
         //   header("Location:http://localhost/project/HOME.php");
         header( "refresh:1; url=http://localhost/project/entry.php" );
        }  

        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  

             header( "refresh:1; url= http://localhost/project/logIn.php" );


        }     
?>  
<?php

// wait 5 seconds and redirect :)
//echo "<meta http-equiv=\"refresh\" content=\"1;url=http://localhost/project/HOME.php\"/>";

?>
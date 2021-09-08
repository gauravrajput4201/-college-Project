<?php


?>



<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $user = $_POST['username'];
	 $pass1 =$_POST['password1'];
	 $pass = $_POST['password2'];
    if ($pass1==$pass) {


	 //check 

     $check=mysqli_query($conn,"select * from login where username ='$user' ");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo "<h1>customer exists</h1>";
    header( "refresh:1; url=http://localhost/project/shignUp.php" );  
   }
else{

// check off


	 $sql = "INSERT INTO login(username,password) values('$user','$pass')";
	 if (mysqli_query($conn, $sql)) {
 	 echo " <h1>Shign Up complete !</h1>";


     header( "refresh:1; url=http://localhost/project/entry.php" );
	
         } 

else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 };
}
	 
	?>
       <?php
        mysqli_close($conn);
	# code...
    }
    else{
    echo "<h1> Password Not Match</h1> ";
     header( "refresh:1; url=http://localhost/project/shignUp.php" );
}


}

?>
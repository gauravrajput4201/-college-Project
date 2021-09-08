<?php

     header( "refresh:1; url=http://localhost/project/HOME.php" );

?>


<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $country = $_POST['country'];
	 $positive = $_POST['positive'];
	 $active = $_POST['active'];
	 $recover = $_POST['recover'];
	  $death = $_POST['death'];
	 $sql = "INSERT INTO world_update( country_name,active_case,positive_case,recover_case,death_case) values('$country','$active','$positive','$recover','$death')";
	 if (mysqli_query($conn, $sql)) {
		echo "Data submited  successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 };
	 
	?>
	       <?php
	 mysqli_close($conn);
}
?>
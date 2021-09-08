<?php

     header( "refresh:1; url=http://localhost/project/HOME.php" );

?>



<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $state = $_POST['state'];
	 $positive = $_POST['positive'];
	 $active = $_POST['active'];
	 $recover = $_POST['recover'];
	  $death = $_POST['death'];
	 $sql = "INSERT INTO india_update(state_name,active_case,positive_case,recover_case,death_case) values('$state','$active','$positive','$recover','$death')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 };
	 
	?>
	 <script type="text/javascript">
        alert("successfully Submited Your Data");
        </script>
       <?php
        mysqli_close($conn);

}

?>
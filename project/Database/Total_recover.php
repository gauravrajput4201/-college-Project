<?php
include_once 'connection.php';
//$result = mysqli_query($conn,"SELECT SUM(positive_case) AS TotalItemsOrdered FROM india_update");
 $query = "SELECT SUM(recover_case) As Sum  FROM world_update";
 $query_result = mysqli_query ($conn,$query);
 while($row = mysqli_fetch_assoc($query_result))
 {
     $wrecover =$row['Sum'];
 }

?>

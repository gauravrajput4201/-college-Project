<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "update_point";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
//$result = mysqli_query($conn,"SELECT SUM(positive_case) AS TotalItemsOrdered FROM india_update");
 $query = "SELECT SUM(positive_case) As Sum  FROM world_update";
 $query_result = mysqli_query ($conn,$query);
 while($row = mysqli_fetch_assoc($query_result))
 {
     $output =$row['Sum'];
 }

?>

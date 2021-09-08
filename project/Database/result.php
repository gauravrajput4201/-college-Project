<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM world_update");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> World COVID19 Meter</title>
 <link rel="stylesheet" type="text/css" href="sty.css">

<body>
  <h1  id="head" align="center">  World COVID19 Meter </h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table id="table_id">
  
  <tr id="th_id">
    <th>Country Name</th>
    <th>Positive case</th>
    <th>Active Case</th>
    <th>Recover Case</th>
    <th>Death Case</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr id="tr1">
    <td id="value"><?php echo $row["country_name"]; ?></td>
    <td><?php echo $row["positive_case"]; ?></td>
    <td style="color:#20E904"><?php echo $row["active_case"]; ?></td>
    <td><?php echo $row["recover_case"]; ?></td>
    <td style="color: red"><?php echo $row["death_case"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "<h1> No result found </h1>";
}
?>
 </body>
</html>
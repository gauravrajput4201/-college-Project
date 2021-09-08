<?php  
include_once 'Database\res.php';
include_once 'Database\Total_active.php';
include_once 'Database\Total_recover.php';
include_once 'Database\Total_death.php';
include_once 'Database\ind_Total_positive.php';
include_once 'Database\ind_Total_active.php';
include_once 'Database\ind_Total_recover.php';
include_once 'Database\ind_Total_death.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATEPOINT</title>
   <link rel = "icon" href = "image\logo.png"
        type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="HOME.css">

	<!--<script type="text/javascript" src="slidebar.js"></script>-->
<!-- arrow perpose-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- end arrow -->
  <!-- footer link-->
<link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- End footer link-->

<!-- Graph page -->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Covid19 daily chart"
  },
  axisY: {
    title: "Number of Case"
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "Date ",
    dataPoints: [      
     {y:472,label:"jan 24"},
  {y:698,label:"jan 25"},
  {y:785,label:"jan 26"},
  {y:1781,label:"jan 27"},
  {y:1477,label:"jan 28"},
  {y:1755,label:"jan 29"},
  {y:2010,label:"jan 30"},
  {y:2127,label:"jan 31"},
  {y:2603,label:"feb 01"},
  {y:2838,label:"feb 02"},
  {y:3239,label:"feb 03"},
  {y:3915,label:"feb 04"},
  {y:3721,label:"feb 05"},
  {y:3173,label:"feb 06"},
  {y:3437,label:"feb 07"},
  {y:2676,label:"feb 08"},
  {y:3001,label:"feb 09"},
  {y:2546,label:"feb 10"},
  {y:2035,label:"feb 11"},
  {y:14153,label:"feb 12"},
  {y:5151,label:"feb 13"},
  {y:2662,label:"feb 14"},
  {y:2097,label:"feb 15"},
  {y:2132,label:"feb 16"},
  {y:2003,label:"feb 17"},
  {y:1852,label:"feb 18"},
  {y:516,label:"feb 19"},
  {y:977,label:"feb 20"},
  {y:996,label:"feb 21"},
  {y:978,label:"feb 22"},
  {y:554,label:"feb 23"},
  {y:882,label:"feb 24"},
  {y:741,label:"feb 25"},
  {y:992,label:"feb 26"},
  {y:1288,label:"feb 27"},
  {y:1507,label:"feb 28"},
  {y:1990,label:"feb 29"},
  {y:1980,label:"mar 01"},
  {y:1862,label:"mar 02"},
  {y:2571,label:"mar 03"},
  {y:2306,label:"mar 04"},
  {y:3094,label:"mar 05"},
  {y:3641,label:"mar 06"},
  {y:4058,label:"mar 07"},
  {y:3896,label:"mar 08"},
  {y:4435,label:"mar 09"},
  {y:4571,label:"mar 10"},
  {y:7316,label:"mar 11"},
  {y:8259,label:"mar 12"},
  {y:10933,label:"mar 13"},
  {y:10985,label:"mar 14"},
  {y:13031,label:"mar 15"},
  {y:12927,label:"mar 16"},
  {y:15776,label:"mar 17"},
  {y:20737,label:"mar 18"},
  {y:26179,label:"mar 19"},
  {y:30712,label:"mar 20"},
  {y:29492,label:"mar 21"},
  {y:32477,label:"mar 22"},
  {y:41626,label:"mar 23"},
  {y:43894,label:"mar 24"},
  {y:48737,label:"mar 25"},
  {y:61105,label:"mar 26"},
  {y:64855,label:"mar 27"},
  {y:66880,label:"mar 28"},
  {y:60644,label:"mar 29"},
  {y:64428,label:"mar 30"},
  {y:74217,label:"mar 31"},
  {y:77458,label:"apr 01"},
  {y:80453,label:"apr 02"},
  {y:84433,label:"apr 03"},
  {y:81792,label:"apr 04"},
  {y:70920,label:"apr 05"},
  {y:73287,label:"apr 06"},
  {y:78608,label:"apr 07"},
  {y:84839,label:"apr 08"},
  {y:85486,label:"apr 09"},
  {y:92206,label:"apr 10"},
  {y:79656,label:"apr 11"},
  {y:71712,label:"apr 12"},
  {y:70442,label:"apr 13"},
  {y:73370,label:"apr 14"},
  {y:83053,label:"apr 15"},
  {y:81008,label:"apr 16"},
  {y:85256,label:"apr 17"},
  {y:80654,label:"apr 18"},
  {y:75624,label:"apr 19"},
  {y:73690,label:"apr 20"},
  {y:75636,label:"apr 21"},
  {y:80258,label:"apr 22"},
  {y:84951,label:"apr 23"},
  {y:102100,label:"apr 24"},
  {y:90412,label:"apr 25"},
  {y:73545,label:"apr 26"},
  {y:69543,label:"apr 27"},
  {y:75549,label:"apr 28"},
  {y:79967,label:"apr 29"},
  {y:85995,label:"apr 30"},
  {y:95173,label:"may 01"},
  {y:82887,label:"may 02"},
  {y:82344,label:"may 03"},
  {y:79503,label:"may 04"},
  {y:81467,label:"may 05"},
  {y:95973,label:"may 06"},
  {y:96449,label:"may 07"},
  {y:96635,label:"may 08"},
  {y:89361,label:"may 09"},
  {y:80051,label:"may 10"},
  {y:74819,label:"may 11"},
  {y:85584,label:"may 12"},
  {y:89445,label:"may 13"},
  {y:96957,label:"may 14"},
  {y:100292,label:"may 15"},
  {y:96807,label:"may 16"},
  {y:82243,label:"may 17"},
  {y:90095,label:"may 18"},
  {y:95195,label:"may 19"},
  {y:102752,label:"may 20"},
  {y:107742,label:"may 21"},
  {y:108030,label:"may 22"},
  {y:99935,label:"may 23"},
  {y:96734,label:"may 24"},
  {y:90040,label:"may 25"},
  {y:92820,label:"may 26"},
  {y:106816,label:"may 27"},
  {y:116833,label:"may 28"},
  {y:126124,label:"may 29"},
  {y:124333,label:"may 30"},
  {y:108978,label:"may 31"},
  {y:104576,label:"jun 01"},
  {y:115705,label:"jun 02"},
  {y:120490,label:"jun 03"},
  {y:130504,label:"jun 04"},
  {y:130623,label:"jun 05"},
  {y:128737,label:"jun 06"},
  {y:113551,label:"jun 07"},
  {y:107712,label:"jun 08"},
  {y:121751,label:"jun 09"}

    ]
  }]
});
chart.render();

}
</script>
<!-- end graph-->

</head>
<body>
	<!--  menue -->
 		<div id="menu">
 			<hr id=" hr1">
 			<nav id="navigation">
 		<a href="HOME.php"><img id="logo" src="image\logo.png" width="150" height="150"></a>
 			<ul id="menuList">
 				<li><a href="HOME.php">Home</a> </li>
 				<li><a href="covid19.html">COVID19 </a></li>
 				<li><a href="https://www.worldometers.info/world-population/">World Population</a> </li>
 				<li><a href="#">About US </a></li>
        <li><a href="logIn.php">Data Entry </a></li>
        <hr id="hr2">
 			</ul>
 			
 		</nav>
 		</div>
    <!-- end menu-->
    <!--
 		<div id="slidebar">	
 		<img class="img" src="D:\project\image\img1.jfif">
 		<img class="img" src="D:\project\image\img2.jfif">
 		<img class="img" src="D:\project\image\img3.jfif">
 		<img class="img" src="D:\project\image\img4.jfif">
 		<img class="img" src="D:\project\image\img5.jfif">
 	</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("img");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
-->
<div id=" message_container">
  <h1 id="message1">  wellcome to the Update Point !! </h1>
  <h3 id="message2">chack daily update and stay safe. </h3>
  <img src="image\main_img.jpg" height="440px" width="100%">
  
</div>

<!-- world Case-->
<div id="container_world">

  <div id="world_heading"> 
     <h1> Across World's Case</h2>
  </div>
  
  <div id="container_case">
     <h1 id="world_wide"> <a href="#"> Total </a></h1>
     <h3 id="world_wide_data"> <i class="fa fa-arrow-up" style="font-size:30px;color:red"></i> <?php echo  $output ;?> </h3>
     <p class="graph_link"><a href="Database\result.php">Show Details</a></p>
  </div>

  <div id="container_case">
     <h1 id="world_wide"> Active  </h1>
     <h3 id="world_wide_data" style="color: green"> <i class="fa fa-arrow-up" style="font-size:30px;color:red"></i> <?php echo  $total ;?> </h3>
          <p class="graph_link"><a href="Database\result.php">Show Details</a></p>
     
  </div>

  <div id="container_case">
     <h1 id="world_wide"> Recover </h1>
     <h3 id="world_wide_data"><i class="fa fa-arrow-up" style="font-size:30px;color:green"></i> <?php echo $wrecover; ?></h3>
     <p class="graph_link"><a href="Database\result.php">Show Details</a></p>
  </div>

   <div id="container_case">
     <h1 id="world_wide"> Death </h1>
     <h3 id="world_wide_data" style="color: red"><i class="fa fa-arrow-up" style="font-size:30px;color:red"></i><?php echo $wdeath; ?></h3>
     <p class="graph_link"><a href="Database\result.php">Show Details</a></p>
  </div>
</div>
<!-- Across india case-->

<div id="container_world">
  <div id="world_heading"> 
     <h1> Across India Case</h2>
  </div>
  
  <div id="container_case">
     <h1 id="world_wide" ><a href="#"> Total </a> </h1>
     <h3 id="world_wide_data"> <i class="fa fa-arrow-up" style="font-size:30px;color:red"></i> <?php echo $positive; ?></h3>
    <p class="graph_link"><a href="Database\ind_result.php">Show Details</a></p>
  </div>
  <div id="container_case">
     <h1 id="world_wide"> Active  </h1>
     <h3 id="world_wide_data" style="color: green"> <i class="fa fa-arrow-up" style="font-size:30px;color:red"></i> <?php echo $active; ?> </h3>
     <p class="graph_link"><a href="Database\ind_result.php">Show Details</a></p>

  </div>
  <div id="container_case">
     <h1 id="world_wide"> Recover </h1>
     <h3 id="world_wide_data"><i class="fa fa-arrow-up" style="font-size:30px;color:green"></i> <?php echo $recover; ?></h3>
     <p class="graph_link"><a href="Database\ind_result.php">Show Details</a></p>

  </div>

   <div id="container_case">
     <h1 id="world_wide"> Death </h1>
     <h3 id="world_wide_data" style="color: red"><i class="fa fa-arrow-up" style="font-size:30px;color:red"></i> <?php echo $death; ?></h3>
     <p class="graph_link"><a href="Database\ind_result.php">Show Details</a></p>

  </div>

</div>
<!-- grapg containt-->
<div id="graph_container">
  <div id="chartContainer" style="height: 500px; width: 1200px;"> </div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
</div>
<!-- end graph-->
<!-- Start pfooter-->

<div>
  <footer>
    <div id="footer_containere">
      <div id="footer_containere1">
        <ul id="footer_list">
          <li id="footer_first">Indian Gov.</li>
          <li><a href="">ISIR guidline </a></li>
          <li><a href="covid19.html">COVID19 </a></li>
          <li><a href="safty.html"> Sefty Mesurment</a></li>
          <li><a href="#">All state Guidline </a></li>
          <li><a href="#">Institute</a></li>
          <li><a href="#">Other</a></li>
        </ul>
      </div>
        <div id="footer_containere1">
        <ul id="footer_list">
          <li id="footer_first">Opportunity</li>
          <li><a href="#"> how to make  mask</a></li>
          <li><a href="#">Aarogy Setu </a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Advertise</a></li>
          <li><a href="#">Trust</a></li>
          <li><a href="#">Other</a></li>
        </ul>
      </div>
      <div id="footer_containere1">
        <ul id="footer_list">
          <li id="footer_first">World's</li>
          <li><a href="covid19.html"> Iformation</a></li>
          <li><a href="#">Admin</a></li>
          <li><a href="#">Refrences</a></li>
          <li><a href="#">Source </a></li>
          <li><a href="whoguidline.html">W H O </a></li>
          <li><a href="symptoms.html">symptoms</a></li>
        </ul>
      </div>
      
  </div>
    <div id="footer_containere1_icon">
      <a href="#"><i id="icon" class="fa fa-facebook " style="font-size: 40px;"></i></a>
      <a href="#"><i id="icon" class="fa fa-instagram"style="font-size: 40px;"></i></a>
      <a href="#"><i id="icon" class="fa fa-google"style="font-size: 40px;"></i></a>
      <a href="#"><i id="icon" class="fa fa-snapchat"style="font-size: 40px;"></i></a>
      <a href="#"><i id="icon" class="fa fa-whatsapp"style="font-size: 40px;"></i></a>

    </div>
  </footer>
  
</div>
<!-- end footer -->


</body>
</html>

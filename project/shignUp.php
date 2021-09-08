<!DOCTYPE html>
<html>
<head>
	<title>  Design Form</title>
	<link rel="stylesheet" type="text/css" href="shignUp.css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<!-- MENU -->
 		<div id="menu">
 			<hr id=" hr1">
 			<nav id="navigation">
 		<a href="HOME.php"><img id="logo" src="image\logo.png" width="150" height="150"></a>
 			<ul id="menuList">
 				<li><a href="HOME.php">Home</a> </li>
 				<li><a href="#">COVID19 </a></li>
 				<li><a href="https://www.worldometers.info/world-population/">World Population</a> </li>
 				<li><a href="#">About US </a></li>
        <hr id="hr2">
 			</ul>
 			
 		</nav>
 		</div>
 		<!-- End MENU-->
	<div id="form_main_div">
		<div id="container1">
		<form id="form_container" method="post" action="Database\shignUp_user.php">
			<div id="container2">
				<h1> Covid19 Update</h1>
			</div>
			<div id="form_main_input">
				<div id="user_name">
					<input type="text" required="" name="username" placeholder="username">
				</div >
				<div id="password1">
					<input type="password" required="" name="password1" placeholder="Password">
				</div >
				<div id="password2">
					<input type="password" required="" name="password2" placeholder="Comfirm-Password">
				</div>
			</div>
			<div id="check">
              <input type="checkbox" name="" required="checked"><span id="SS"> I am Agree</span>
              
            </div>
				<div id="save">
					<button type="submit" name="save">ShinUp
					</button>
				</div>	
				<div id="mes">
					<p>if you already exist <a href="logIn.php"> click here</a> </p>
				</div>
		</form>
	</div>
	</div> 
</body>
</html>
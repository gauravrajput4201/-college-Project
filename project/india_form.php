<!DOCTYPE html>
<html>
<head>
	<title>  Design Form</title>
	<link rel="stylesheet" type="text/css" href="update_form.css">
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
 				<li><a href="logIn.php">Log In </a></li>
        <hr id="hr2">
 			</ul>
 			
 		</nav>
 		</div>
 		<!-- End MENU-->
	<div id="form_main_div">
		<div id="container1">
		<form id="form_container" method="post" action="Database\ind_input_operation.php">
			<div id="container2">
				<h1> Covid19 Update</h1>
			</div>
			<div id="form_main_input">
				<div id="input_country">
					 <input list="state" required="" name="state" id="country_name" placeholder="Enter State Name">
  					<datalist id="state">
    					<option value="Bihar">
  						  <option value="Arunachal Pradesh">
  						  <option value="Assam">
   						  <option value="Goa">
    					  <option value="Gujarat">
    					  <option value="Haryana">
    					  <option value="Jharkhand">
    					  <option value="Karnataka">
    					  <option value="Kerala">
    					  <option value="Madhya Pradesh">
    					  <option value="Maharashtra">
    					  <option value="Odisha">
    					  <option value="Rajasthan">
    					  <option value="Telangana">
    					  <option value="Uttar Pradesh">
    					  <option value="Uttarakhand">
  					</datalist>
				</div>

				<div id="Positive1">
					<input type="number" required="" name="positive" placeholder="Positive Case">
				</div >
				<div id="Active">
					<input type="number" required="" name="active" placeholder="Active Case">
				</div >
				<div id="Recover">
					<input type="number" required="" name="recover" placeholder=" Recover Case">
				</div>
				<div id="death">
					<input type="number" name="death" required="" placeholder="Death Case">
				</div>
			</div>
			<div id="check">
              <input type="checkbox" name="" required="checked"><span id="SS"> I am Agree</span>
              
            </div>
				<div id="save">
					<button type="submit" name="save">Submit
					</button>
				</div>	
		</form>
	</div>
	</div> 
</body>
</html>
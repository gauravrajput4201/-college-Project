<!DOCTYPE html>
<html>
<head>
	<title>  Design Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
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
		<form id="form_container" method="POST" onsubmit = "return validation()" action="Database\authentication.php">
			<div id="container2">
				<h1> LogIn</h1>
			</div>
			<div id="form_main_input">
				<div id="user_name">
					<input type="text" required="" name="user" placeholder="username">
				</div >
				<div id="password1">
					<input type="password" required="" name="pass" placeholder="password">
				</div >
			</div>
			<div id="check">
              <input type="checkbox" name="" required="checked"><span id="SS"> I am Agree</span>
              
            </div>
				<div id="save">
					<button type="submit" name="save">ShinUp
					</button>
				</div>	
				<div id="mes">
					<p>Don't have an account?<a href="shignUp.php"> sign up</a> </p>
				</div>
		</form>
	</div>
	</div> 
	  <!-- validation for empty field-->   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>
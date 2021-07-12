<!doctype html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<title>Reznet: Place an Order</title>
		<link href = "css/nav.css" rel="stylesheet" type = "text/css" />
		<link href = "css/Order.css" rel="stylesheet" type = "text/css" />
	</head>
	<body>
		<div id = "banner">
			<nav>
				<h1><a href = "index.html"><img src = "images/ReznetLogo.png" class = "logo"></img></a>Freelance Programming</h1>
				<ul>
					<img src = "images/slash.png" id = "slash"> </img>
					<li><a href = "https://docs.google.com/document/d/1lelmwzc_r5R5fTcQo_bjOv5skc6zkkPT5hnRPHMIRho/edit?usp=sharing">Resumé</a></li>
					<img src = "images/slash.png" id = "slash"> </img>
					<li><a href = "order.php">Order</a></li>
					<img src = "images/slash.png" id = "slash"></img>
					<li><a href = "services.html">Services</a></li>
					<img src = "images/slash.png" id = "slash"> </img>
					<li><a href = "index.html">Home</a></li>
					<img src = "images/slash.png" id = "slash"> </img>
				<ul>
			</nav>
		</div>
		<?php
			$value = 0;
			function hasRequiredOutput($str){
				if (isset($_GET["submit"])){
					if ($_GET[$str] != ""){
						return false;
					}
					return true;
				}
				return false;
			}
			function updateMySQL(){
				$conn = mysqli_connect("127.0.0.1", "root", "");
				
			}
		?>
		
		<form name = "orderForm" method="GET" action="order.php">
			
			<h1>Place an Order (</h1><h1 style = "color:red">* - REQUIRED</h1><h1>)</h1><br><br>
			<p>(<p style = "color:red">*</p>)What kind of service would you like done? </p>
			<select name="Servicestype"> 
				<option value="NULL">None</option>
			  <option value="W">Website</option>
			  <option value="GA">General Application</option>
			</select>
			<?php
				if (isset($_GET["submit"])){
					if ($_GET["Servicestype"] == "NULL"){
						echo "<p style = "."color:red"."> The service type is required.</p>";
					}
					else{
					$value += 1;
					}
				}
			?>
			<br><br>
			<p>(<p style = "color:red">*</p>)Name(First - Last): <input type="text" name="name"></p>
			<?php
				if (hasRequiredOutput("name")){
					echo "<p style = "."color:red"."> Your name is required.</p>";
				}
				else{
					$value += 1;
				}
			?>
			<br><br>
			<p>(<p style = "color:red">*</p>)Email: <input type="text" name="email"></p>
			<?php
				if (hasRequiredOutput("email")){
					echo "<p style = "."color:red"."> Email is required.</p>";
				}
				else{
					$value += 1;
				}
			?>
			<br><br>
			Skype: <input type="text" name="skype">
			<br><br>
			Discord: <input type="text" name="discord">
			<br><br>
			<p>(<p style = "color:red">*</p>)Describe Task:
			<?php
				if (hasRequiredOutput("taskDesc")){
					echo "<p style = "."color:red"."> The task description is required.</p>";
				}
				else{
					$value += 1;
				}
			?><br>
			<textarea class = "longinput" type="text" name="taskDesc"></textarea></p>
			<br><br>
			How did you learn about my services: <input type="text" name="learnServ"><br><br>
			<br><br>
			<input type="submit" value="Submit" id = "submit" class = "submit" name = "submit">
			<p id = "message">
			<?php
				if (isset($_GET["submit"])){
					if ($value == 4){
						echo "<p style = "."color:green"."> Form was submitted</p>";
						//submit form
						updateMySQL();
					}
					else{
						echo "<p style = "."color:red"."> Form was not submitted. Some required elements in the form are missing.</p>";
					}
				}
			?>
			</p>
		</form>
		
		<footer>
				<ul>
					<h1>Follow us on social media</h1>
					<li><a href = "https://github.com/bozingle"><img src = "images/Git.png" id = "Git"></img></a></li>
					<li><a href = "https://www.facebook.com/Reznet-249216932442505/?modal=admin_todo_tour"><img src = "https://ubisafe.org/images/facebook-vector-round-5.png" id = "FB"></img></li>
				</ul>
		</footer>
	</body>
</html>

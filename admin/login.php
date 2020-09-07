<?php
require_once('../language.php');	
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="">
<div class="container h-100">
<nav class="navbar-fixed-top">
            <ul id="#nav" style="list-style:none; text-align:center">
                <li style="display:inline-block;padding:10px 10px"><a style="color :#000;" href="../#home"><?= $lang[$_SESSION['language']]['nav1'] ?></a></li>
                <li style="display:inline-block;padding:10px 10px"><a style="color :#000;"  href="../#about"><?= $lang[$_SESSION['language']]['nav2'] ?></a></li>
                <li style="display:inline-block;padding:10px 10px"><a style="color :#000;" href="../#experience"><?= $lang[$_SESSION['language']]['nav3'] ?></a></li>
                <li style="display:inline-block;padding:10px 10px"><a style="color :#000;" href="../#projects"><?= $lang[$_SESSION['language']]['nav4'] ?></a></li>
                <li style="display:inline-block;padding:10px 10px"><a style="color :#000;" href="../#contact"><?= $lang[$_SESSION['language']]['nav5'] ?></a></li>
                <li style="display:inline-block; padding:10px 10px"><a style="color :#000;" href="#"><?= $lang[$_SESSION['language']]['nav12'] ?></a></li>





 


            </ul>
        </nav>
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<h2>Admin Login</h2>
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">Login</button> 
			</div>
			</form>
			
		</div>
	</div>
</div>
<div class="footer">
<p class="text">
<marquee direction = "left">
 <span>•Copyright © 2020 By Boumarte Oumaima</span>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>
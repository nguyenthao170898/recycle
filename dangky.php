<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng Ký</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- DataTable CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.0/datatables.min.css"/>
		
			<style type="text/css">
				body{
  margin: 0;
  padding: 0;
/*  background: url(img/background.jpg);*/
  color: #fff;
  font-family: Arial;
  font-size: 12px;
}

.body{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background-image: url(img/sign.jpg);
  background-size: cover;
  -webkit-filter: blur(5px);
  z-index: 0;
}

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
  z-index: 1;
  opacity: 0.7;
}

.header{
  position: absolute;
  top: calc(50% - 35px);
  left: calc(50% - 255px);
  z-index: 2;
}
.header div{
  float: right;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 40px;
  font-weight: 200;
  padding-right: 50%;
}

.header div span{
  color: #DD0000 !important;
  
}
.register{
  position: absolute;
  top: calc(50% - 75px);
  left: calc(50% - 50px);
  height: 150px;
  width: 350px;
  padding: 10px;
  z-index: 2;
}

.register input[type=text]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
}

.register input[type=password]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
}

.register input[type=button]{
  width: 250px;
  height: 30px;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

.register input[type=button]:hover{
  opacity: 0.8;
}

.register input[type=button]:active{
  opacity: 0.6;
}



.register input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.register input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.register button{
  width: 250px;
  height: 30px;
  opacity: 0.4;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
	}
</style>
			<div class="body"></div>
    		<div class="grad"></div>
    		<div class="header">
    			<div><span><b><img src="" alt="">MEMBER</b></span>|Sign</div>
    			</div>
    			<br>
				<div class="register">
					<form class="form" id="signup" data-toggle="validator" action="dangky.php" method="post">
					<div class="form-group">
							<p><input type="text" placeholder="First name" name="fname" required></p>
							<p><input type="text" placeholder="Last name" name="lname" required></p>
							<p><input type="text" placeholder="Username" name="username" required ></p> 
							<p><input type="password" placeholder="Password" name="pass" required ></p>
							<!-- <p><input type="text" placeholder="numberphone" name="phone" required ></p> -->
              <p class="message">Quên Mật Khẩu? <a href="login_form.php">Đăng Nhập</a></p>
              <p><button type="submit" value="Đăng Ký" name="register" ><b>Sign</b></button></p>
					</div>
					</form>
				</div>
			</div>
		</head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- DataTable -->
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.0/datatables.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		<!-- Mine JS -->

		<!-- xử lý đăng ký -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if( isset( $_POST["register"]) ) {
    $_username = $_POST['username'];
    $_password = $_POST['pass'];
    $_fname = $_POST['fname'];
    $_lname = $_POST['lname'];
    // $_phone = $_POST['phone'];
	echo '<script language="javascript">';
      // echo 'alert("Sign Up Success")';
      echo '</script>';
    }
}
?>

<?php

require 'database.php';
if (isset($_POST["username"]) && isset($_POST["pass"])) {
	$name = $_username;
	$pass = $_password;
	$fname = $_fname;
	$lname = $_lname;
  // $phone =$_phone;
	$sql = "INSERT INTO user(username, pass,fname,lname) VALUES('".$name."','".$pass."','".$fname."','".$lname."')";
	$result = mysqli_query($conn,$sql);
	}
?>
	</body>
</html>
		

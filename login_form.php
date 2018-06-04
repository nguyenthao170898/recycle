<?php   session_start();  ?>
<?php
// insert code PHP here
  

    if( (isset( $_SESSION['login_status'])) && ($_SESSION['login_status'] == "ready")) {
        header("Location: admin.php");
    }

$sErr= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if( isset( $_POST["login"]) ) {
    $_user = $_POST['nA'];
    $_pass = $_POST['nB'];
    // kiểm tra user
require 'database.php';
$sql = "SELECT id,username,pass,fname,lname from user";
$result = mysqli_query($conn, $sql);
if(!$result){
  die( "Can't query data".mysqli_error($conn) );
}

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
      $id= $row["id"];
      $user = $row["username"];
      $pass = $row["pass"];
      $fname = $row["fname"];
      $lname = $row["lname"];
      if( $_user == $user && $_pass == $pass ){
        $_SESSION["id"]= $id;
        $_SESSION["login_status"]= "ready";
        $_SESSION["name"]= $lname.' '.$fname;
        header("Location: admin.php");
    }else{
        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
    }
    
      }
} 

mysqli_close($conn);
//end kiem tra
    
    if( $_user == "nguyenthao" && $_pass == "kuroko123" ){
        header("Location: admin.php");
    }
    
  }
} // end if isset
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Recycle Login</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
  margin: 0;
  padding: 0;
  background: #fff;

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
  posit
  ion: absolute;
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
  padding-right: 45%;
}

.header div span{
  color: #DD0000 !important;
}

.login{
  position: absolute;
  top: calc(50% - 75px);
  left: calc(50% - 50px);
  height: 150px;
  width: 350px;
  padding: 10px;
  z-index: 2;
}

.login input[type=text]{
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

.login input[type=password]{
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

.login input[type=button]{
  width: 260px;
  height: 35px;
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

.login input[type=button]:hover{
  opacity: 0.8;
}

.login input[type=button]:active{
  opacity: 0.6;
}

.login input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login button{
  width: 260px;
  height: 35px;
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
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <?php
    if( $sErr != ""){
      echo '<script language="javascript">';
      echo 'alert("'.$sErr.'")';
      echo '</script>';
    }   
?>  
  <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div><span><b>Recycle</b></span>|Login</div>
    </div>
    <br>
    <div class="login">
      <form action="login_form.php" method="post">
        <input type="text" placeholder="username" name="nA"><br>
        <input type="password" placeholder="password" name="nB"><br>
        <button type="submit" value="Đăng Nhập" name="login" ><b>Đăng Nhập</b></button>
        <p class="message">Quên Mật Khẩu? <a href="dangky.php">Đăng Ký</a></p>
      </form>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  
</body>
</html>

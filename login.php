<?php
  if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass  = $_COOKIE['pass'];
    echo "<script>
      document.getElementById('email').value = '$email';
      document.getElementById('pass').value = '$pass';
      </script>";
 }
?>
<style type="text/css">
	body {
   margin: 0;
   padding: 0;
   background-image: url(120251.gif);
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   background-attachment: fixed;
   font-family: sans-serif;
 }
 .login {
   position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-30%, -50%);
   background: rgba(4, 29, 23, 0.5);
   padding: 50px;
   width: 270px;
   box-shadow: 0px 0px 25px 10px black;
   border-radius: 15px;
   background-image: url(120251.gif);
 }
 .avatar {
   font-size: 30px ;
   background: #E59866;
   width: 50px;
   height: 50px;
   line-height: 50px;
   position: fixed;
   left: 50%;
   top: 0;
   transform: translate(-50%, -50%);
   text-align: center;
   border-radius: 50%;
 }
 .login h2 {
   text-align: center;
   color: white;
   font-size: 30px;
   font-family: sans-serif;
   letter-spacing: 3px;
   padding-top: 0;
   margin-top: -20px;
 }
 .box-login {
   display: flex;
   justify-content:space-between;
   margin: 10px;
   border-bottom: 2px solid white;
   padding: 8px 0;
 }
 .box-login i {
   font-size: 23px;
   color: white;
   padding: 5px 0;
 }
 .box-login input {
   width: 85%;
   padding: 5px 0;
   background: none;
   border: none;
   outline: none;
   color: white;
   font-size: 18px;

 }
 .box-login input::placeholder {
   color: white;
 }
 .btn-login
 .box-login input:hover{
   background-image: url(120251.gif);

 }
 .btn-login {
   margin-left: 10px;
   margin-bottom: 20px;
   background: none;
   border: 1px solid white;
   width: 92.5%;
   padding: 10px;
   color: white;
   font-size: 18px;
   letter-spacing: 3px;
   cursor: pointer;
   }
 .btn-login:hover{
   background: rgba(12, 30, 15, 0.5);
 }
 .bottom {
   margin-left: 10px;
   margin-right: 10px;
   display: flex;
   justify-content: space-between;
 }
 .bottom a {
   color: white;
   font-size: 15px;
   text-decoration: none;
 }
 .bottom a:hover {
 text-decoration: underline;
 }
	th{
		text-align: right;
	}
	h3{

		text-align: center;
	}
</style>
 <div class="login">
<h3>Login Form using session and cookies with Remember Me</h3>
	<form method="post" action="validate.php">
          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Login Form</h2>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" placeholder="Email" name="email" id="email">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input placeholder="Password" type="password" name="password" id="password">
          </div>

          <button type="submit" name="login" class="btn-login" value="Login" >Login</button>
          <div class="bottom">
            <a href=""><input type="checkbox" name="remember" value="1">Remember</a>
            <a href="#">Forgot Password</a>
          </div>
	</form>
	
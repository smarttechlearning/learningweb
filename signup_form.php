<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style type="text/css">
	

	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
body{
	background-color:#b3d9ff ;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form button input {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #004080;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #004080;
}
 
</style>
</head>
<body>
	 
	 
	<div class="login-page">
  <div class="form">


<form method="post" action="connect.php">
  <h2>Register Here</h2>
Username : <input type="text" name="username"  placeholder="user name"><br><br>
Password : <input type="password" name="password"  placeholder="password"><br><br>
<button><input type="submit" value="Register"></button><br>
<p class="link">Already you have account?<a href="login_form.php">Click to Login</a></p>
</form>

 <br><br>


</div>

</div>
</body>
</html>
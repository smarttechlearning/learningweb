<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("image//bg.jpg");
}

.navbar {
  overflow: hidden;
   background-color:#0005;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color:#80bfff;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.register{
    
   text-decoration: none;
  display: block;
  float: center;
  
  list-style-type: none;
  margin: 0;
  padding: 0;
    
  height: 100%;
  overflow: auto;
}
.logo{
  text-align: right;
  text-decoration: none;
  float: center;
  color: white;
  list-style: none;
  margin-top: 0;
  width: 1500px;
  display: block;
  font-family: Eras Bold ITC;
  font-size: 30px;
  margin-top:0px;

}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-instagram {
  background:#cc0066;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
h1{
  font-size: 50px;
  color: white;
}
h2{
  color: white;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="about.php">About Us</a>
  <a href="comment.php">Comment</a>

  <div class="dropdown">
    <button class="dropbtn">Courses 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="html_course.html">HTML</a>
      <a href="css_course.html">CSS</a>
      <a href="py_course.html">Python</a>
    </div>

  </div>
  <div class="register">
  <li><a href="signup_form.php">Sign Up</a></li>

  <li><a href="login_form.php">Login</a></li>
</div>
<li class="logo">Smart<strong>Tech</strong></li>

</div>

<center>
<br><br><br><br>
<h1>LEARNING WITH</h1>
<h2>SMARTTECH</h2>
<br><br><br><br><br>


<a href="https://studio.youtube.com/channel/UCzctoNqKhrR4P5jxWO9JZQw/playlists" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/smart__tech_/" class="fa fa-instagram"></a>
<a href="https://www.linkedin.com/in/mansi-soni-6b1902203/" class="fa fa-linkedin"></a></center>



  

 

</body>
</html>

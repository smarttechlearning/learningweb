<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = " INSERT INTO register (username, password)
values ('$username','$password') ";
if ($conn->query($sql)){
echo '<script> alert("Register Sucessfully");</script>';
      
     	header('location:login_form.php');
    

}

else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo '<script> alert("password should be required");</script>';

die();
}
}
else{
 echo '<script>alert("Username should be required");</script>';

die();
}
?>
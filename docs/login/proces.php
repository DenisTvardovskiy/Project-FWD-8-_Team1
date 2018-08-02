<?php
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname = "login";

$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
$selected = mysqli_select_db($conn, "login");

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$result = mysqli_query($conn, "select * from users where username = '$username' and password = '$password'")
        or die("Failed to query database".mysqli_error($conn));
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
  header("Location:../adminPage/admin.php");
}
 else {
   header("Location:../errorPage/error.html");
    
}
?>
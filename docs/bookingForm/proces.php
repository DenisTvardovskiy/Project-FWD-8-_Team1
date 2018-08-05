<?php


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "boking";
$dbtablename = "personalinfo";



$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$amount_persons = $_POST['amount_persons'];
$room_type = $_POST['room_type'];
$amount_children = $_POST['amount_children'];

$uname = test_input($_POST["uname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
  $unameErr = "Only letters and white space allowed"; 
}
$lname = test_input($_POST["lname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  $lnameErr = "Invalid lname format"; 
}

$phone = test_input($_POST["number"]);
if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
    $phineErr = "Invalid phine format"; 
}


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

If ($conn->connect_error) {
    die("connection failed :" . $conn->connetc_error);
}



$sql = "INSERT INTO $dbtablename(name, surname, phone, checkin,
 checkput,  amount_persons, amount_children, room_type)
    VALUES ('$uname', '$lname', '$phone', '$check_in', 
    '$check_out', '$amount_persons', '$amount_children',
     '$room_type')";

   




    

    if ($conn->query($sql) === TRUE) {
       header('Location:../index.html');
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

   
    function test_input($data)
    {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }









?>
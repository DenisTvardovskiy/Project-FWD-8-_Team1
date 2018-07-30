<?php 

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];   
    $message = $_POST['message'];
    $mailTo = "denis200358@gmail.com";
    $headers = "From: Vilson Client ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt ,$headers);
    header("Location: index.php?sended");
}



$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "forms";
$dbtablename = "coustommessage";

$name1 = $_POST['name'];
$mail1 = $_POST['mail'];
$subject1 = $_POST['subject'];
$message1 = $_POST['message'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

If ($conn->connect_error) {
    die("connection failed :" . $conn->connetc_error);
}

if (empty($name1)) {
    echo "Fill ur name ";
    die();
}

if (empty($mail1)) {
    echo "Fill ur mail ";
    die();
}
if (empty($subject1)) {
    echo "Fill subject ";
    die();
}
if (empty($message1)) {
    echo "write message for us ";
    die();
}

$sql = "INSERT INTO $dbtablename(name, email, subject, message)
    VALUES ('$name1', '$mail1', '$subject1', '$message1')";

    if ($conn->query($sql) === TRUE) {
        echo "U in";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>


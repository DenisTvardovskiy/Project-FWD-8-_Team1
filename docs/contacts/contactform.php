<?php 

if (isset($_POST['mail'])){
   $mail_to = "denis200358@gmail.com";
   $mail_subject = "Vilson coments";

   function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
   }
    if(!isset($_POST['name']) AND 
        !isset($_POST['mail']) AND
        !isset($_POST['subject']) AND 
       !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
       $name = $_POST['name']; // required
    $mail_form= $_POST['mail']; // required
    $subject= $_POST['subject']; // required
    $message= $_POST['message']; // required

    $error_message = "";
    $mail_exp = '/^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    if(!preg_match($mail_exp,$mail_form)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
      }
     
        $string_exp = "/^[A-Za-z .'-]{3,55}+$/";
     
      if(!preg_match($string_exp,$name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
      }
     
     
      if(strlen($message) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
      }
     
      if(strlen($error_message) > 0) {
        died($error_message);
      }
     
        $mail_message = "Form details below.\n\n";
     
         
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }
      
         
    }
        $mail_message .= "First Name: ".clean_string($name)."\n";
        $mail_message .= "Email: ".clean_string($mail_form)."\n";
        $mail_message .= "Subject: ".clean_string($subject)."\n";
        $mail_message .= "Message: ".clean_string($message)."\n";
     
    // create email headers
    $headers = 'From: '.$mail_form."\r\n".
    'Reply-To: '.$mail_form."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($mail_to, $mail_subject, $mail_message, $headers); 


    $servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "forms";
$dbtablename = "coustommessage";

$name1 = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
  $nameErr = "Only letters and white space allowed"; 
}
$mail1 = test_input($_POST["mail"]);
if (!filter_var($mail1, FILTER_VALIDATE_EMAIL)) {
  $mailErr = "Invalid email format"; 
}
$subject1 = $_POST['subject'];
$message1 = $_POST['message'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

If ($conn->connect_error) {
    die("connection failed :" . $conn->connetc_error);
}



$sql = "INSERT INTO $dbtablename(name, email, subject, message)
    VALUES ('$name1', '$mail1', '$subject1', '$message1')";

    if ($conn->query($sql) === TRUE) {
        echo "U in";
    } else {
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

    header("Location: index.php?sended");

 
?>
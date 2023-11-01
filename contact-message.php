<?php 

$email_error = null;
$message_error = null;
$success = null;
$email = null;
$message = null;


$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "messages";
$dbtable ="messages"

$connection = new mysqli($servername,$username, $password, $dbname);


if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $message = $_POST["message"];


    if (empty(trim($email))){
        $email_error = "Invalid email";
    } else {
        if(strlen(trim($message)) < 10){
            $message_error = "Invalid message (must be at least 10 characters)";
        } else {
            $success = "Your message was sent to the database";
        }
    }
}
?>
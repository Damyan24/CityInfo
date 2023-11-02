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
$dbtable ="messages";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $message = $_POST["message"];


    if (empty(trim($email))){
        $email_error = "Invalid email";
    } else {
        if(strlen(trim($message)) < 10){
            $message_error = "Invalid message (must be at least 10 characters)";
        } else {
            $success = "Your message was sent to the database";

            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            $sql = "INSERT INTO messages VALUES('$email' , '$message')";
            
            mysqli_query($conn , $sql);
            mysqli_close($conn);
           
            
        }
    }
}
?>
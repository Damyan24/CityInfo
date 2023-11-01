<?php include "contact-message.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   

    


   
    

    <style>
        .header{
            text-align:center;
            margin-top: 30px;
        }
       

        .container{
            margin-top:35px;
            margin-left:15%;
            margin-right:15%;
            height: 600px;
            width:70%;
            display:flex;
            flex-direction:center;
            background-color:rgba(128, 128, 128, 0.05) ;
            justify-content:center;
            border-style:dotted;
            border-radius:25px;
            border-width:medium;
            border-color:rgb(0, 153, 255);
        }

        label{
            margin-top:20px;
            font-size:30px;
            font-weight:bold;
            display:flex;
        }

        input{
            width: 300px;
            border-radius:20px;
            text-align:top;
            padding-left:10px;
            border-width: medium;
            border-color:rgb(0, 153, 255);
            border-style:solid;
            font-size:15px;
            font-weight:bold;
        }

        form{
            display:flex;
            flex-direction:column;
            align-items:left;
        }

        

        .email{
            height:55px;
        }

        .userInput{
            height:200px;
            width: 300px;
            border-radius:20px;
            border-style:solid;
            border-width: medium;
            border-color:rgb(0, 153, 255);
            padding:10px;
            font-size:15px;
            font-weight:bold;
            margin-bottom:50px;
        }

        .letters{
            padding-left:5px;
            font-size:15px;
            padding-top:16px;
            color:gray;
        }

        .submit{
        height:55px;
        background-color:white;
        font-weight:bold;
        text-color:black;
        font-size:22px;
        align-items:center;
        }

        .submit:hover{
            background-color:rgb(0, 153, 255);
            border-color:black;
            font-size:30px;
            transition:0.3s;
            color:white;
        }


        .info{
            text-align:center;
        }

        .email_error{
            color:red;
            font-weight:bold;
            display:hidden;
        }

        .message_error{
            color:red;
            font-weight:bold;
            display:hidden;
        }
        
        .success{
            color:green;
            font-weight:bold;
        }

       
        </style>

<title>Displaying errors with PHP</title>


</head>
<body>
<?php
include "header.php";
?>
    <h1 class = header>Contact Us</h1>
    <div class=container>
        <form class = form action="contact.php" method="post">
        <label  for="email">Email:</label><br>
        <input class = email type="text" id="email" name = "email" placeholder="example@gmail.com" value ="<?php echo $email;?>"><br>
        <label for="message">Message<div class = letters>(500 letters)</div>:</label><br>
        <textarea class = userInput placeholder="Describe your problem here..." id="message" name = "message" value = "<?php echo $message;?>"></textarea>
        <input class = submit name = "submit" type="submit" value="Sumbit">
    
    
       <div class = info>
        <p class="email_error">
            <?php
            echo $email_error
            ?>

<p class="message_error">
            <?php
            echo $message_error
            ?>


<p class="success">
            <?php
            echo $success
            ?>
            </div>
    </form>
    </div>



    <?php
    include "footer.php";
    ?>
</body>
</html>





<?php include "index-logic.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <title>Document</title>

 <style>
.header{
  text-align:center;
  margin:60px;
}

body{
  text-align:center;
}

label{
  font-size:30px;
  font-weight:bold;
  font-style:italic;
  margin-bottom:30px;
} 

input{
  margin-top:30px;
  width:300px;
  height:50px;
  padding:10px;
  font-size:20px;
  border-radius:20px;
  border-style:solid;
  border-color:rgb(0, 153, 255);
  font-weight:bold;
}


.info{
  margin-top:110px;
  width:100%;
  display:flex;
  justify-content:space-around;
  margin-bottom:130px;
}

.info i {
  color:rgb(0, 153, 255);
  font-size:50px;
}

.info h3 {
  margin-top:20px;
  font-size:25px;
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

        .error {
      
            color:red;
            font-weight:bold;
        
        }

  </style>
  <?php
  if (isset($_POST["submit"])) {
    $city = $_POST["name"];



    $url = "https://countriesnow.space/api/v0.1/countries/population/cities/q?city=" . urlencode($city);





    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);


    $decoded_response = json_decode($response, true);
    if($decoded_response['error'] === false){
                $country = $decoded_response['data']['country'];
                $populationData = $decoded_response['data']['populationCounts'][0];
                $population = $populationData['value'];
    }else{
      $error_message = "Invalid city";
    };

               
    curl_close($curl);
}
?>
</head>
<body>
<?php
include 'header.php';
?>


<h1 class = header>Type the name of the city you want and receive information about it!!!</h1>

<form method="post">
<label for="name">Name of the city</label><br>
<input class = name type="text" id="name" name = "name" placeholder="city name" ><br>
<p class = error><?php echo $error_message ?></p>
<input class = submit name = "submit" type="submit" value="SUBMIT">
</form>

<div class = info >
  <div class="population">
  <i class="fa-solid fa-person"></i>
  <h3><?php echo $population ?></h3>
  </div>

  <div class="country">
  <i class="fa-solid fa-flag"></i>
  <h3><?php echo $country ?></h3>
  </div>

</div>

  <?php
include 'footer.php';
?>

</body>
</html>



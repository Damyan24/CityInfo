<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/67939a765b.js"
      crossorigin="anonymous"
    ></script>
    <style>

nav {
  height: 70px;
  width: 100%;
  background-color: rgb(0, 153, 255);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-right: 200px;
  padding-left:40px;
}

        .navbar a {
  text-decoration: none;
  color: white;
  padding: 5px;
  font-weight: bold;
  cursor: pointer;
}

.navbar a:hover {
  border-bottom: #ffffff 2px solid;
  color: black;
}

header{
    display:flex;
    align-items:center;
    text-align: center;
}
    </style>
</head>
<body>
<nav class = "navbar">
  <a href="index.php" class = "links">
  <header>
  <i class="fa-solid fa-city"></i>
  <h1>CityInfo</h1>
  </header>
</a>

<a href="contact.php">
  <header>
  <h1>Contact Us</h1>
  </header>
</a>
</nav>
</body>
</html>
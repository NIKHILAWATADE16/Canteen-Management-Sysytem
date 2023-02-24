<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
    session_start();
    include("conn_db.php");
    include('head.php');
    // $no_order = false;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <title>About Us </title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header.php')?>
    <div class="container p-5" id="recommended-shop">
</div>

<div class="about-section">
  <h1>Canteen Management System PICT</h1>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/nikhil.jpg" alt="Nikhil" style="width:100%">
      <div class="container">
        <h2>Nikhil Awatade</h2>
        <p class="title">Developer</p>
        <p>nikhilawatade13@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img/abhi.jpg" alt="abhi" style="width:100%">
      <div class="container">
        <h2>Abhishek Soundalgekar</h2>
        <p class="title">Developer</p>
        <p>abhisound.@gamil.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

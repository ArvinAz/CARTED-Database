<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login/Registration Selection</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Registration/Login Selection</h1>
    </div>
    <br><h2>Welcome to CARTED</h2>
    <img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <form action="RegiLog.php">
    <button class = "button" value="Submit">Login</button>
</form>
<form action="Registration.php">
    <button class = "button" value="Submit">Register</button>
</form>
</body>
</html>
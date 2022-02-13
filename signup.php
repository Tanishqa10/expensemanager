<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="w3-container">
        <div class="w3-card-4" style="max-width: 30rem; margin: auto; padding: 2rem; margin-top:20vh; border-radius:2rem;background-color:#F7D7EE;">
            <form action="#" method="post">
                <b>
                <h1 style="font-family:cursive;margin-left:6rem;"><u>SIGN UP</u></h1>
                <label for='username'><span class="material-icons">person</span> Username</label>
                <input name="username" type="text" placeholder="Username" class="w3-input">
                <label for='passwd'><span class="material-icons">keyboard</span> Password</label>
                <input name="passwd" type="password" placeholder="Password" class="w3-input">
                <label for='conpass'><span class="material-icons">done</span> Confirm password</label>
                <input name="conpass" type="password" placeholder="Confirm Password" class='w3-input'>
                <input type="submit" name="submit" value="Done!" class="w3-button w3-card-4 w3-green w3-hover-black" style="margin-top:1rem;border-radius:3px;padding:16px;font-size:20px;">
                </b>
            </form>
        </div>
    </div>
</body>
</html>
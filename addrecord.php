<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Add Record</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div style="max-width: 70rem; margin: auto; padding: 2rem;">
        <h1 style="font-size: 4rem;">Add new record</h1>
        <form action="addrecordback.php" method="post">
            <label for="item" style="font-size: 1.5rem;">Item name</label>
            <input type="text" name="item" class="w3-input w3-margin-bottom" placeholder="Item name">
            <label for="price" style="font-size: 1.5rem;">Price</label>
            <input type="text" name="price" class="w3-input w3-margin-bottom" placeholder="Price">
            <input type="submit" name="submit" value="Login!" class="w3-button w3-card-4 w3-black w3-hover-white" style="margin-top:1rem;border-radius:3px;padding:16px;font-size:20px;">
        </form>
    </div>
</body>
</html>
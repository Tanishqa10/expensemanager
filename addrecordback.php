<?php

session_start();

$conn = new mysqli('localhost', 'Tanishqa', '#tani10032005', 'expensemanager');

$item = $_POST['item'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id'];

$sql = 'INSERT INTO records(item, price, user_id) VALUES (?, ?, ?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $item, $price, $user_id);
$stmt->execute();

$stmt->close();
$conn->close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Record Added</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div style="padding: 2rem;">
        <h1>Thanks for Signing Up!</h1>
        <p><a href="index.php" class="w3-text-indigo w3-hover-text-deep-purple">Click here</a> to go back to home page.<br>
        or<br>
        <a href="addrecord.php" class="w3-text-indigo w3-hover-text-deep-purple">Add new Record</a></p>
    </div>
</body>
</html>
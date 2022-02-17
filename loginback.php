<?php
session_start();
$conn=mysqli('localhost','Tanishqa','#tani10032005','expensemanager');
$username=$_POST['username'];
$passwd=$_POST['passwd'];
$sql="SELECT * from users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s',$username);
$stmt->execute();
$result=$stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();
$conn->close();
if ($passwd != $row['passwd'])
{
    die("Wrong username or Password");
}

$_SESSION['username'] = $row['username'];
$_SESSION['user_id'] = $row['id'];
//redirect
header("Location:index.php");

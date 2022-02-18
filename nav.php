<div class="w3-bar" style="background-image: linear-gradient(#1A4260,black);">
<b>
    <a href="index.php" class="w3-bar-item w3-btn w3-hover-green" style="font-family:cursive;font-size:25px;color:white;">Home</a><!-- w3 ke bar ka item-->
    <?php 
    if(isset($_SESSION['user_id']))
    { ?>
        
        <a href="addrecord.php" class="w3-bar-item w3-btn w3-hover-green" style="font-family:cursive;font-size:25px;color:white;">Add Record</a>
        <a href="signup.php" class="w3-bar-item w3-btn w3-hover-green" style="font-family:cursive;font-size:25px;color:white;">My Record</a>  
    <?php
    } else {
    ?>
    <a href="login.php" class="w3-bar-item w3-btn w3-hover-green" style="font-family:cursive;font-size:25px;color:white;">Login</a>
    <a href="signup.php" class="w3-bar-item w3-btn w3-hover-green" style="font-family:cursive;font-size:25px;color:white;">Sign up</a>
    <?php } ?>
</b>
</div>
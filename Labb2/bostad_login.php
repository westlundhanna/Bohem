<?php
    require('includes/bostad_functions.php');
    require('includes/bostad_conn_mysql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<style>
@-webkit-keyframes autofill {
      to {
        color: black;
        background: white;
      }
    }
    input:-webkit-autofill {
      -webkit-animation-name: autofill;
      -webkit-animation-fill-mode: both;
    }
</style>
    <div class="Wrapper">
        <?php include('includes/bostad_header.php'); ?>
        <h2 class="Wrapper-Title">LOGGA IN</h2>
        <form action="bostad_checklogin_mysqli.php" method="post">
            <input type="hidden" name="issubmit" value="1">
            <label for="email">E-POST</label>
            <input type="email" name="email">
            <label for="psw" style="margin: 10px;">LÖSENORD</label>
            <input type="password" name="psw">
            <input type="submit" name="submit" value="LOGGA IN">
        </form>
        <div class="Register__Wrapper">
            <h3>eller</h3>
            <p><a class="Register-Button" href="bostad_register.php">SKAPA KONTO</a></p>
        </div>
        <?php include('includes/bostad_footer.php'); ?>
    </div>
</body>
</html>
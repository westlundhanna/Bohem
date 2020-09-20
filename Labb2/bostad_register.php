<?php
    require('includes/bostad_functions.php');
    require('includes/bostad_conn_mysql.php');

    $connection = dbConnect();

    if(isset($_POST['issubmit']) && $_POST['issubmit'] == 1){
        $registerUser = registerUser($connection);
        header("Location: bostad_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <?php include("includes/bostad_header.php"); ?>
        <h2 class="Wrapper-Title">SKAPA KONTO</h2>
        <form action="bostad_register.php" method="post">
            <input type="hidden" name="issubmit" value="1">
            <label for="name">NAMN</label>
            <input type="text" name="name">
            <label for="email">E-POST</label>
            <input type="email" name="email">
            <label for="psw">LÖSENORD</label>
            <input type="password" name="psw">
            <input type="submit" value="SKAPA">
        </form>
        <?php include("includes/bostad_footer.php"); ?>
    </div>
<?php
dbDisconnect($connection);
?>
</body>
</html>
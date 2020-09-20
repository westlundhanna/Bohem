<?php
    session_start();
    require('includes/bostad_conn_mysql.php');
    require('includes/bostad_functions.php');
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
    <div class="Wrapper">
    <?php
        $connection = dbConnect();

        $checkUser = mysqli_real_escape_string($connection,$_POST['email']);
        $checkPass = mysqli_real_escape_string($connection,$_POST['psw']);

        $query = "SELECT * FROM users
                WHERE userEmail = '$checkUser'";
                
        $result = mysqli_query($connection, $query) or die("Query failed: $query");

        $row = mysqli_fetch_assoc($result);

        $count = mysqli_num_rows($result);
        if($count == 1) {
            if (password_verify($checkPass, $row["userPassword"])) {
                $_SESSION['status'] = "ok";
                $_SESSION['userid'] = $row['userId'];
                echo "<p>Du har loggat in, klicka på länken för att gå vidare!</p>";
                echo '<p><a href="bostad_home.php">Gå till Mina sidor</a></p>';
            } else {
                echo "<p>Du har inte fyllt i rätt användare och lösenord</p>";
                echo '<p><a href="bostad_login.php">Försök igen</a></p>';
            }
        }
        dbDisconnect($connection);
?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <header>
        <a class="Header-Title" href="bostad_index.php"><img src="img/bohem_logo.svg" alt=""></a>
        <ul>
            <li class="Menu__Item">
            <p><a href="bostad_read.php">Till salu</a></p>
            </li>
            
            <?php 
            if(isset($_SESSION["status"]) && isset($_SESSION["status"]) == "ok") { 
            ?>
            <li class="Menu__Item">
            <p><a href="logout.php">Logga ut</a></p>
            </li>
            <?php
            }else{
            ?> 
            <li class="Menu__Item">
            <p><a href="bostad_login.php">Logga in</a></p>
            </li>
            <?php
            }
            ?>
        </ul>
    </header>
</html>
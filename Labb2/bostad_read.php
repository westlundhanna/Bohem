<?php
    require("includes/bostad_conn_mysql.php");
    require("includes/bostad_functions.php");

    $connection = dbConnect();

    $allBostader = getAllBostader($connection);

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
    <div class="Wrapper">
    <?php include('includes/bostad_header.php'); ?>
        <h2 class="Wrapper-Title">TILL SALU</h2>
            <div class="Bostad__Items">
                <?php
                    while($row = mysqli_fetch_array($allBostader)) {
                    ?>
                    <div class="Bostad__Item">
                    <h3><?php echo $row['bostadAdress']; ?></h3> 
                    <p>Antal rum: <?php echo $row['bostadRok']; ?></p>
                    <p>Område: <?php echo $row['bostadOmrade']; ?></p>
                    <img class="Bostad__Item-Image" src="img/kitchen.jpg" alt="">
                    <p><?php echo $row['bostadPris'] . " kr"; ?></p>
                    <p><?php echo $row['bostadBeskrivn']; ?></p>
                    </div>   
                    <?php
                    }      
                ?>
            </div>
    <?php include("includes/bostad_footer.php"); ?>
    </div>
    <?php dbDisconnect($connection); ?>
</body>
</html>
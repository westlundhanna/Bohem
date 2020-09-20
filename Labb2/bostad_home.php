<?php
    session_start();
    require('includes/bostad_functions.php');
    require('includes/bostad_conn_mysql.php');

    $connection = dbConnect();
    
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
        <?php include('includes/bostad_header.php'); ?>
        <?php
            if($_SESSION['status'] == "ok"){
                echo "<p>Välkommen!</p>";
                $userid = $_SESSION["userid"];
            } else{
                header("Location: bostad_index.php");
            }
        ?>
        <a href="bostad_create.php"><h2 class="Wrapper-Title">LÄGG UPP ETT BOSTADSOBJEKT TILL FÖRSÄLJNING</h2></a>
        
        <a href="delete.php"><h2 class="Wrapper-Title">TA BORT ETT BOSTADSOBJEKT</h2></a>
        
        <h2 class="Wrapper-Title">UPPDATERA ETT BOSTADSOBJEKT</h2>
        <div class="Update-Links__Container">
            <?php $bostaderFromUser = getBostaderFromUser($connection); ?>
            <?php while($row = mysqli_fetch_array($bostaderFromUser)) {
                if($row < 1) {
                echo "Du har inte publicerat några bostadsobjekt än.";
                }?>
                <a href="bostad_update.php?editid=<?php echo $row['bostadId']; ?>"><h2 class="Wrapper-Title"><?php echo $row['bostadAdress']; echo '<br> ID: ' . $row['bostadId']; ?></h2></a>
        <?php } ?>
        
        </div>
        <?php include('includes/bostad_footer.php'); ?>
    </div>
    <?php dbDisconnect($connection); ?>
</body>
</html>
<?php
    session_start();
    require('includes/bostad_functions.php');
    require('includes/bostad_conn_mysql.php');

    $connection = dbConnect();
    
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
    <?php
        if(isset($_GET['editid']) && $_GET['editid'] > 0 ){
            $bostadData = getBostadData($connection,$_GET['editid']);
        }
        if(isset($_POST['updateid']) && $_POST['updateid'] > 0) {
            echo "update!!";
            updateBostad($connection);
            header("Location: bostad_home.php?editid=".$_POST['updateid']);
        }    

    ?>
    <div class="Wrapper">
        <?php include('includes/bostad_header.php'); ?>
        <a href="bostad_home.php">Gå tillbaka till Mina sidor</a>
            <h2 class="Wrapper-Title">Ändra <?php echo $bostadData['bostadAdress']; ?></h2>
            <form action="bostad_update.php" class="Form__Update-Bostad" method="post">
                <input type="hidden" name="updateid" value="<?php echo $bostadData['bostadId']; ?>"> 
                <label for="pris">PRIS</label>
                <input type="text" name="pris" value="<?php echo $bostadData['bostadPris']; ?>">
                <label for="beskr">BESKRIVNING</label>
                <input type="text" name="beskr" value="<?php echo $bostadData['bostadBeskrivn']; ?>"> 
                <input type="submit" name="submit" value="UPPDATERA">
            </form>
        <?php include('includes/bostad_footer.php'); ?>
    </div>
    <?php dbDisconnect($connection); ?>
</body>
</html>
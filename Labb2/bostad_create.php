
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
    <div class="Wrapper">
    <?php include('includes/bostad_header.php'); ?>
    <a href="bostad_home.php">Gå tillbaka till Mina sidor</a>
    <?php
    echo "<br>";
    if(isset($_SESSION['status']) && isset($_SESSION['status']) == "ok") {
        $userid = $_SESSION['userid']; 
    }else{
        echo "du är inte inloggad";
    }
    ?>
    
    <?php
        if(isset($_POST['userid']) && $_POST['userid'] == $userid) {
            $publicera = publiceraBostad($connection);
            header("Location: bostad_home.php");
        }
    ?>
    <h2 class="Wrapper-Title">Publicera ett bostadsobjekt</h2>
    <form action="bostad_create.php" class="Form__Create-Bostad" method="post">
            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
            <label for="gata">GATA</label>
            <input type="text" name="gata"> 
            <label for="omrade">OMRÅDE</label>
            <input type="text" name="omrade">
            <label for="kvm">KVM</label>
            <input type="text" name="KVM">
            <label for="pris">PRIS</label>
            <input type="text" name="pris">
            <label>ANTAL RUM</label>
            <div class="Form__Bostad-Check">
                <label for="one">1</label>
                <input type="checkbox" name="rok[]" value=1>
                <label for="two">2</label>
                <input type="checkbox" name="rok[]" value=2>
                <label for="three">3</label>
                <input type="checkbox" name="rok[]" value=3>
                <label for="four">4</label>
                <input type="checkbox" name="rok[]" value=4>
                <label for="five">5</label>
                <input type="checkbox" name="rok[]" value=5>
            </div>
            <label>BOSTADSTYP</label>
            <div class="Form__Bostad-Check">
                <label for="lgh">Lägenhet</label>
                <input type="checkbox" name="typ[]" value="1">
                <label for="villa">Villa</label>
                <input type="checkbox" name="typ[]" value="2">
                <label for="fritid">Fritidshus</label>
                <input type="checkbox" name="typ[]" value="3">
            </div>
            <label for="beskr">BESKRIVNING</label>
            <input type="text" name="beskr">
            <input type="submit" name="submit" value="PUBLICERA">
        </form>
        <?php include('includes/bostad_footer.php'); ?>
    </div>
    <?php dbDisconnect($connection); ?>
</body>
</html>
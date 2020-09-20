<?php
    session_start();
    require('includes/bostad_functions.php');
    require('includes/bostad_conn_mysql.php');

    $connection = dbConnect();

    if(isset($_GET['deleteid']) && $_GET['deleteid'] > 0 ){
        $isDeleteid = $_GET['deleteid'];
    }
    if(isset($_POST['isdeleteid']) && $_POST['isdeleteid'] > 0){
        deleteBostad($connection,$_POST['isdeleteid']);
        header("Location: bostad_home.php");
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
    <div class="Wrapper">
        <?php include('includes/bostad_header.php'); ?>
        <a href="bostad_home.php">Gå tillbaka till Mina sidor</a>
        <h2 class="Wrapper-Title">Ta bort ett bostadsobjekt</h2>
        <form action="delete.php" class="Form__Delete-Bostad" method="post">
            <input type="hidden" value="<?php echo $isDeleteid; ?>">
            <label for="isdeleteid">BOSTADSID</label>
            <input type="text" name="isdeleteid">
            <input type="submit" name="submit" value="TA BORT">
        </form>
        <?php include('includes/bostad_footer.php'); ?>
    </div>
    <?php dbDisconnect($connection); ?>
</body>
</html>

<?php
    session_start(); 
    unset($_SESSION['status']);
    session_destroy();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
 <title>Document</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Wrapper">
    <h1>Du har loggats ut.</h1>
    <?php echo '<p><a href="bostad_index.php">Gå tillbaka till startsidan</a></p>'; ?>
    </div>
</body>
</html>
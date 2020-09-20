<?php
    require 'bostad_class.php';
    require 'lagenhet.php';
    require 'villa.php';

    $lagenhet = new lagenhet('67', '3', '2400000', 'Petterslundsgatan 21D', 'lagenhet', 'Fålhagen', 'Denna gavellägenhet på våningen högst upp har balkong i sydvästligt läge.', 'Tina Mide');

    echo '<b>Lägenheter</b> <br>';
    echo 'Område: ' . $lagenhet->getOmrade();
    echo '<br>';
    echo 'Storlek: ' . $lagenhet->getKvm() . ' kvm'; 
    echo '<br>';
    echo 'Antal rum: ' . $lagenhet->getRok(); 
    echo '<br>';
    echo 'Pris: ' . $lagenhet->getPris() .'<br><br>';
    echo $lagenhet->getBeskr();
    echo '<br>';
    $lagenhet->getMaklare();
    $lagenhet->setMaklare('Tina Mide');
    echo 'Lägenheten ligger på ' . $lagenhet->getAdress() . ' och säljs av ' . $lagenhet->getMaklare();
    echo '<br><br>';

    $villa = new villa('100', '5', '4900000', 'Jällavägen 113', 'villa', 'Jälla', 'Denna enplansvilla ligger i skyddat läge mitt i en landsbygdsidyll.', 'Didrik Nook');

    echo '<b>Villor</b> <br>';
    echo 'Område: ' . $villa->getOmrade();
    echo '<br>';
    echo 'Storlek: ' . $villa->getKvm() . ' kvm'; 
    echo '<br>';
    echo 'Antal rum: ' . $villa->getRok();
    echo '<br>'; 
    echo 'Pris: ' . $villa->getPris() .'<br><br>';
    echo $villa->getBeskr();
    echo '<br>';
    $villa->getMaklare();
    $villa->setMaklare('Didrik Nook');
    echo 'Villan ligger på ' . $villa->getAdress() . ' och säljs av ' . $villa->getMaklare();
    echo '<br>';
?>
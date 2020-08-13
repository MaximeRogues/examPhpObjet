<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include 'Views/Parts/style.html';
    ?>

</head>
<body>

<?php

require_once 'include.php';

if(empty($_GET)) {
    $_GET['controller'] = 'voiture';
    $_GET['action'] = 'list';
}

if($_GET['controller'] === 'voiture' && $_GET['action'] === 'list') {
    $voitureController = new VoitureController();
    $voitureController->afficherVoitures();    
}

else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'detail' && isset($_GET['id'])) {
    $voitureController = new VoitureController();
    $voitureController->afficherUneVoiture($_GET['id']);    
}

// else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'updateForm' && isset($_GET['id'])) {
//     $voitureController = new VoitureController();
//     $voitureController->updateForm($_GET['id']);    
// }

// else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'update' && isset($_GET['id'])) {
//     $voitureController = new VoitureController();
//     $voitureController->updateVoiture($_GET['id']);    
// }

else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'addForm') {
    $voitureController = new VoitureController();
    $voitureController->addForm();    
}

else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'add') {
    $voitureController = new VoitureController();
    $voitureController->addVoiture();    
}

else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $voitureController = new VoitureController();
    $voitureController->deleteVoiture($_GET['id']);    
}


?>    
</body>
</html>
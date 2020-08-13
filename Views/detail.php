<br>

<div>


    <a href="index.php">
        <button class="btn btn-success">Retour à la liste</button>
    </a>
    <br> <br>

    <div class="text-center">

        <h2>Détail de la voiture :</h2>
        <br>

        <h3>Marque : <?= $voiture->getMarque() ?>, Modèle : <?= $voiture->getModele() ?></h3>
        <br>

        <h4>Energie : <?= $voiture->getEnergie() ?></h4>
        <h4>
            <?php if($voiture->getBoiteAuto()) {
                        echo 'Boîte automatique';
                    } else {
                        echo 'Boîte manuelle';
                    } ?>
        </h4>
        <br>

        <?php if($voiture->getImage()) {
                echo '<img class="imageDetail" src="Views/Parts/Images/' . $voiture->getImage() . '" alt="Image de la voiture"> </td>';
            } else {
                echo 'Désolé, pas d\'image pour cette voiture';
            }
?>
        <br>

    </div>

</div>
<br>

<div>


    <h2>Liste des voitures</h2>
    <br>

    <a href="index.php?controller=voiture&action=addForm">
        <button class="btn btn-success">Ajouter une voiture</button>
    </a>
    <br> <br>

    <table class="table">
        <thead>
            <td> <u>Marque</u></td>
            <td> <u>Modele</u></td>
            <td> <u>Energie</u></td>
            <td> <u>Boite de vitesse</u></td>
            <td> <u>Image</u></td>
            <td> <u>Actions</u></td>
        </thead>

        <tbody>
            <?php
        foreach($voitures as $voiture) {
        ?>

            <tr>
                <td><?= $voiture->getMarque() ?></td>
                <td><?= $voiture->getModele() ?></td>
                <td><?= $voiture->getEnergie() ?></td>
                <td><?php if($voiture->getBoiteAuto()) {
                        echo 'Boîte automatique';
                    } else {
                        echo 'Boîte manuelle';
                    } ?>
                </td>
                <td>
                    <?php if($voiture->getImage()) {
                echo ' <img src="Views/Parts/Images/' . $voiture->getImage() . '" alt="Image de la voiture"> </td>';
            }
            ?>
                <td>
                    <a href="index.php?controller=voiture&action=detail&id= <?= $voiture->getId() ?>">
                        <button class="btn btn-info">Detail</button>
                    </a>
                    <!-- <a href="index.php?controller=voiture&action=updateForm&id= <?= $voiture->getId() ?>">
                    <button>Modifier</button>
                </a> -->
                    <a href="index.php?controller=voiture&action=delete&id= <?= $voiture->getId() ?>">
                        <button class="btn btn-danger">Supprimer</button>
                    </a>
                </td>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>

</div>
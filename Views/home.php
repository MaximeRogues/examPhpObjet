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
            <td>Marque</td>
            <td>Modele</td>
            <td>Energie</td>
            <td>Boite de vitesse</td>
            <td>Image</td>
            <td>Actions</td>
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
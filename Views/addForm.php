<br>

<div>



    <a href="index.php">
        <button class="btn btn-success">Retour à la liste</button>
    </a>
    <br> <br>

    <div class="text-center">

        <h2>Ajouter une voiture : </h2>
        <br>

        <form method="post" action="index.php?controller=voiture&action=add" enctype="multipart/form-data">

            <label for="marque">Marque de la voiture : </label>
            <input name="marque" type="text">
            <br> <br>

            <label for="modele">Modèle de la voiture : </label>
            <input name="modele" type="text">
            <br> <br>

            <label for="energie">Energie de la voiture : </label>
            <select name="energie" id="energie">
                <option value=""></option>
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrique">Electrique</option>
                <option value="Hybride">Hybride</option>
            </select>
            <br> <br>

            <label for="boiteAuto">Boite de vitesse de la voiture : </label>
            <select name="boiteAuto" id="boiteAuto">
                <option value=""></option>
                <option value="1"> Automatique</option>
                <option value="false"> Manuelle</option>
            </select>
            <br> <br>

            <!-- <label for="image">Image de la voiture : </label>
        <input name="image" type="text">
        <br> <br> -->

            <div class="text-center">
                <label for="image">Ajouter une image</label>
                <input class="m-auto" type="file" class="form-control-file" id="image" name="image"
                    accept="image/jpeg, image/png, image/gif">
                <br><br>
            </div>


            <button class="btn btn-success" type="submit">
                Valider
            </button>
        </form>

    </div>

    <?php
    if (isset($errors)) {
        if (count($errors)) {
            echo(' <h2>Erreurs lors de la soumission du formulaire : </h2>');
            foreach ($errors as $error) {
                echo('<div>' . $error . '</div>');
            }
        }
    }
?>

</div>
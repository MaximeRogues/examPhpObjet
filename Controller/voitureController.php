<?php

class VoitureController {
        
    // afficher toutes les voitures sur la page home
    public function afficherVoitures() {
        $voitureManager = new VoitureManager();
        $voitures = $voitureManager->selectAll();
        require 'Views/home.php';
    }

    // afficher une seule voiture sur la page detail
    public function afficherUneVoiture($id) {
        $voitureManager = new VoitureManager();
        $voiture = $voitureManager->select($id);
        require 'Views/detail.php';
    }

    // afficher le formulaire de modif d'une voiture
    public function updateForm($id) {
        $voitureManager = new VoitureManager();
        $voiture = $voitureManager->select($id);
        require 'Views/editForm.php';
    }

    // modifier une voiture
    public function updateVoiture($id) {
        $voitureManager = new VoitureManager();
        $voiture = $voitureManager->select($id);

        $voiture->setMarque($_POST['marque']);
        $voiture->setModele($_POST['modele']);  
        $voiture->setEnergie($_POST['energie']);
        $voiture->setBoiteAuto($_POST['boiteAuto']);
        $voiture->setImage($_POST['image']);

        $voitureManager->update($voiture);

        header('Location: index.php');
    }

    // afficher le formulaire d'ajout
    public function addForm() {
        require 'Views/addForm.php';
    }

    // ajouter une voiture en BDD
    public function addVoiture() {
        $voitureManager = new VoitureManager();
        $voiture = new Voiture(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['boiteAuto']);
        $image = $_FILES['image'];
        $errors = $this->validForm($voiture, $image);
        if (!count($errors)) {
            if ($image['error'] === 0) {
                $voiture->setImage($this->uploadImage($image, null));
            }
            $voitureManager->insert($voiture);
            header('Location: index.php');
        } else {
            require 'Views/addForm.php';
        }
    }


    // supprimer une voiture en BDD
    public function deleteVoiture($id) {
        $voitureManager = new VoitureManager();
        $voiture = $voitureManager->select($id);
        $voitureManager->delete($id);

        header('Location: index.php?controller=voiture&action=list');
    }

    private function validForm(Voiture $voiture, $image) {
        $errors = [];

        if(empty($voiture->getMarque())) {
            $errors[] = 'Veuillez entrer une marque';
        }

        if(empty($voiture->getModele())) {
            $errors[] = 'Veuillez entrer un modèle';
        }

        if(empty($voiture->getEnergie())) {
            $errors[] = 'Veuillez entrer une énergie';
        }

        if(empty($voiture->getBoiteAuto())) {
            $errors[] = 'Veuillez entrer une sorte de boîte de vitesse';
        }

        $imageError = $this->validImage($image);

        if ($imageError) {
            $errors[] = $imageError;
        }
        return $errors;
    
    }


    private function validImage($image)
    {
        $error = '';
        if (isset($image) && $image['error'] === 0) {
            if ($image['size'] <= 1000000) {
                $extensionFile = $image['type'];
                $authorizedExtensions = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($extensionFile, $authorizedExtensions)) {
                    $error = 'Je n\'accepte que des images';
                }
            } else {
                $error = 'Le fichier est trop lourd';
            }
        }
        return $error;
    }

    private function uploadImage($image, $voitureFile)
    {
        if (!$voitureFile) {
            $voitureFile = uniqid() . '.' . pathinfo($image['name'])['extension'];
        }
        move_uploaded_file($image['tmp_name'], 'Views/Parts/Images/' . $voitureFile);
        return $voitureFile;
    }


    
}

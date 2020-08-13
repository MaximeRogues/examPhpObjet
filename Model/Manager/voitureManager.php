<?php
class VoitureManager extends DbManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $voitures = [];
        $sql =  'SELECT * FROM voiture';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voiture($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boiteAuto'], $row['image']);
        }

        return $voitures;
    }

    public function insert(Voiture $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $boiteAuto = $voiture->getBoiteAuto();
        $image = $voiture->getImage();

        $requete = $this->bdd->prepare("INSERT INTO voiture (marque, modele, energie, boiteAuto, image) VALUES (:marque, :modele, :energie, :boiteAuto, :image)");

        $requete->execute([
            'marque' => $marque,
            'modele' => $modele,
            'energie' => $energie,
            'boiteAuto' => $boiteAuto,
            'image' => $image]);
            
        $voiture->setId($this->bdd->lastInsertId());
    }

    public function delete($id)
    {
        $requete = $this->bdd->prepare("DELETE FROM voiture where id = ?");
        $requete->bindParam(1, $id);
        $requete->execute();
    }

    public function select($id)
    {
        $requete = $this->bdd->prepare("SELECT * FROM voiture WHERE id=?");
        $requete->bindParam(1, $id);
        $requete->execute();
        $res = $requete->fetch();
        $voiture = new Voiture($res['id'], $res['marque'], $res['modele'], $res['energie'], $res['boiteAuto'], $res['image']);

        return $voiture;
    }

    public function update(Voiture $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $boiteAuto = $voiture->getBoiteAuto();
        $image = $voiture->getImage();
        $id = $voiture->getId();

        $requete = $this->bdd->prepare("UPDATE voiture SET marque = : marque, modele = :modele, energie = :energie, boiteAuto = :boiteAuto, image = :image WHERE id = :id");
        $requete->execute([
            'marque' => $marque,
            'modele' => $modele,
            'energie' => $energie,
            'boiteAuto' => $boiteAuto,
            'image' => $image,
            'id' => $id]);
    }
}

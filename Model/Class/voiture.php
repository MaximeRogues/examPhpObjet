<?php

class Voiture {

    private $id;
    private $marque;
    private $modele;
    private $energie;
    private $boiteAuto;
    private $image;


    public function __construct($id = null, $marque, $modele, $energie, $boiteAuto, $image = null)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energie = $energie;
        $this->boiteAuto = $boiteAuto;
        $this->image = $image;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of energie
     */ 
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set the value of energie
     *
     * @return  self
     */ 
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get the value of boiteAuto
     */ 
    public function getBoiteAuto()
    {
        return $this->boiteAuto;
    }

    /**
     * Set the value of boiteAuto
     *
     * @return  self
     */ 
    public function setBoiteAuto($boiteAuto)
    {
        $this->boiteAuto = $boiteAuto;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

}
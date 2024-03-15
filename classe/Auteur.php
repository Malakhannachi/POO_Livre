<?php

class Auteur{
    private string $nom;
    private string $prenom;
    private array $livres;
 
    public function __construct (string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

      public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLivres(): array
    {
        return $this->livres;
    }

    public function setLivres(array $livres): self
    {
        $this->livres = $livres;

        return $this;
    }
    public function addLivres (Livre $livre){
        $this->livres[] = $livre;
    }

    public function afficherLivres(){
        $resultat = "Livres de $this.<br>";
        foreach ($this->livres as $livre) {
            $resultat .="$livre.<br>";
        }
    return $resultat. "<br";
    }
    public function __toString()
    {
     return $this->nom." ".$this->prenom;
    }

    
    }
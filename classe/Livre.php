<?php

class Livre{
    private string $titre;
    private DateTime $anneeDeParution ;
    private int $nbPages;
    private float $prix;
    private Auteur $auteur;

    public function __construct (string $titre, string $anneeDeParution, int $nbPages, float $prix,Auteur $auteur){
        $this->titre = $titre;
        $this->anneeDeParution = New DateTime ($anneeDeParution);
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivres($this);
    }
       public function getTitre(): string
    {
        return $this->titre;
    }

      public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

        public function getAnneeDeParution(): DateTime
    {
        return $this->anneeDeParution;
    }

       public function setAnneeDeParution(DateTime $anneeDeParution): self
    {
        $this->anneeDeParution = $anneeDeParution;

        return $this;
    }

      public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages): self
    {
        $this->nbPages = $nbPages;

        return $this;
    }

        public function getPrix(): float
    {
        return $this->prix;
    }

  
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

  
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

  
    public function setAuteur(Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getInfos(){
     return $this. " ( ".$this->getAnneeDeParution()->format("Y"). " )". " : ".$this->getNbPages(). " / ".$this->getPrix(). "euro";
    }
    public function __toString()
    {
     return $this->titre;
    }
}
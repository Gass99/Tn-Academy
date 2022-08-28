<?php 
class formation 
{
    public $id;
    public $titre;
    public $type;
    public $adresse;
    public $categorie;
    public $img;
    public $prix;
    public $duree;
    public $datef;
    public $idf;


    function __construct($id,$titre,$type,$adresse,$categorie,$img,$prix,$duree,$datef,$idf) {
       
        $this->id=$id;
        $this->titre=$titre;
        $this->type=$type;
        $this->adresse=$adresse;
        $this->categorie=$categorie;
        $this->img=$img;
        $this->prix=$prix;
        $this->duree=$duree;
        $this->datef=$datef;
        $this->idf=$idf;


    }

    function setid(string $id){
        $this->id=$id;
    }
    function settitre(string $titre){
        $this->titre=$titre;
    }
    function setdescription(string $description){
        $this->description=$description;
    }

    function getid(){
        return $this->id;
    }
    function gettitre(){
        return $this->titre;
    }
    function getcat(){
        return $this->categorie;
    }
    function getimg(){
        return $this->img;
    }
    function getduree(){
        return $this->duree;
    }
    function getdate(){
        return $this->datef;
    }
    function get_idf(){
        return $this->idf;
    }
    function gettype(){
        return $this->type;
    }
    function getad(){
        return $this->adresse;
    }
    

    
    public function getPrix()
    {
            return $this->prix;
    }

   
    public function setPrix($prix)
    {
            $this->prix = $prix;

            return $this;
    }
}
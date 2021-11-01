<?php
class Roadmap{
	
	//Attribut
	private $roadId;
	private $roadNom;
	private $roadTag;
	private $roadStatus;
	
	
	//Constructeur
	public function __construct($valeur = array()){
		if(!empty($valeur)){
			$this->affect($valeur);
		}
	}
		
	public function affect($donnees){
		foreach($donnees as $attribut => $valeur){
			switch ($attribut){
				case 'road_id':$this->setRoadId($valeur);break;
				case 'road_nom':$this->setRoadNom($valeur);break;
				case 'road_tag':$this->setRoadTag($valeur);break;
				case 'road_status':$this->setRoadStatus($valeur);break;
                case 'road_color':$this->setRoadColor($valeur);break;
                case 'road_grav':$this->setRoadGrav($valeur);break;
			}
		}
	}
	
	//Getteurs et Setteurs
		//Numéro
	public function setRoadId($id) {
		$this->roadId= $id;
	}
	
	public function getRoadId()	{
		return $this->roadId;
	}
		//Nom
	public function setRoadNom($nom)	{
		$this->roadNom = $nom;
	}
	
	public function getRoadNom()	{
		return $this->roadNom;
	}
		//Tag
	public function setRoadTag($tag) {
		$this->roadTag = $tag;
	}
	
	public function getRoadTag() {
		return $this->roadTag;
	}
		//Description
	public function setRoadStatus($status)	{
		$this->roadStatus = $status;
	}
	
	public function getRoadStatus()	{
		return $this->roadStatus;
	}

    	//Color
	public function setRoadColor($color)	{
		$this->roadColor = $color;
	}
	
	public function getRoadColor()	{
		return $this->roadColor;
	}

        //Grav
	public function setRoadGrav($grav)	{
		$this->roadGrav = $grav;
	}
	
	public function getRoadGrav()	{
		return $this->roadGrav;
	}
}
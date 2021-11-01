<?php
class RoadmapManager{
	
	private $dbo ; 
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function listerRoadmap(){
		$listeRoadmap = array();
		$sql = 'SELECT * FROM Roadmap';
		$requete = $this->db->prepare($sql);
		$requete->execute();
		
		while($roadmap=$requete->FETCH(PDO::FETCH_ASSOC)){
			$listeRoadmap[]=new Roadmap($roadmap);
		}
		$requete->closeCursor();
		return $listeRoadmap ;
	}

    public function getNbRoadmap() {
		$sql = "SELECT COUNT(DISTINCT road_id) AS nbRoadmap FROM Roadmap";
		$requete = $this->db->prepare($sql);
		$requete->execute();
		$result=$requete->fetch(PDO::FETCH_ASSOC);
		foreach($result as $valeur){
			$nbRoadmap = $valeur;
		}
		$requete->closeCursor();
		return $nbRoadmap;
	}
}
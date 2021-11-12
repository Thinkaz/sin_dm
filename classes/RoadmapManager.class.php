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

	public function ajouterRoadmap($roadmap) {
		$retour = -1;
		if($roadmap instanceof Roadmap){
			$req = $this->db->prepare('INSERT INTO roadmap (road_nom, road_tag, road_status, road_color, road_grav)
			                            VALUES (:roadNom, :roadTag ,:roadStatus, :roadColor, :roadGrav);');
			$req->bindValue(':roadNom', $roadmap->getRoadNom());
			$req->bindValue(':roadTag', $roadmap->getRoadTag());
			$req->bindValue(':roadStatus', $roadmap->getRoadStatus());
			$req->bindValue(':roadColor', $roadmap->getRoadColor());
			$req->bindValue(':roadGrav', $roadmap->getRoadGrav());

			$retour = $req->execute();		
		}
		return $retour;
	}
	
	public function existantRoadmap($roadmap){
		$sql = 'SELECT road_nom, road_tag FROM roadmap WHERE road_nom=:roadNom';
		$req = $this->db->prepare($sql);
		$req->bindValue(':roadNom', $roadmap->getRoadNom());
		$req->execute();
		
		$roadmapExist[] = $req->FETCH(PDO::FETCH_ASSOC);
		$req->closeCursor();
		
		return $roadmapExist[0] ;
	}

	public function getOtherRoadmapWithId($roadmap){
		$sql = "SELECT * FROM roadmap WHERE road_id = :roadId ";
		$req = $this->db->prepare($sql);
		$req->bindValue(':roadId', $roadmap->getRoadId());
		$req->execute();
		
		$roadmap=$req->FETCH(PDO::FETCH_ASSOC);
		$req->closeCursor();
		return $roadmap ;
	}

	public function modifierRoadmap($roadmap) {
		$retour = -1;
		if($roadmap instanceof Roadmap){
			$req = $this->db->prepare("UPDATE roadmap SET road_nom = :roadNom, road_tag = :roadTag, road_status = :roadStatus, road_color = :roadColor, road_grav = :roadGrav WHERE road_id = :roadId;");
			$req->bindValue(':roadNom', $roadmap->getRoadNom());
			$req->bindValue(':roadTag', $roadmap->getRoadTag());
			$req->bindValue(':roadStatus', $roadmap->getRoadStatus());
			$req->bindValue(':roadColor', $roadmap->getRoadColor());
			$req->bindValue(':roadGrav', $roadmap->getRoadGrav());
			$req->bindValue(':roadId', $roadmap->getRoadId());
			
			$retour = $req->execute();		
		}
		return $retour;
	}
}
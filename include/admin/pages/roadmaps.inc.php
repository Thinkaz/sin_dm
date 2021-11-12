<head>
    <title>SIN - Admin - Roadmaps</title>
	<link rel="stylesheet" href="../../css/adminr.css" />
</head>

<?php
$pdo=new Mypdo();
$roadmapManager = new RoadmapManager($pdo);	
?>

<h1 class="hello color">Roadmap</h1>

<h1 class="hello" style="font-size:35px">Ajouter une Roadmap</h1>
<div class="centrerBlock">
<?php
	if((empty($_POST['roadNom']))and(empty($_POST['roadTag']))and(empty($_POST['roadStatus']))and(empty($_POST['roadColor']))and(empty($_POST['roadGrav']))){
?>
<form method="post" action="?page=1" style="margin-top:40px">
    <div class="roadmap_all">
        <div class="roadmap_item">
            <div class="roadmap_content">
                <a class="roadmap_title"><td><input class="champ" type="text" placeholder="Ce que tu veux" name="roadNom" id="roadNom" size="35" maxlength="100" /></td></a>
            <div class="tags">
                <a><td><input class="champ" placeholder="ex : Urgent" type="text" name="roadGrav" id="roadGrav" size="15" maxlength="100" /></td></a>
                <a><td><input class="champ" placeholder="Ce que tu veux" type="text" name="roadTag" id="roadTag" size="15" maxlength="10" /></td></a>
            </div>
        </div>
		<div class="status" style="background-color:#333; font-weight: bold">
			<td><input class="champ" placeholder="ex : Finit" type="text" name="roadStatus" id="roadStatus" size="15" maxlength="100" /></td>
			<td><input class="champ" placeholder="ex : #212529" type="text" name="roadColor" id="roadColor" size="10" maxlength="7" /></td>
		</div>
	</div>
		<div><input class="bouton" type="submit" value="Valider" style="margin-top:20px" /></div>
	</form>

<?php
	}
	else if(!empty($_POST['roadNom']) and !empty($_POST['roadTag']) and !empty($_POST['roadStatus'])  and !empty($_POST['roadColor'])  and !empty($_POST['roadGrav'])){
		
		$roadNom = $_POST['roadNom'] ;
		$roadTag = $_POST['roadTag'] ;
		$roadStatus = $_POST['roadStatus'] ;
		$roadColor = $_POST['roadColor'] ;
		$roadGrav = $_POST['roadGrav'] ;
		
		
		$ajoutRoad = new Roadmap(array(	'road_nom'=> $roadNom,
														'road_tag'=> $roadTag,
														'road_status'=> $roadStatus,
														'road_color' => $roadColor,
														'road_grav'=> $roadGrav));
		$existeRoad=$roadmapManager-> existantRoadmap($ajoutRoad);
		if(!empty($existeRoad)){
			?>
			<p class="centrerp">
				<img src="image/erreur.png" alt="Erreur" title="Erreur" />
				Erreur ce roadmap existe déjà
				<script type="text/javascript">
					self.setTimeout("self.location.href = 'index.php?page=149e3309';", 1500) ;
				</script>
			</p>
			
		<?php
		}
		else{
			$retourajoutR=$roadmapManager->ajouterRoadmap($ajoutRoad);
		
			if($retourajoutR){
			?>
			<p class="centrerp"> 
				<img src="image/valid.png" alt="Valider" title="Validation" />
				L'insertion de la Roadmap : <?php echo $ajoutRoad->getRoadNom()?> s'est bien passée.
			</p> 
			<?php
			}
		else{ ?>
			<p class="centrerp"> 
				<img src="image/erreur.png" alt="Erreur" title="Erreur" /> 
				Un problème est survenu pendant l'insertion de <?php echo $ajoutRoad->getRoadNom()?> rééssayer ou contacter l'administrateur 
			</p> 
		<?php
		}
								
		}
	}	

	else if(empty($_POST['roadNom']) or empty($_POST['roadTag']) or empty($_POST['roadStatus']) or empty($_POST['roadColor']) or empty($_POST['roadGrav']) ){ ?>
			
            <p class="centrerp">
            	<img src="image/erreur.png" alt="Erreur" title="Erreur" />
           		Tous les champs marqués d'un astérisque sont obligatoires 
           	</p>
        	<script type="text/javascript">
				self.setTimeout("self.location.href = 'index.php?page=149e3309';", 1500) ;
           	</script>
        <?php
		
	}
	

	else{?>
		<p class="centrerp">
			<img src="image/erreur.png" alt="Erreur" title="Erreur" />
			Un problème est survenu contacter l'administrateur
		</p>
		<?php
	}
	
	

?>
</div>

<?php
	$pdo=new Mypdo();

?>
<h1>Modifier une roadmap </h1>
<div class="centrerBlock">
<?php
	if(empty($_GET['id'])){
			$roadmapManager = new RoadmapManager($pdo);
			$roadmap=$roadmapManager->listerRoadmap();
			?>
	<p> Qui souhaitez vous modifier ? </p>
			
			<table class="tableau">
            <tr>
                <th>Nom</th>
				<th>Tag</th>
                <th>Status</th>
                <th>Couleur</th>
				<th>Gravité</th>
            </tr>
            <?php
                foreach($roadmap as $roadmap){  ?>
                    <tr>

                        <td> 
                        	<a href="?page=1&amp;id=<?php print_r($roadmap->getRoadId());?>" title="Afficher détails de <?php print_r($roadmap->getRoadNom()); ?>">
                           		<?php print_r($roadmap->getRoadId());?> 
                            </a> 
                        </td>
						<td> <?php print_r($roadmap->getRoadNom()); ?></td>
                        <td> <?php print_r($roadmap->getRoadTag()); ?> </td>
                        <td> <?php print_r($roadmap->getRoadColor()); ?></td>
						<td> <?php print_r($roadmap->getRoadGrav()); ?></td>
                    </tr>		
            <?php	} ?>
            </table>
		
	<?php
	}
	else if(!empty($_GET['id']) and empty($_POST['nomRoad']) and empty($_POST['tagRoad'])and empty($_POST['statusRoad']) and empty($_POST['colorRoad']) and empty($_POST['gravRoad'])){
		$roadmapManager = new RoadmapManager($pdo);
		$roadId=$_GET['id'];
		$roadmap = new Roadmap(array('road_id' => $roadId));
		$roadMod=new Roadmap($roadmapManager->getOtherRoadmapWithId($roadmap)); ?>
		
			<form action="?page=1&amp;id=<?php print_r($roadmap->getRoadId());?>" method="post">
				<table>
					<tr>
						<td class="gauche"><label class="labelC">Nom*: </label></td>
						<td><input class="champ" type="text" name="nomRoad" id="nomRoad" size="20" value="<?php echo $roadMod->getRoadNom() ; ?>" maxlength="100" /></td>
						<td class="gauche"><label class="labelC">Tag*: </label></td>
						<td><input class="champ" type="text" name="tagRoad" id="tagRoad" size="20" value="<?php echo $roadMod->getRoadTag() ; ?>" maxlength="50" /></td>
						<td class="gauche"><label class="labelC">Status*: </label></td>
						<td><input class="champ" type="text" name="statusRoad" id="statusRoad" size="20" value="<?php echo $roadMod->getRoadStatus() ; ?>" maxlength="20" /></td>
						<td class="gauche"><label class="labelC">Couleur*: </label></td>
						<td><input class="champ" placeholder="ex : #212529" type="text" name="colorRoad" id="colorRoad" size="20" value="<?php echo $roadMod->getRoadColor() ; ?>" maxlength="7"/></td>
						<td class="gauche"><label class="labelC">Gravité*:</label></td>
						<td><input class="champ" type="text" name="gravRoad" id="gravRoad"value="<?php echo $roadMod->getRoadGrav() ; ?>"  maxlength="20" /></td>
					</tr>                    
				</table>
				<div><input class="bouton" type="submit" value="Valider" /></div>
				<p class="champOblig"> * Pour garder les anciennes données ne pas modifier</p>
			</form> 
		<?php
	
		}
	
	else if (!empty($_POST['nomRoad']) and !empty($_POST['tagRoad'])and !empty($_POST['statusRoad']) and !empty($_POST['colorRoad']) and !empty($_POST['gravRoad'])){
		$roadmapManager = new RoadmapManager($pdo);
		$roadId=$_GET['id'];
		$roadmap = new Roadmap(array('road_id' => $roadId));
		$roadMod= new Roadmap($roadmapManager->getOtherRoadmapWithId($roadmap));		
		$nomRoadmap = $_POST['nomRoad'] ;
		$tagRoadmap = $_POST['tagRoad'] ;
		$statusRoadmap = $_POST['statusRoad'] ;
		$colorRoadmap = $_POST['colorRoad'] ;
		$gravRoadmap = $_POST['gravRoad'] ;
		
		$idRoadmap = $roadMod->getRoadId();
		
					
					if (!empty($_SESSION['roadmap'])) {
						unset($_SESSION['roadmap']);
					}
					$roadMod = new roadmap(array( 	'road_id'=> $idRoadmap,
												    'road_nom'=> $nomRoadmap,
												    'road_tag'=> $tagRoadmap,
												    'road_status'=> $statusRoadmap,
												    'road_color'=> $colorRoadmap,
                                                    'road_grav'=> $gravRoadmap));
																 
					$modifiable=true;
					if($modifiable){
						$retour = $roadmapManager->modifierRoadmap($roadMod);
										
						?>
							<p class="centrerp"> 
							<img src="image/valid.png" alt="Valider" title="Validation" />
							Les données principales ont bien étaient modifiées </p>
		
						<?php
						} else{
							echo "<p> Réessayez ou contactez l'administrateur </p>" ;
						}
					}
			?>
</div>
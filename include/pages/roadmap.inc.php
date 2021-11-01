<head>
	<title>SIN - Roadmap</title>
</head>

<h2 class="hello road">Notre <a class="color">Roadmap.</a></h2>
<div class="centrerBlock">
	<?php
		$pdo=new Mypdo();
		
		if(empty($_GET['id'])){
			$roadmapManager = new RoadmapManager($pdo);
			$roadmaps=$roadmapManager->listerRoadmap();
			$nbRoadmap=$roadmapManager->getNbRoadmap();
   
		if($nbRoadmap>0){
		?>
		<!-- Quand on arrive sur la page Boutique -->
    <?php
        foreach($roadmaps as $roadmap){  ?>
        	<div class="roadmap_all">
                <div class="roadmap_item">
                    <div class="roadmap_content">
                            <a href="#" class="roadmap_title"><?php print_r($roadmap->getRoadNom()); ?></a>
                        <div class="tags">
                            <a><?php print_r($roadmap->getRoadGrav()); ?></a>
                            <a><?php print_r($roadmap->getRoadTag()); ?></a>
                        </div>
                    </div>
                    <div class="status" style="background-color:<?php print_r($roadmap->getRoadColor()); ?>; font-weight: bold">
                        <?php print_r($roadmap->getRoadStatus()); ?>
                    </div>
                </div>
            </div>
			<?php	} ?>
            <?php
			}else{?>
				<p class="centrerp">
						<img src="image/erreur.png" alt="Erreur" title="Erreur" />
						Il n'y a aucune composant enregistrée !
				</p>
			<?php
			}
		}
		else if(!empty($_GET['id'])&&empty($_GET['Suppr'])) {
			$typeManager = new TypeManager($pdo);
			$entrepotManager = new EntrepotManager($pdo);
			$composantManager = new ComposantManager($pdo);
			
			$compId = $_GET['id'] ;
			$composant = new Composant(array('comp_id' => $compId ));
			
			$composants=$composantManager->getOtherComposantWithId($composant);
			
			$type = new Type(array('type_id' => $composants['type_id'] ));
			$ent = new Entrepot(array('ent_id' => $composants['ent_id'] ));

			
			$type=$typeManager->getOtherTypeWithId($type);
			$ent=$entrepotManager->getOtherEntrepotWithId($ent);



			
		?>
		<!-- Quand on clique -> pas la première page. -->
        <table class="tableau">
        <tr>  
			<th>Nom</th>
			<th>Prix</th>
            <th>Description</th>
            <th>Type</th>
			<th>Entrepot</th>

			<th> Supression </th>

		</tr>
        <tr>
            <td> <?php echo $composants['comp_nom'] ;?>  </td>
            <td> <?php echo $composants['comp_prix']; ?> </td>
            <td> <?php echo $composants['comp_desc']; ?></td>
            <td> <?php echo $type['type_nom']; ?></td>
			<td> <?php echo $ent['ent_nom']; ?></td>
			<td>
				<a href="index.php?page=5&amp;id=<?php print_r($composant->getCompId());?>&amp;Suppr=1" title="Supprimer <?php print_r($composant->getCompPrix()); ?>">
                	<img src="image/erreur.png" alt="Supression" title="Supression" />
                </a> 		
			</td>
		</tr>
	</table>
	<?php
		}
		else if((!empty($_GET['id'])&& $_GET['Suppr']==1)){
			$compId=$_GET['id'];
			$composantManager = new ComposantManager($pdo);
			$composant = new Composant(array('comp_id' => $compId));
			$compSupr=new Composant($composantManager->getOtherComposantWithId($composant));
			$composantManager->supprimerComposant($compSupr); 
			?>
			<p class="centrerp">
				<img src="image/valid.png" alt="Valider" title="Validation" />
				Le composant <?php echo $compSupr->getCompNom() ;?> a bien été suprimé.
			</p> 
			<script type="text/javascript">
				self.setTimeout("self.location.href = 'index.php?page=0';", 1500) ;
			</script>
		<?php
		}
		?>
        
</div>

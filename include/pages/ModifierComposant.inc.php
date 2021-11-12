<?php
	$pdo=new Mypdo();

?>
<h1>Modifier un composant enregistrée</h1>
<div class="centrerBlock">
<?php
	if(empty($_GET['id'])){
			$composantManager = new ComposantManager($pdo);
			$composant=$composantManager->listerComposant();
			?>
	<p> Qui souhaitez vous modifier ? </p>
			
			<table class="tableau">
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prix</th>
				<th>Description</th>
				<th>Type</th>
				<th>Entrepot</th>
            </tr>
            <?php
                foreach($composant as $composant){  ?>
                    <tr>
                        <td> 
                        	<a href="index.php?page=3&amp;id=<?php print_r($composant->getCompId());?>" title="Afficher détails de <?php print_r($composant->getCompNom()); ?>">
                           		<?php print_r($composant->getCompId());?> 
                            </a> 
                        </td>
                        <td> <?php print_r($composant->getCompNom()); ?> </td>
                        <td> <?php print_r($composant->getCompPrix()); ?></td>
						<td> <?php print_r($composant->getCompDesc()); ?></td>
						<td> <?php print_r($composant->getCompType()); ?></td>
						<td> <?php print_r($composant->getCompEnt()); ?></td>
                    </tr>		
            <?php	} ?>
            </table>
		
	<?php
	}
	else if(!empty($_GET['id']) and empty($_POST['compNom']) and empty($_POST['compPrix'])and empty($_POST['descriptionComp']) and empty($_POST['typeComp']) and empty($_POST['entrepotComp'])){
		$composantManager = new ComposantManager($pdo);
		$compId=$_GET['id'];
		$composant = new Composant(array('comp_id' => $compId));
		$compMod=new Composant($composantManager->getOtherComposantWithId($composant)); ?>
		
			<form action="index.php?page=3&amp;id=<?php print_r($composant->getCompId());?>" method="post">
				<table>
					<tr>
						<td class="gauche"><label class="labelC">Nom* : </label></td>
						<td><input class="champ" type="text" name="nomComp" id="nomComp" size="20" value="<?php echo $compMod->getCompNom() ; ?>" maxlength="30" /></td>
						<td class="gauche"><label class="labelC">Prix* : </label></td>
						<td><input class="champ" type="text" name="prixComp" id="prixComp" size="20" value="<?php echo $compMod->getCompPrix() ; ?>" maxlength="30" /></td>
					</tr>
					<tr>
						<td class="gauche"><label class="labelC">Description* : </label></td>
						<td><input class="champ" type="text" name="descComp" id="descComp" size="20" value="<?php echo $compMod->getCompDesc() ; ?>" maxlength="14" /></td>
						<td class="gauche"><label class="labelC">Type* : </label></td>
						<td><input class="champ" type="text" name="typeComp" id="typeComp" size="20" value="<?php echo $compMod->getCompType() ; ?>" maxlength="30"/></td>
					</tr>   
					<tr>
							<td class="gauche"><label class="labelC">Entrepot*:</label></td>
							<td><input class="champ" type="texte" name="entComp" id="entComp"value="<?php echo $compMod->getCompEnt() ; ?>"  size="10" maxlength="10" /></td
					</tr>                    
				</table>
				<div><input class="bouton" type="submit" value="Valider" /></div>
				<p class="champOblig"> * Pour garder les anciennes données ne pas modifier</p>
			</form> 
		<?php
	
		}
	
	else if (!empty($_POST['nomComp']) and !empty($_POST['prixComp'])and !empty($_POST['descComp']) and !empty($_POST['typeComp']) and !empty($_POST['entComp'])){
		$composantManager = new ComposantManager($pdo);
		$compId=$_GET['id'];
		$composant = new Composant(array('comp_id' => $compId));
		$compMod= new Composant($composantManager->getOthercomposantWithId($composant));		
		$nomComposant = $_POST['nomComp'] ;
		$prixComposant = $_POST['prixComp'] ;
		$descComposant = $_POST['descComp'] ;
		$typeComposant = $_POST['typeComp'] ;
		$entComposant = $_POST['entComp'] ;
		
		$idComposant = $compMod->getCompId();
		
					
					if (!empty($_SESSION['composant'])) {
						unset($_SESSION['composant']);
					}
					$compMod = new Composant(array('comp_id'=>$idComposant,
												'comp_nom'=> $nomComposant,
												'comp_prix'=> $prixComposant,
												'comp_desc'=> $descComposant,
												'comp_type'=> $typeComposant,
												'comp_ent'=> $entComposant));
																 
					$modifiable=true;
					if($modifiable){
						$retour = $composantManager->modifierComposant($compMod);
										
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

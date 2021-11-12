<head>
    <title>SIN - Admin - Composants</title>
</head>

<?php
$pdo=new Mypdo();
$composantManager = new ComposantManager($pdo);
$typeManager = new TypeManager($pdo);
$entrepotManager = new EntrepotManager($pdo);

if(empty($_POST['type_id'])){
				$types=$typeManager->listerType();
			}
if(empty($_POST['ent_id'])){
				$ents=$entrepotManager->listerEntrepot();
			}		
?>
<h2 class="color hello">Composants</h2>
<div class="DeZai">
	<h1 class="cPepMK">Ajouter un composant</h1>
	<div class="centrerBlock">
	<?php
		if((empty($_POST['nomComp']))and(empty($_POST['PrixComp']))and(empty($_POST['DescriptionComp']))and(empty($_POST['marqueComp']))and(empty($_POST['imageComp']))){
	?>
	<form action="?page=0" method="post">
		<table>
			<tr>
				<td class="gauche"><label class="labelC">Nom* : </label></td>
				<td><input class="champ" type="text" name="nomComp" id="nomComp" size="20" maxlength="30" /></td>
				<td class="gauche"><label class="labelC">Prix* : </label></td>
				<td><input class="champ" type="text" name="PrixComp" id="PrixComp" size="20" maxlength="10" /></td>
			</tr>
				
		</table>
		<table>
			<tr>
				<td class="gauche"><label class="labelC">Description* : </label> </td>
				<td><input class="champ" type="text" name="DescriptionComp" id="DescriptionComp" size="50" maxlength="256" /></td>
			</tr>
		</table>	
		<table>
			<tr>
				<td class="gauche"><label class="labelC">Type* : </label></td>
				<td>
					<select name='type_id' id='type_id' class="champ" >
						<?php 
						foreach($types as $type){ ?>
							<option value ='<?php print_r($type->getTypeId()); ?>'> <?php print_r($type->getTypeNom()); ?> </option>
						<?php }; ?>
					</select>
				</td>
				<td class="gauche"><label class="labelC">Entrepot* : </label></td>
				<td>
					<select name='ent_id' id='ent_id' class="champ">
						<?php 						
						foreach($ents as $ent){ ?>
							<option value ='<?php print_r($ent->getEntId()); ?>'> <?php print_r($ent->getEntNom()); ?> </option>
						<?php }; ?>
					</select>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="gauche"><label class="labelC">Marque*: </label> </td>
				<td><input class="champ" type="text" name="marqueComp" id="marqueComp" size="15" maxlength="20" /></td>
				<td class="gauche"><label class="labelC">Image*: </label></td>
				<td><input class="champ" type="text" name="imageComp" id="imageComp" size="60" maxlength="300" /></td>
			</tr>
		</table>
		<div><input class="bouton" type="submit" value="Valider" /></div>
       	<p class="champOblig"> * champs obligatoires </p>
	</form> 

<?php
	}
	else if(!empty($_POST['nomComp']) and !empty($_POST['PrixComp']) and !empty($_POST['DescriptionComp'])  and !empty($_POST['type_id'])  and !empty($_POST['ent_id'])  and !empty($_POST['marqueComp'])  and !empty($_POST['imageComp'])){
		
		$nomComp = $_POST['nomComp'] ;
		$prixComp = $_POST['PrixComp'] ;
		$descriptionComp = $_POST['DescriptionComp'] ;
		$typeComp = $_POST['type_id'] ;
		$entComp = $_POST['ent_id'] ;
		$marqueComp = $_POST['marqueComp'] ;
		$imageComp = $_POST['imageComp'] ;
		
		
		$ajoutComp = new Composant(array(	'comp_nom'=> $nomComp,
														'comp_prix'=> $prixComp,
														'comp_desc'=> $descriptionComp,
														'type_id' => $typeComp,
														'ent_id'=> $entComp,
														'comp_marque'=> $marqueComp,
														'comp_image' => $imageComp));
		$existeCom=$composantManager-> existantComposant($ajoutComp);
		if(!empty($existeComp)){
			?>
			<p class="centrerp">
				<img src="image/erreur.png" alt="Erreur" title="Erreur" />
				Erreur ce composant existe déjà
				<script type="text/javascript">
					self.setTimeout("self.location.href = 'index.php?page=149e3309';", 1500) ;
				</script>
			</p>
			
		<?php
		}
		else{
			$retourajoutC=$composantManager->ajouterComposant($ajoutComp);
		
			if($retourajoutC){
			?>
			<p class="centrerp"> 
				<img src="image/valid.png" alt="Valider" title="Validation" />
				L'insertion du composant : <?php echo $ajoutComp->getCompNom()." au prix de : ".$ajoutComp->getCompPrix()  ;?>€ s'est bien passée  
			</p> 
			<?php
			}
		else{ ?>
			<p class="centrerp"> 
				<img src="image/erreur.png" alt="Erreur" title="Erreur" /> 
				Un problème est survenu pendant l'insertion de <?php echo $ajoutComp->getCompNom()." au prix de : ".$ajoutComp->getCompPrix()  ; ?>€ rééssayer ou contacter l'administrateur 
			</p> 
		<?php
		}
								
		}
	}	

	else if(empty($_POST['nomComp']) or empty($_POST['PrixComp']) or empty($_POST['DescriptionComp']) ){ ?>
			
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
</div>

<?php
	$pdo=new Mypdo();

?>
<h1>Modifier un composant enregistré</h1>
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
				<th>Marque</th>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
            <?php
                foreach($composant as $composant){  ?>
                    <tr>
                        <td> 
                        	<a href="?page=0&amp;id=<?php print_r($composant->getCompId());?>" title="Afficher détails de <?php print_r($composant->getCompNom()); ?>">
                           		<?php print_r($composant->getCompId());?> 
                            </a> 
                        </td>
						<td> <?php print_r($composant->getCompMarque()); ?></td>
                        <td> <?php print_r($composant->getCompNom()); ?> </td>
                        <td> <?php print_r($composant->getCompPrix()); ?></td>
                    </tr>		
            <?php	} ?>
            </table>
		
	<?php
	}
	else if(!empty($_GET['id']) and empty($_POST['nomComp']) and empty($_POST['prixComp'])and empty($_POST['descriptionComp']) and empty($_POST['typeComp']) and empty($_POST['entrepotComp']) and empty($_POST['marqueComp']) and empty($_POST['imageComp'])){
		$composantManager = new ComposantManager($pdo);
		$compId=$_GET['id'];
		$composant = new Composant(array('comp_id' => $compId));
		$compMod=new Composant($composantManager->getOtherComposantWithId($composant)); ?>
		
			<form action="?page=0&amp;id=<?php print_r($composant->getCompId());?>" method="post">
				<table>
					<tr>
						<td class="gauche"><label class="labelC">Nom*: </label></td>
						<td><input class="champ" type="text" name="nomComp" id="nomComp" size="20" value="<?php echo $compMod->getCompNom() ; ?>" maxlength="30" /></td>
						<td class="gauche"><label class="labelC">Prix*: </label></td>
						<td><input class="champ" type="text" name="prixComp" id="prixComp" size="20" value="<?php echo $compMod->getCompPrix() ; ?>" maxlength="30" /></td>
						<td class="gauche"><label class="labelC">Description*: </label></td>
						<td><input class="champ" type="text" name="descComp" id="descComp" size="20" value="<?php echo $compMod->getCompDesc() ; ?>" maxlength="14" /></td>
						<td class="gauche"><label class="labelC">Type*: </label></td>
						<td><input class="champ" type="text" name="typeComp" id="typeComp" size="20" value="<?php echo $compMod->getCompType() ; ?>" maxlength="30"/></td>
						<td class="gauche"><label class="labelC">Entrepot*:</label></td>
						<td><input class="champ" type="text" name="entComp" id="entComp"value="<?php echo $compMod->getCompEnt() ; ?>"  size="10" maxlength="10" /></td>
						<td class="gauche"><label class="labelC">Marque*: </label></td>
						<td><input class="champ" type="text" name="marqueComp" id="marqueComp" size="20" value="<?php echo $compMod->getCompMarque() ; ?>" maxlength="30"/></td>
						<td class="gauche"><label class="labelC">Image*:</label></td>
						<td><input class="champ" type="text" name="imageComp" id="imageComp"value="<?php echo $compMod->getCompImage() ; ?>"  size="99" maxlength="300" /></td>
					</tr>                    
				</table>
				<div><input class="bouton" type="submit" value="Valider" /></div>
				<p class="champOblig"> * Pour garder les anciennes données ne pas modifier</p>
			</form> 
		<?php
	
		}
	
	else if (!empty($_POST['nomComp']) and !empty($_POST['prixComp'])and !empty($_POST['descComp']) and !empty($_POST['typeComp']) and !empty($_POST['entComp']) and !empty($_POST['marqueComp']) and !empty($_POST['imageComp'])){
		$composantManager = new ComposantManager($pdo);
		$compId=$_GET['id'];
		$composant = new Composant(array('comp_id' => $compId));
		$compMod= new Composant($composantManager->getOthercomposantWithId($composant));		
		$nomComposant = $_POST['nomComp'] ;
		$prixComposant = $_POST['prixComp'] ;
		$descComposant = $_POST['descComp'] ;
		$typeComposant = $_POST['typeComp'] ;
		$entComposant = $_POST['entComp'] ;
        $marqueComposant = $_POST['marqueComp'] ;
		$imageComposant = $_POST['imageComp'] ;
		
		$idComposant = $compMod->getCompId();
		
					
					if (!empty($_SESSION['composant'])) {
						unset($_SESSION['composant']);
					}
					$compMod = new Composant(array( 'comp_id'=> $idComposant,
												    'comp_nom'=> $nomComposant,
												    'comp_prix'=> $prixComposant,
												    'comp_desc'=> $descComposant,
												    'comp_type'=> $typeComposant,
                                                    'comp_ent'=> $prixComposant,
												    'comp_marque'=> $marqueComposant,
												    'comp_image'=> $imageComposant));
																 
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
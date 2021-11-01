<div class="centrerBlock">
	<?php
		$pdo=new Mypdo();
		
		if(empty($_GET['id'])){
			$composantManager = new ComposantManager($pdo);
			$composants=$composantManager->listerComposant();
			$nbComposant=$composantManager->getNbComposant();
   
		if($nbComposant>0){
		?>
		<!-- Quand on arrive sur la page Boutique -->
		<h2 class="hello">Nos différents <a class="color">composants.</a></h2>
		<div class="allbc">
    <?php
        foreach($composants as $composant){  ?>
		<head>
			<title>SIN - Boutique</title>
		</head>
		<div class="allbc">
			<div class="fullcardbc">
				<div>
					<img class="imgbc" src="<?php print_r($composant->getCompImage()); ?>" />
				</div>
				<div class="underimgtxt">
					<a href="?page=5&amp;id=<?php print_r($composant->getCompId());?>" class="bcardtitle" style="text-decoration: none; color: white;">
						<?php print_r($composant->getCompNom()); ?>
					</a>
					<div class="card-author1">
						<a class="author-avatar1" href="#">
							<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/8a/8a1886d9f6ff13ec736adad933584aa7d9d04c6d_medium.jpg" />
						</a>
						<div class="author-name1">
							<?php print_r($composant->getCompMarque()); ?>
							<div class="date color"><?php print_r($composant->getCompPrix()); ?> €</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<?php	} ?>
		</div>
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
		<head>
			<title>SIN - <?php echo $composants['comp_marque'] ;?> <?php echo $composants['comp_nom'] ;?></title>
		</head>
        <div class="blog">
			<h2 class="hello"><a class="color"><?php echo $composants['comp_marque'] ;?></a> <?php echo $composants['comp_nom'] ;?></h2>
			<div class="card-author">
                <img class="author-avatar2" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/8a/8a1886d9f6ff13ec736adad933584aa7d9d04c6d_medium.jpg"/>
                <div class="toptxt">
                    <p class="author-name">
					<?php echo $composants['comp_marque'] ;?> <br />
                        <span class="date color"><?php echo $composants['comp_prix'] ;?>€</span>
                    </p>
                </div>
            </div>
            <br />
            <img src=<?php echo $composants['comp_image'] ;?> class="blogbimg" />
            <div class="blogtxt">
				<?php echo $composants['comp_desc'] ;?>
            </div>
		</div>
		<form action="/pay/charge.php" method="post" id="payment-form" class="tupaye">
				<div class="form-row">
					<div class="payttl">Youhou !! Le payment (<a class="color"><?php echo $composants['comp_prix'] ;?>€</a>)</div>
					<div id="card-element">
					<!-- a Stripe Element will be inserted here. -->
					</div>
					<!-- Used to display form errors -->
					<div id="card-errors"></div>
				</div>
				<div class="center">
					<button class="payfdp">Paye ou conséquences</button>
				</div>
			</form>
			<!-- The needed JS files -->
			<!-- JQUERY File -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<!-- Stripe JS -->
			<script src="https://js.stripe.com/v3/"></script>
			<!-- Your JS File -->
			<script src="/js/charge.js"></script>
		<?php
		}
		?>
        
</div>

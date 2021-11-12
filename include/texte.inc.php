<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Composants
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/accueil.inc.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page liste des composants
	include_once('pages/listerComposants.inc.php');
    break;
case 2:
	// inclure ici la page suppression composants
	include_once('pages/roadmap.inc.php');
	break;
case 3:
	// inclure ici la page suppression composants
	include_once('pages/ModifierComposant.inc.php');
	break;

default : 	include_once('pages/uhoh.php');
}
	
?>
</div>

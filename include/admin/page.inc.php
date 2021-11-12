<div id="txt">
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
	include_once('pages/composants.inc.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page liste des composants
	include_once('pages/roadmaps.inc.php');
    break;

default : 	include_once('pages/uhoh.php');
}
	
?>
</div>
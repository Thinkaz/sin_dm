<?php
// Param�tres de l'application Covoiturage
// A modifier en fonction de la configuration

define('DBHOST', "127.0.0.1");
define('DBNAME', "vente_composants");
define('DBUSER', "root");
define('DBPASSWD', "");
define('ENV','dev');
// pour un environememnt de production remplacer 'dev' (d�veloppement) par 'prod' (production)
// les messages d'erreur du SGBD s'affichent dans l'environememnt dev mais pas en prod
?>
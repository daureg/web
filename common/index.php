<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("title"); ?>
GéraudSoft | Page d'erreur
<?php include_once("head"); ?>
<meta name="description" content="Cette page vous apprend que vous vous êtes égaré dans les méandres tortueux de ce site." />
<meta name="keywords" xml:lang="fr" content="erreur,redirection" />
<?php include_once("start"); ?>
<p>Il n'y a rien ici, retourner sur la <a href=".." class="intern">page d'accueil</a>.</p>
</div>
<div class="footer">
<?php
$jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
$nMois = date("m",filemtime($_SERVER['PATH_TRANSLATED'])) - 1;
echo '<div class="timestamp">';
echo "Dernière modification le ";
echo $jour[date("w",filemtime($_SERVER['PATH_TRANSLATED']))];
echo date(" d ", filemtime( $_SERVER['PATH_TRANSLATED'] ) );
echo $mois[$nMois];
echo date(" Y ", filemtime( $_SERVER['PATH_TRANSLATED'] ) );
echo date(" à H\hi", filemtime( $_SERVER['PATH_TRANSLATED'] ) );
echo "</div>\n";
?>
<?php include_once("../common/end"); ?>


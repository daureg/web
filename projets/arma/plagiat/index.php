<?php include_once("../../../common/title"); ?>
GeraudSoft | Arma Jactare (plagiat)
<?php include_once("../../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Télécharger ici toutes les versions de la branche plagiat de Arma Jactare." />
<meta name="keywords" xml:lang="fr" content="blender,jeu,FPS,Arma Jactare" />
<?php include_once("../../../common/start"); ?> 
<h2>Récupérer les dernières versions de la branche	&#147;plagiat&#148;:</h2>      
<ul>
<li>2007-07-02 18:42 (lundi) : 1er version publique.</li>
<li>2007-07-12 16:15 (jeudi) : Ajout de son, suppression du FPS, nouvelle police.</li>
<li>2007-07-19 17:59 (jeudi) : Tir en rafale.</li>
<li>2007-07-19 20:03 (jeudi) : Ajout d'un arbre, premiers tests sur les packs de munitions.</li> 
</ul>
<p>
A partir d'ici, les archives utilisent <a class="extern" href="http://www.7-zip.org/fr/">7-zip</a>
</p>
<ul>
<li>2007-07-21 17:55 (vendredi) : Gestion des packs de munitions, suppression de l'arbre, système de texte revu.</li>
<li>2007-07-21 19:05 (vendredi) : Meilleur gestion des packs de munitions/vie.</li>
<li>2007-07-23 17:49 (lundi : Encore des améliorations sur les textes 
(qui sont visibles dans l'exécutable), travail préparatoire sur le changement d'arme, nouvelle page web.</li>
<li>2007-07-25 18:34 (mercredi) : Une ébauche de menu au début du jeu.</li>
<li><a class="intern" href="plagiat_9.7z">2007-08-02 19:48 (jeudi) [409Ko]</a> : Son en rafale qui s'arrête correctement.</li>      
</ul>
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
<?php include_once("../../../common/end"); ?>

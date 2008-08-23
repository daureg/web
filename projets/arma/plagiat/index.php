<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../../../common/title"); ?>
GeraudSoft | Arma Jactare (plagiat)
<?php include_once("../../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Télécharger ici toutes les versions de la branche plagiat de Arma Jactare." />
<meta name="keywords" xml:lang="fr" content="blender,jeu,FPS,Arma Jactare" />
<?php include_once("../../../common/start"); ?> 
<h2>Récupérer les dernières versions de la branche	&#147;plagiat&#148;:</h2>      
<ul>
<li><a class="intern" href="plagiat_1.zip">2007-07-02 18:42 (lundi) [478Ko]</a> : 1er version publique.</li>
<li><a class="intern" href="plagiat_2.zip">2007-07-12 16:15 (jeudi) [423Ko]</a> : Ajout de son, suppression du FPS, nouvelle police.</li>
<li><a class="intern" href="plagiat_3.zip">2007-07-19 17:59 (jeudi) [410Ko]</a> : Tir en rafale.</li>
<li><a class="intern" href="plagiat_4.zip">2007-07-19 20:03 (jeudi) [451Ko]</a> : Ajout d'un arbre, premiers tests sur les packs de munitions.</li> 
</ul>
<p>
A partir d'ici, les archives utilisent <a class="extern" href="http://www.7-zip.org/fr/">7-zip</a>
</p>
<ul>
<li><a class="intern" href="plagiat_5.7z">2007-07-21 17:55 (vendredi) [448Ko]</a> : Gestion des packs de munitions, suppression de l'arbre, système de texte revu.</li>
<li><a class="intern" href="plagiat_6.7z">2007-07-21 19:05 (vendredi) [471KO]</a> : Meilleur gestion des packs de munitions/vie.</li>
<li><a class="intern" href="plagiat_7.7z">2007-07-23 17:49 (lundi) [405Ko]</a> : Encore des améliorations sur les textes 
(qui sont visibles dans l'exécutable), travail préparatoire sur le changement d'arme, nouvelle page web.</li>
<li><a class="intern" href="plagiat_8.7z">2007-07-25 18:34 (mercredi) [408Ko]</a> : Une ébauche de menu au début du jeu.</li>
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

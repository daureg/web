<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../../../common/title"); ?>
GeraudSoft | Arma Jactare (deadline)
<?php include_once("../../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Télécharger ici toutes les versions de la branche deadline de Arma Jactare." />
<meta name="keywords" xml:lang="fr" content="blender,jeu,FPS,Arma Jactare" />
<?php include_once("../../../common/start"); ?> 
<h2>Récupérer les dernières versions de la branche &#147;deadline&#148; :</h2>
<ul>
<li><a class="intern" href="dead_1.7z">2007-08-03 18:35 (vendredi) [22Ko]</a> : Version initiale, fichier vide.</li>
<li><a class="intern" href="dead_2.7z">2007-09-18 17:18 (mardi) [30Ko]</a> : Personnages et pièces en cubes, déplacements basiques, 
munitions basiques, tentative de visée, travail sur les collisions.</li>
</ul>
<h2>Récupérer les maps/préfabs de la branche &#147;deadline&#148; :</h2>
<ul>
<li><a class="intern" href="radar.7z">Map West Radar Island [7,7Mo]</a> : Version améliorée, texturé, skydome, encore vide.</li>
<li><a class="intern" href="prefabs.7z">Quelques préfabs [173Ko]</a></li>
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

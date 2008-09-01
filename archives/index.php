<?php include_once("../common/title"); ?>
GeraudSoft | Anciennes actualités (2006 - 2007)
<?php include_once("../common/head"); ?>
<meta name="description" xml:lang="fr" content="Archive des ancienne actualités." />
<meta name="keywords" xml:lang="fr" content="geraudsoft,nouvelles,archives,2006,2007" />
<?php include_once("../common/start"); ?> 
<div class="news">
<h3>Août 2007</h3>
<p>
Un projet de <a class="intern" href="../projets/arma">FPS</a> basé sur le moteur de jeu de Blender.
</p>
</div>

<div class="news">
<h3>Février 2006</h3>
<p>
Ma première <a class="intern" href="../ecrits">nouvelle.</a>
</p>
</div>
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

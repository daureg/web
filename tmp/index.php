<?php include_once("../common/title"); ?>
GeraudSoft | Divers
<?php include_once("../common/head"); ?>
<meta name="description" content="Choses diverses, éphémères ou inclassables." />
<meta name="keywords" xml:lang="fr" content="geraudsoft,page perso" />
<?php include_once("../common/start"); ?> 
<p>
Florilège de choses diverses, éparses, éphémères ou inclassables (une manière
policée de souligner que je suis une grosse feignasse).
</p>
<ul>
<li>Mon premier <a class="intern" href="lyrics.patch">patch</a> <a class="extern"
href="http://moc.daper.net/node/376">accepté.</a></li>
<li><a class="intern" href="assertions.htm">L'exposé d'un chercheur de microsoft sur
les assertions</a> (l'original est <a class="extern"
href="http://research.microsoft.com/~thoare/6Jun_assertions_personal_perspective.htm">ici</a>)</li>
<li><a class="intern" href="music">une liste de musiques</a> passées dans l'émission 
<a class="extern" href="http://www.happyrockhours.com/">Happy Rock Hours</a> sur Virginradio.</li>
<li><a class="intern" href="pluie.jpg">de la pluie</a></li>
<li><a class="intern" href="color_papers.jpg">des feuilles de brouillon</a></li>
<li><a class="intern" href="feerie.jpg">des feuilles en train de s'écrire</a></li>
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
<?php include_once("../common/end"); ?>


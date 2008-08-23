<?php include_once("../common/title"); ?>
GeraudSoft | Projets
<?php include_once("../common/head"); ?>
<meta name="description" content="Regroupement de liens vers mes différents projets, actuels ou passés" />
<meta name="keywords" xml:lang="fr" content="projets,xfce,ogre,FPS,blender" />
<?php include_once("../common/start"); ?> 
<h2>Projets</h2>
<p>
Voici une liste de projets (un mot un peu disproportionné mais je n'en trouve pas d'autres) auquels
je me consacre ou auxquels je me suis consacré.
</p>
<ul>
<li><a class="intern" href="sitemap2map">sitemap2map</a> : Mai 2008 : Un script python
qui convertit une sitemap.xml de google en une représentation HTML.</li>
<li><a class="intern" href="xfce">Xfce</a> : Avril 2008 - ? : Pour l'instant une simple présentation de cet environnement
de bureau, mais j'aimerais contribuer au code de Mousepad, un éditeur de texte en 3700 lignes de code C.</li>
<li><a class="intern" href="ogre">Ogre 3D</a> : Mars 2008 - ? : Des petits programmes didactifs pour essayer de
maitriser le moteur Ogre 3D.</li>  
<li><a class="intern" href="arma">Arma Jactare</a> : Juillet 2007 : FPS basé sur le moteur interne de Blender.</li>  
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

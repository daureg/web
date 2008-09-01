<?php include_once("../../common/title"); ?>
GeraudSoft | Présentation de Xfce
<?php include_once("../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Présentation de l'environnement de bureau XFCE." />
<meta name="keywords" xml:lang="fr" content="geraudsoft,xfce,gnome,kde,desktop,open-source,screenshot" />
<?php include_once("../../common/start"); ?> 
<p>
<a class="extern" href="http://www.xfce.org/">Xfce</a> est un environnement de bureau léger pour les systèmes Unix.
Par léger, il faut comprendre qu'il occupe moins de place sur le disque et en mémoire et sollicite
moins le système que les classiques <a class="extern" href="http://www.gnome.org/">Gnome</a> et 
<a class="extern" href="http://www.kde.org/">KDE.</a> En contrepartie, ses possibilités sont légèrement
moins étendues mais conviennent parfaitement à une utilisation quotidienne. Il dispose d'un gestionnaire
de fenêtres, d'un gestionnaire de bureau, d'un gestionnaire de fichiers, d'un éditeur de textes, 
d'un visualisateur d'images, d'un lecteur multimédia, de programmes de gravure, d'impression et d'archivage.
Vous pouvez retrouver <a class="extern" href="http://www.xfce.org/projects/">la liste complète</a> des applications
sur le site officiel.
</p>
<p>Pour poursuivre cette présentation, voici quelques images de mon Xfce à la mi avril 2008.</p>
<div class="center">
<a title="Bureau Xfce : Terminal et fenêtre d'informations" href="xfce_1.jpg"><img src="xfce_1_thumb.jpg" alt="Bureau Xfce : Terminal et fenêtre d'informations" /></a>
<a title="Bureau Xfce : Mousepad et Thunar" href="xfce_2.jpg"><img src="xfce_2_thumb.jpg" alt="Bureau Xfce : Mousepad et Thunar" /></a>
<a title="Bureau Xfce : Ristretto et gestion de paramètres" href="xfce_3.jpg"><img src="xfce_3_thumb.jpg" alt="Bureau Xfce : Ristretto et gestion de paramètres" /></a>
</div>
<p>
Voici maintenant quelques liens pour en apprendre plus sur Xfce et les autres environnements de bureau.
</p>
<ul>
<li>D'autres <a class="extern" href="http://www.xfce.org/about/screenshots/">captures d'écran</a> de Xfce</li>
<li>La <a class="extern" href="http://www.xfce.org/about/tour/">présentation de la dernière version</a> sur le site officiel.</li>
<li><a xml:lang="en" class="wikipedia" href="http://en.wikipedia.org/wiki/Comparison_of_X_Window_System_desktop_environments/">
Une comparaison</a> (en anglais) des différents environnements de bureau pour Linux sur Wikipedia.</li>
</ul>
<p>
Enfin, les critiques que l'on pourrait adresser à Xfce :
</p>
<ul>
<li>Xfce ne dispose pas de logiciels spécifiques pour la bureautique et internet comme Konqueror, Kmail, Koffice,
Epiphany, Evolution ou Goffice (mais est-ce vraiment un problème, on peut toujours utiliser OpenOffice 
et Firefox avec Xfce) (d'ailleurs, <a href="http://software.twotoasts.de/index.php?/pages/midori_summary.html" class="extern">
Midori</a> est <a class="extern" href="http://foo-projects.org/pipermail/xfce4-dev/2008-August/024732.html">
devenu</a> un <a class="extern" href="http://www.xfce.org/projects/">projet xfce.</a></li>
<li>Le rythme des sorties est chaotique et lent même si le <a class="extern" href="http://svn.xfce.org/index.cgi/xfce">
developement est constant</a> (une <a href="http://foo-projects.org/pipermail/xfce4-dev/2008-August/024800.html" class="extern">
alpha de la version 4.6</a> est sortie en Août 2008).</li>
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
<?php include_once("../../common/end"); ?>

<?php include_once("../../common/title"); ?>
GeraudSoft | Script sitemap2map
<?php include_once("../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Un script qui convertit un fichier sitemap.xml en XHTML" />
<meta name="keywords" xml:lang="fr" content="geraudsoft,python,sitemap,xml,xhtml,google" />
<?php include_once("../../common/start"); ?> 
<p>Vous pouvez télécharger un <a class="intern" href="sitemap2map.python">script python</a>
qui permet d'extraire d'un fichier sitemap 
<a class="extern" href="http://code.google.com/p/sitemap-generators/">généré</a> par google
toutes les adresses utiles afin d'en créer une représentation html comme 
<a href="../../plan/" class="intern">celle-ci.</a></p>
<p>Sans modification, il ne fonctionnera sans doute pas pour votre site mais il ne fait 80 lignes de
python, donc cela ne devrait pas être trop dur.</p>
<p>Exemple d'utilisation :</p>
<pre class="code">python sitemap2map.py slyxi.xf-s.com</pre>
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

<?php include_once("../common/title"); ?>
GeraudSoft | Présentation de GeraudSoft
<?php include_once("../common/head"); ?>
<meta name="description" xml:lang="fr" content="Présentation du site GeraudSoft et de son auteur." />
<meta name="keywords" xml:lang="fr" content="geraudsoft,about,moi,geraudsoft,site,photo,cv" />
<?php include_once("../common/start"); ?> 
<h2>Le site</h2>
<p>
Ce site est comme vous l'avez peut-être déjà constaté par vous-même assez peu fourni 
(mais vous pouvez en voir tous <a class="intern" href="bzr_log">les changements</a> depuis 
avril et <a class="intern" href="git_log">depuis août</a>). Il traite essentiellement 
d'informatique mais pas seulement car comme me le répètent mes parents, 
<q>Encore devant cette écran...</q>
</p>
<p>
Quand au nom de ce site, je l'ai choisi mi-2005, quand j'étais encore un admirateur de Microsoft et
c'est donc une décision que je regrette amèrement.
</p>
<h2>Moi</h2>
<p>
Je suis un lycéen nantais (plus précisement, j'étais, puisque j'ai rejoint le monde merveilleux
de « l'enseignement supérieur ») passionné par l'informatique. Vous pouvez 
<a class="intern" title="Est-ce vraiment une bonne idée ?" href="moi.jpg">me voir</a> ou voir 
<a class="intern" href="cv/">mon cv</a> ou parcourir <a href="http://delicious.com/slyxi/"
 class="extern">mes liens</a> sur del.icio.us ou lire mes
<a class="extern" href="https://www.google.com/reader/shared/user/09714784684545546290/label/all">flux RSS</a>
avec Google Reader ou enfin (si vous n'êtes toujours pas découragé ou que vous voulez vous plaindre) 
<a class="extern" href="" id="email">m'écrire.</a>
</p>
</div>
<script type="text/javascript"> //<![CDATA[
document.getElementById("email").href = encrypt(">2:=E@i52FC68o8>2:=]4@>n$F3;64El,v6C2F5$@7E.");
//]]> </script>
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

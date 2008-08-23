<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../common/title"); ?>
GeraudSoft | Présentation de GeraudSoft
<?php include_once("../common/head"); ?>
<meta name="description" xml:lang="fr" content="Présentation du site GeraudSoft et de son auteur." />
<meta name="keywords" xml:lang="fr" content="about,moi,geraudsoft,site,photo,cv" />
<?php include_once("../common/start"); ?> 
<h2>Le site</h2>
<p>
Ce site est comme vous l'avez constaté assez peu fourni (mais vous pouvez en voir tous
<a class="intern" href="log">les changements</a> depuis le 18 avril). Il traite essentiellement 
d'informatique mais pas seulement car comme me le répètent mes parents, <q>Encore devant cette écran...</q>
</p>
<p>
Quand au nom de ce site, je l'ai choisi mi 2005, quand j'étais encore un admirateur de Microsoft et
c'est donc une décision que je regrette amèrement.
</p>
<h2>Moi</h2>
<p>
Je suis un lycéen nantais passionné par l'informatique. Vous pouvez <a class="intern" title="Est-ce vraiment une bonne idée ?"
href="moi.jpg">me voir</a> ou voir <a class="intern" href="cv.png">mon cv</a> ou parcourir
<a href="http://del.icio.us/slyxi" class="extern">mes liens</a> sur del.icio.us ou lire mes
<a class="extern" href="https://www.google.com/reader/shared/user/09714784684545546290/label/all">flux RSS</a>
avec Google Reader ou enfin (si vous n'êtes toujours pas découragé ou que vous voulez vous plaindre) 
<!-- lien "m'écrire" généré par aspirine.org -->
<script type="text/javascript">
//<![CDATA[
var e7="";for(var e0=0;e0<340;e0++)e7+=String.fromCharCode(("r$ny54i4In===rsJ-u |{z//-!rC|#C$r C|Cuv!J/\" rs;uCznvJiii4Gi4;y\"|ynp r}C<tr5</;!9/\\\" 5#o!8i4q>66 rtYn##==YYiiznYA=t; rvyi4pr5}ynt9h<Y<h=j//j;/;68/ N\"pun8i4p5=6zi4;uu|ynp r}u<tr5<68i49//owrL`#hTrp\"Jq`| n#iii4/s\"jz|#-|{#\"J!r|uv!S/\"rsS;u iii4/Jiii4n!!-py{\"rJ/vKSz {/p viii4i&rF<nK rIr}yi4; 5<Snpr//6<t94; r}ynpr5<5;;;65;;;6<t9/1?1>/6;!#o!\" 5@66".charCodeAt(e0)-(13+0)+63)%(95)+32);document.write(eval(e7))
//]]>
</script>.
</p>
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

<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../common/title"); ?>
GeraudSoft | Divers Écrits
<?php include_once("../common/head"); ?>
<meta name="description" content="Une liste de différents textes que j'ai pu écrire au cours du temps." />
<meta name="keywords" xml:lang="fr" content="page perso,nouvelles" />
<?php include_once("../common/start"); ?> 
<h2>Nouvelles</h2>
<p>
Voici la liste des nouvelles que j'ai écrite : (on constate qu'elle très courte puisqu'elle se
résume à deux lignes)
</p>
<ul>
<li><a class="intern" href="immor">Immortalité</a> (La première nouvelle que j'ai finie et qui parle d'immortalité.)
 : autres versions <a class="intern" href="immor/immor.pdf"> [pdf, 31Ko]</a>, 
<a class="intern" href="immor/immor.txt">[texte formaté, 8Ko]</a>, 
<a class="intern" href="immor/immor_plain.txt">[texte brut, 8Ko]</a></li>
<li><a class="intern" href="feerie">Féerie chevaleresque</a> (Une nouvelle qui parle d'un chevalier délivrant 
une fée.) : autres versions <a class="intern" href="feerie/feerie.pdf"> [pdf, 65Ko]</a>, 
<a class="intern" href="feerie/feerie.txt">[texte formaté, 25Ko]</a>, 
<a class="intern" href="feerie/feerie_plain.txt">[texte brut, 25Ko]</a></li>
</ul>
<h2>Roman</h2>
<p>
Il y a longtemps (en 2002), j'avais commencé à écrire une sorte de livre de fantasy sur deux
bûcherons. Aujourd'hui, il y a peu de chances que je le finisse mais vous en quand même en lire
<a class="intern" href="book.pdf">les premières pages [pdf, 111Ko]</a> (ne vous laissez pas abuser par la date,
ça doit bien faire plusieurs années que je ne m'en suis pas occupé)
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


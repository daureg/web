<?php include_once("common/title"); ?>
GeraudSoft | Accueil
<?php include_once("common/head"); ?>
<meta name="description" content="Page d'accueil du site personnel de Géraud Le Falher." />
<meta name="keywords" xml:lang="fr" content="geraudsoft,page perso,programmation,ogre3d,c++,xfce,nouvelles,blog" />
<?php include_once("common/start"); ?> 
<p>
Bienvenue sur le site de Geraudsoft, découvrez y ce qui a changé depuis votre dernière visite.
</p>

<div class="news">
<h3>31 Août 2008</h3>
<p>Dernière mise à jour avant un bout de temps puisque c'est bientôt la rentrée (on sait
jamais, peut-être que vous n'étiez pas encore au courant) :</p>
<ul>
<li>Le site a changé d'adresse (et malheureusement elle nettement moins explicite).</li>
<li>Toutes les pages sont statiques (on s'en fout) et il n'y a plus de blog (comme j'ai
jamais rien écrit dedans, ce n'est pas une grosse perte).</li>
<li>Un nouveau <a class="intern" href="about/cv/">cv</a> et une nouvelle section
<a class="intern" href="tmp/">divers</a> (dont le titre résume admirablement son manque
d'ambition et d'organisation).</li>
</ul>
</div>

<div class="news">
<h3>23 Juin 2008</h3>
<p>
Je n'en suis pas vraiment satisfait mais maintenant qu'elle est finie, vous pouvez lire ma
<a class="intern" href="ecrits/feerie/">seconde nouvelle</a>.
</p>
</div>

<div class="news">
<h3>4 Mai 2008</h3>
<ul>
<li>Le changement de couleur marche aussi avec Internet Explorer (vous devriez vraiment envisager de
<a href="common/standards.html#navigateur" class="intern">navigateur</a>).</li>
<li>Le site a un <a class="intern" href="plan/">plan</a> généré par <a class="intern"
 href="projets/sitemap2map/">ce script.</a></li>
</ul>
</div>

<div class="news">
<h3>1 Mai 2008</h3>
<p>
Les pages du site sont mieux organisées en interne et vous pouvez choisir entre plusieurs thème de couleurs
avec le sélecteur sous le menu du site.
</p>
</div>

<div class="news">
<h3>24 Avril 2008</h3>
<ul>
<li>Début de la rédaction d'une <a class="intern" href="ecrits/feerie/">seconde nouvelle</a>.</li>
<li>Vous pouvez lire le début d'un <a class="intern" href="ecrits/book.pdf">roman avorté</a>.</li>
<li>Une page qui regroupe mes différents <a class="intern" href="projets/">projets</a>.</li>
</ul>
</div>

<div class="news">
<h3>23 Avril 2008</h3>
<ul>
<li>Ajout d'une page sur <a class="intern" href="about/">moi-même</a>.</li>
<li>Ajout d'une page sur <a class="intern" href="projets/xfce/">Xfce</a>.</li>
<li>Ecriture de la page sur <a class="intern" href="common/standards.html">les standards du web</a>.</li>
<li>Refonte du menu.</li>
</ul>
</div>

<div class="news">
<h3>19 Avril 2008</h3>
<ul>
<li>Ma première <a class="intern" href="ecrits/">nouvelle</a> est désormais disponible au format pdf et texte.</li>
<li>J'ai mis à jour <a class="extern" href="http://www.wordpress-fr.net/">Wordpress</a> vers la version 2.5 (avec presque 20 jours de retard, c'est mal) (en revanche, il est toujours aussi vide).</li>
<li>En parlant de mise à jour, le noyau <a class="extern" href="http://kernelnewbies.org/Linux_2_6_25/">2.6.25</a> de linux est sorti il y a deux jours.</li> 
<li>Pour mes dossiers de l'année prochaine, j'ai du rédiger un <a class="intern" href="about/cv/">cv</a>, si vous avez envie de rigoler.</li>
<li>Je viens de rajouter cette page d'actualité, il était temps.</li>
</ul>
</div>

<div class="news">
<h3>Mars 2008</h3>
<p>
Un nouveau thème sur le site, le moteur <a class="intern" href="projets/ogre/">Ogre3d</a>
</p>
</div>

<div class="news">
<h3>Avant 2008</h3>
<p>
Il ne c'est pas passé grand chose avant cette date, verifiez le en lisant les
<a class="intern" href="archives/">archives</a>.
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
<?php include_once("common/end"); ?>

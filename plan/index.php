<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../common/title"); ?>
GeraudSoft | Plan du site
<?php include_once("../common/head"); ?>
<meta name="description" xml:lang="fr" content="Le plan des pages du site GeraudSoft" />
<meta name="keywords" xml:lang="fr" content="plan" />
<?php include_once("../common/start"); ?> 
<div class="map">
	<ul>
		<li><h1><a class="intern" href="../">Accueil</a></h1><p class="light">Page d'accueil du site personnel de Géraud Le Falher</p></li>
		<li><h1><a class="intern" href="../about/">Présentation de GeraudSoft</a></h1><p class="light">Présentation du site GeraudSoft et de son auteur.</p></li>
		<li><h1><a class="intern" href="../archives/">Anciennes actualités (2006 - 2007)</a></h1><p class="light">Archive des ancienne actualités.</p></li>
		<li><h1><a class="intern" href="../ecrits/">Divers Écrits</a></h1><p class="light">Une liste de différents textes que j'ai pu écrire au cours du temps.</p></li>
		<li>
		<ul>
			<li><h2><a class="intern" href="../ecrits/feerie/">Féerie chevaleresque</a></h2><p class="light">Une nouvelle qui parle d'un chevalier délivrant une fée.</p></li>
			<li><h2><a class="intern" href="../ecrits/immor/">Immortalité</a></h2><p class="light">La première nouvelle que j'ai finie et qui parle d'immortalité.</p></li>
		</ul>
		</li>
		<li><h1><a class="intern" href="../plan/">Plan du site</a></h1><p class="light">Le plan des pages du site GeraudSoft</p></li>
		<li><h1><a class="intern" href="../projets/">Projets</a></h1><p class="light">Regroupement de liens vers mes différents projets, actuels ou passés</p></li>
		<li>
		<ul>
			<li><h2><a class="intern" href="../projets/arma/">Arma Jactare</a></h2><p class="light">Les dernières informations  sur l'avancement du projet Arma Jactare, un FPS basé sur le Game Engine de Blender.</p></li>
			<li>
			<ul>
				<li><h3><a class="intern" href="../projets/arma/deadline/">Arma Jactare (deadline)</a></h3><p class="light">Télécharger ici toutes les versions de la branche deadline de Arma Jactare.</p></li>
				<li><h3><a class="intern" href="../projets/arma/plagiat/">Arma Jactare (plagiat)</a></h3><p class="light">Télécharger ici toutes les versions de la branche plagiat de Arma Jactare.</p></li>
			</ul>
			</li>
			<li><h2><a class="intern" href="../projets/ogre/">Ogre3d</a></h2><p class="light">Mon (humble) implémentation des tutorials du wiki d'Ogre3d.</p></li>
			<li><h2><a class="intern" href="../projets/sitemap2map/">Script sitemap2map</a></h2><p class="light">Un script qui convertit un fichier sitemap.xml en XHTML</p></li>
			<li><h2><a class="intern" href="../projets/xfce/">Présentation de Xfce</a></h2><p class="light">Présentation de l'environnement de bureau XFCE.</p></li>
		</ul>
		</li>
	</ul>
	<p class="credit">Généré automatiquement par <a class="intern" href="../projets/sitemap2map">sitemap2map.py</a> version 1.0 (04.05.2008 18:40:49)</p>
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

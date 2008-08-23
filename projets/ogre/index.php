<?php include_once("../../common/title"); ?>
GeraudSoft | Ogre3d
<?php include_once("../../common/head"); ?>
<meta name="description" content="Mon (humble) implémentation des tutorials du wiki d'Ogre3d." />
<meta name="keywords" xml:lang="fr" content="programmation,ogre3d,c++" />
<?php include_once("../../common/start"); ?>    
<p>
Pour découvrir le moteur <a class="extern" href="http://www.ogre3d.org/">Ogre 3d</a>, j'ai suivi les 
<a class="extern" href="http://www.ogre3d.org/wiki/index.php/Ogre_Tutorials">tutoriels</a> du wiki officiel. 
</p>
<p>La version actuelle est la 0.0.1. Vous pouvez :</p>
<ul>
<li>Lire <a class="intern" href="NEWS">les nouveautés</a>.</li>
<li>Voir quels sont <a class="intern" href="TODO">les plans</a>.</li>
<li>Savoir comment <a class="intern" href="INSTALL">installer</a> à partir des sources.</li>
<li>Télécharger les sources : <a class="intern" href="ogre-tuto-0.0.1.tar.bz2">ogre-tuto-0.0.1.tar.bz2 [2,2 Mo]</a>
(md5 : ab854f00cb6150cc8dd2aa5a3dd43366).</li>
<li>Télécharger les exécutables Windows : <a class="intern" href="ogre-tuto-0.0.1-win32.zip">
ogre-tuto-0.0.1-win32.zip [7,0 Mo]</a></li>
<li>Utiliser un paquet debian (testé sous gutsy/i686), rajouter
<br /><code class="code">
deb http://www.geraudsoft.info/debian unstable main
</code><br />
 à votre fichier <samp>/etc/apt/sources.list</samp> et faire
<br /><code class="code">
apt-get update &amp;&amp; apt-get install ogre-tuto
</code></li>
<li>Si jamais vous utilisez <a class="extern" href="http://archlinuxfr.org/">Archlinux</a>,
vous pouvez vous servir de ce fichier <a class="intern" href="PKGBUILD">PKGBUILD</a>.</li>
</ul>

<p>
Pour conclure la petite capture d'écran obligatoire :
</p>
<div class="center">
<a class="img" href="tuto_i1_full.jpg">
<img src="tuto_i1_small.jpg" alt="un robot qui marche entre des cubes" />
</a>
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
<?php include_once("../../common/end"); ?>

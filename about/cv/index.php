<?php include_once("../../common/title"); ?>
GeraudSoft | CV
<?php include_once("../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Mon CV." />
<meta name="keywords" xml:lang="fr" content="cv" />
<?php include_once("../../common/start"); ?> 
</div>
<img class="cv" style="float:right;" src="moi.png" alt="Une photo de moi" />
<h1>Géraud Le Falher</h1>
<p class="light">Né le 18 Juillet 1990<br />
17 rue de l'Epine<br />
Nantes<br />
44300<br />
<a class="extern" id="email" href="">adresse email</a><br />
<script type="text/javascript"> //<![CDATA[
document.getElementById("email").href = encrypt(">2:=E@i86C2F5]=672=96Co8>2:=]4@>");
//]]> </script>
<a class="intern" href="http://geraudsoft.info/">site personnel</a><br />
</p>
<h2>Situation professionnelle actuelle</h2>
<p class="light">Étudiant</p>
<h2>Formation &amp; Diplômes</h2>
<h3 class="cv">Juin 2008 - Baccalauréat scientifique, mention très bien</h3>
<p class="light">Spécialité Mathématiques, lycée Jules Verne, Nantes</p>
<h3 class="cv">Juin 2005 - Diplôme National du Brevet</h3>
<p class="light">Collège Talence, Nantes</p>
<h2>Expérience professionnelle</h2>
<h3 class="cv">Janvier 2007 - Demi finale du concours Prologin</h3>
<p class="light"><a class="extern" href="http://www.prologin.org/">Prologin</a></p>
<h2>Compétences</h2>
<h3 class="cv">Langage</h3>
<p class="light">Connaissances des langages C/C++, Python, XHTML/CSS</p>
<p class="light">Rudiments en Bash, Ruby, Java, Latex</p>
<h3 class="cv">Système</h3>
<p class="light">Connaissance du système Linux</p>
<h3 class="cv">API</h3>
<p class="light">Rudiments en DirectX, OpenGL, 
<a class="extern" href="http://libsdl.org/">SDL</a>
<a class="extern" href="http://www.ogre3d.org/">Ogre3d</a></p>
<h2>Langues étrangères</h2>
<h3 class="cv">Allemand</h3>
<p class="light">Base</p>
<h3 class="cv">Anglais</h3>
<p class="light">Lu couramment</p>
<h2>Loisirs</h2>
<p class="light">Informatique, science-fiction</p>
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

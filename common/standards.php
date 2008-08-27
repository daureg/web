<?php include_once("title"); ?>
GéraudSoft | Les standard du web
<?php include_once("head"); ?>
<meta name="description" content="Présentation des standards du web." />
<meta name="keywords" xml:lang="fr" content="standards,xhtml,css,xml,atom,ietf,w3c" />
<?php include_once("start"); ?>
<div>
<h1>1 - Que sont ces standards du Web ?</h1>
<p>
Je ne saurais trop vous conseiller de lire <a class="wikipedia" href="http://fr.wikipedia.org/wiki/Standards_du_Web">
l'article de Wikipedia</a> à ce sujet (et pourquoi pas 
<a href="http://www.siteduzero.com/tutoriel-3-13629-0-le-w3c-et-les-standards-du-web.html" class="extern">
celui-là</a>). Pour résumer, ce sont un ensemble de normes destinées à fournir une manière commune d'organiser 
des données sur le web (<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Hypertext_Markup_Language">
(X)HTML)</a>, de les présenter (<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Cascading_Style_Sheet">
CSS</a>), de les décrire (<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Extensible_Markup_Language">
XML</a>), de les actualiser (<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Atom">Atom</a>), 
mais aussi de décrire des images 
(<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a>) ou des formules mathématiques
(<a class="wikipedia" href="http://fr.wikipedia.org/wiki/MathML">MathML</a>) et <a class="extern" href="http://www.w3.org/TR/">bien d'autres.</a>
</p>
<p>
Ces normes sont maintenues par des consortium comme le <a class="wikipedia" href="http://fr.wikipedia.org/wiki/World_Wide_Web_Consortium">
W3C</a> ou l'<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Internet_Engineering_Task_Force">IETF</a> auxquels participent
de nombreux acteurs industriels comme Canon, Fujitsu, Google, HP, IBM, Intel, Microsoft, Nokia, Xerox, Yahoo
et <a class="extern" href="http://www.w3.org/Consortium/Member/List">d'autres</a> ainsi que des experts techniques.
</p>
<h1>2 - Quels avantages ?</h1>
<p>
Deux aspects de ces standards leur procurent des avantages. D'abord ce sont des règles, édictées par des gens
compétents, et qui ont prouvé leur solidité au fil des années. Les règles permettent d'établir un cadre
commun qui facilite la tâche de tout le monde, des lecteurs aux concepteurs de navigateurs ou de moteurs de
recherche. Si l'uniformisation culturelle est un danger, l'uniformisation technique est un but honorable.
</p>
<p>
Deuxième aspect, <a class="extern" href="http://lists.w3.org/Archives/Public/public-html-comments/">le caractère ouvert</a>
de ces standards, qui permet à tout le monde de contribuer, présente les mêmes avantages que le
<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Logiciel_libre">logiciel libre</a>. Il met tout les individus sur un pied
d'égalité, empêche les situations monopolistiques et encourage la créativité. Mais ce n'est pas un acquis, il
n'y a qu'a voir les efforts que déploient Adobe (avec <a class="wikipedia" href="http://fr.wikipedia.org/wiki/Adobe_Flash">Flash</a>
et <a class="wikipedia" href="http://fr.wikipedia.org/wiki/Adobe_Integrated_Runtime">AIR</a>) ou Microsoft (avec
<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Microsoft_Silverlight">Silverlight</a> et 
<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Windows_Internet_Explorer">Internet Explorer</a>).
</p>
<p>
J'espère que vous n'avez pas trop l'impression de lire un tract du parti communiste mais c'est grâce à cette
ouverture qu'a eu lieu l'explosion d'Internet. Le protocole 
<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Suite_des_protocoles_Internet">TCP/IP</a> est libre et a été librement 
implémenté à <a class="wikipedia" href="http://fr.wikipedia.org/wiki/Universit%C3%A9_de_Californie_(Berkeley)">
l'Université de Californie</a> dans les systèmes <a class="wikipedia" href="http://fr.wikipedia.org/wiki/Berkeley_Software_Distribution">BSD</a>, 
au début des années 1980 et depuis largement utilisé, un petit <br /> 
<code class="code">strings fs/C/WINDOWS/system32/ftp.exe | grep Copyright</code><br />
suffit à s'en convaincre : <br />
<samp class="code">@(#) Copyright (c) 1983 The Regents of the University of California.</samp><br />
</p>
<h1>3 - Conclusion</h1>
<p>
Je me suis peut-être un peu emporté sur la fin, mais j'espère avoir réussi à vous faire passer ce message :
les standards du web sont des normes techniques qui rendent le Web plus facile pour tout le monde à
consulter et à maintenir, assurant par là sa pérennité.
</p>
<h1 id="navigateur">4 - Plusieurs derniers mots sur les navigateurs</h1>
<p>
Toute cette théorie technique est à l'&oelig;uvre dans le logiciel qui permet d'afficher les pages web,
le navigateur. On ne peut que conseiller d'éviter Windows Internet Explorer. L'immonde version 6 n'a pas été
mise à jour ne manière significative pendant près de 6 ans, la version 7, bien meilleure, n'est qu'une
pâle copie de la concurrence et si Microsoft promet un meilleur support des standards dans la 
<a class="extern" href="http://www.microsoft.com/windows/products/winfamily/ie/ie8/default.mspx">future version 8</a>,
ce n'est qu'au prix <a class="extern" href="http://www.generation-nt.com/ie8-internet-explorer-microsoft-rendu-standard-web-ozzie-actualite-69238.html">
de vertigineuses contorsions techniques</a>. De plus, Internet Explorer ne fonctionne que sous Windows.
</p>
<p>
À l'inverse, l'excellent <a class="extern" href="http://www.mozilla-europe.org/fr/firefox/">Firefox</a> est un
choix judicieux. C'est navigateur libre, respectueux des standards, sûr, disponible dans de nombreuses langues
et sur de nombreux systèmes et constamment maintenue à jour. Si la version 2 vous avez rebuté par son
importante consommation mémoire, Firefox 3 (sortie à l'été 2008) corrige ce problème et apporte
<a class="extern" href="http://www.codartfrance.net/veille/2008/04/19/pourquoi-choisir-firefox-3/">de nombreuses améliorations</a>.
Sa <a class="extern" href="https://addons.mozilla.org/fr/firefox/">capacité d'extension</a> quasi illimitée en fait
assurément l'un des meilleurs choix. Dans un souci d'objectivité, citons aussi :
</p>
<ul>
<li><a class="extern" href="http://www.opera.com/">Opera</a> : multiplateforme, moteur de rendu efficace mais propriétaire.</li>
<li><a class="extern" href="http://www.apple.com/fr/safari/">Safari</a> : Windows, MacOS, basé sur
<a class="extern" href="http://webkit.org/">Webkit</a> mais propriétaire.</li>
<li><a class="extern" href="http://www.konqueror.org/">Konqueror</a> : KDE, vaguement basé sur Webkit, open-source.</li>
<li><a class="extern" href="http://www.gnome.org/projects/epiphany/">Epiphany</a> : Gnome, basé sur Gecko
(moteur de Firefox) puis sur Webkit, open-source.</li>
<li><a class="extern" href="http://software.twotoasts.de/?page=midori">Midori</a> : En développement, Linux (xfce), Webkit, open-source.</li>
</ul>
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
echo "</div>\n"; ?>
<?php include_once("end"); ?>

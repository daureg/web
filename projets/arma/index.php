<?php include_once("../../common/title"); ?>
GeraudSoft | Arma Jactare
<?php include_once("../../common/head"); ?>
<meta name="description" xml:lang="fr" content="Les dernières informations 
sur l'avancement du projet Arma Jactare, un FPS basé sur le Game Engine de Blender." />
<meta name="keywords" xml:lang="fr" content="blender,jeu,FPS,Arma Jactare" />
<?php include_once("../../common/start"); ?> 
<h1>Description</h1>
<p>Arma Jactare est un projet (abandonné pour ma part) de FPS basé sur le moteur interne
de <a class="extern" href="http://www.blender.org/">blender</a>, un logiciel de modélisation 3D. Vous pouvez
lire un document sur le contexte du jeu (format : <a class="intern" href="histoire.pdf">[pdf, 43Ko]</a>,
<a class="intern" href="histoire.txt">[texte, 2Ko]</a>)
</p>
	  <h1>Récupérer la dernière version :</h1>
	  <a class="intern" href="plagiat">Branche &#147;plagiat&#148;</a> (Version basée sur un exemple du web)<br />
	  <a class="intern" href="deadline">Branche &#147;deadline&#148;</a> (Version commencée à partir de zéro)
	  <h1>Documentation</h1>
	  <p>     
<?php
$file = @fopen("doc.txt", "r");
if ($file) {
	while (!feof($file)) {
		$line = fgets($file);
		echo "$line <br />";
	}
	fclose($file);
}
?>

	  </p>
	  <h1>Trucs à faire </h1>
	  <h3>Armes </h3>
	  <ul>
		<li>
		<span class="fait"> [FAIT] Gestion des munitions
		</span></li>
		<li>
		<span class="fait"> [FAIT] Touche pour recharger
		</span></li>
		<li>
		<span class="fait"> [FAIT] Gérer les packs de munitions
		</span></li>
		<li>
		<span class="fait"> [FAIT] Son à chaque tir
		</span></li>
		<li>
		<span class="wip"> [EN COURS] Son quand on essaye de tirer avec un chargeur vide
		</span></li>
		<li>
		<span class="wip"> [EN COURS] Avoir plusieurs armes disponibles
		</span></li>
		<li>
		<span class="fait"> [FAIT ]Modifier la vitesse entre les tirs
		</span></li>
		<li>Gérer les dégats</li>
	  </ul>
	  <h3>Personnage </h3>
	  <ul>
		<li>Caméra qui suit le personnage.</li>
		<li>Vue à la première personne.</li>
		<li>Vue à la troisième personne </li>
	  </ul>
	  <h3>Carte </h3>
	  <ul>
		<li>Ajouter des packs de munitions</li>
		<li>Ajouter des packs de vie</li>
	  </ul>
	  <h3>Modélisation</h3>
	  <ul>
		<li>
		<span class="fait"> [FAIT] Créer un ou plusieurs personnage
		</span></li>
		<li>
		<span class="fait"> [FAIT ]Rajouter d'autre armes
		</span></li>
		<li>Faire de nouvelles cartes </li>
		<li>
		<span class="wip"> [EN COURS] Créer une bibliothèque de préfabs libres
		</span></li>
	  </ul>
	  <h3>Animation</h3>
	  <ul>
		<li>Faire marcher les personnages</li>
	  </ul>
	  <h3>Textures</h3>
	  <ul>
		<li>
		<span class="fait"> [FAIT] Texturer les autres armes
		</span></li>
		<li>Texturer les cartes</li>
		<li>
		<span class="fait"> [FAIT] Textures les personnages
		</span></li>
	  </ul>
	  <h3>Réseau </h3>
	  <h3>AI </h3>
	  <h3>Divers </h3>
	  <ul>
		<li>
		<span class="fait"> [FAIT] (Echap) Touche pour quitter le jeu.
		</span></li>
		<li>
		<span class="fait"> [FAIT] Affichage de texte à l'écran.
		</span></li>
		<li>
		<span class="fait"> [FAIT] (F1) Touche pour revenir au menu.
		</span></li>
		  <li><span>Pouvoir mettre le jeu en pause, et donc une touche pour le faire.
		</span></li>
		<li>
		<span class="fait"> [FAIT] Faire un menu au début du jeu.
		</span></li>
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

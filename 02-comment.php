<?php 

// commentaire sur une ligne blabla

# une autre manière de faire un commentaire sur une ligne une ligne une ligne n'est jamais terminée 

/* 
Commentaires 
sur plusieurs
lignes
*/

# Il est très important de laisser des commentaires pour son équipe 

?>
<!--
ceci est un commentaire html, il sera envoyé au navigateur
-->

<?php 

// bonne pratique, ne ps fermer la balise php quand ce n'est pas utile 

// affichage avec echo, le point virgule est la fin de l'instruction, on peut mettre sans limite sur la même ligne, ou séparer les instructions par autant d'espace que voulu ( mauvaise pratique, mais PHP s'en fout). La fonction time () vous donne le timestamp (temps UNIX en secondes depuis le 01/01/1970)
echo "<p> Temps Unix de la page :"; echo time();


            echo "</p>"
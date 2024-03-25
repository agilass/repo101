<?php
// include("models\model.php");
if(empty($_GET["action"]))
	$action = "Accueil";
else
	$action = $_GET["action"];
// The include (or require ) statement takes all the text/code/markup that exists in the 
// specified file and copies it into the file that uses the include statement. Including 
// files is very useful when you want to include the same PHP, HTML, or text on multiple
//  pages of a website.=== include le code qui existe ailleur 
// ob == output buffer
// ob_start();
// ob_get_clean() function is an in-built PHP function that is used to clean or delete the
//  current output buffer
include("actions/a".$action.".php");
//  ce code ci-dessous remplace la variable $page dans le gabarit car il doit commencer par 
// ob_start et $page=ob_get_clean() cad outputbuffer se stock dans la variable $page
include("views/".$vue);
// . pour la concatenation
if((!empty($_GET["layout"])) and file_exists("views/gabarit".ucfirst($_GET["layout"]).".php")) {
	include("views/gabarit".ucfirst($_GET["layout"]).".php");
} else { // sa fonctionne bien
	include("views/gabarit.php");
}
?>
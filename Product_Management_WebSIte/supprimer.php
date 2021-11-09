<?php
require_once("connexion.php");
$s=$_GET['entrer'];
$r=mysql_query("delete from produit where CODEP='$s'");
header("location:afficher.php");

?>
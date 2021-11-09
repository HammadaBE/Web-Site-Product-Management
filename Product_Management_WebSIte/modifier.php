<?php
require_once("connexion.php");
$x=$_POST['CP'];
$a=$_POST['LP'];
$b=$_POST['DP'];
$image=$_FILES['PP']['name'];
$file_tmp_name=$_FILES['PP']['tmp_name'];
move_uploaded_file($file_tmp_name,"./imgh/$image");
$r=mysql_query("update produit set LIBELLEP='$a',DESCRIPTIONP='$b',PHOTOP='$image'where CODEP=$x ");
header("location:afficher.php");
?>
<?php
require_once("autoriser.php");
require_once("connexion.php");
$a=$_POST['LP'];
$b=$_POST['DP'];
$image=$_FILES['PP']['name'];
$file_tmp_name=$_FILES['PP']['tmp_name'];
move_uploaded_file($file_tmp_name,"./imgh/$image");
$r=mysql_query("insert into produit (LIBELLEP,DESCRIPTIONP,PHOTOP)values('$a','$b','$image') ");
?>
<html>
<body>
<h2>PRODUIT AJOUTE</h2>
<table>
    <tr>
        <td>LIBELLE</td>
        <td><?PHP echo($a) ?></td>
    </tr>
    <tr>
        <td>DESCRIPTION</td>
        <td><?PHP echo($b) ?></td>
    </tr>
    <tr>
        <td>PHOTO</td>
        <td><img src="imgh/<?PHP echo($image) ?>" height="80" width="80"> </td>

    </tr>
</table>
</body>
</html>
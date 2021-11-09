<?php
session_start();
if(!(isset($_SESSION['u'])))
{
    header("location:aut.html");

}


?>



<?php
require_once("connexion.php");
$r=mysql_query("select * from produCt ");

?>
<html>
<body>
<p align="center"><a href="menu.html"><img src="imgh/retour.ico" height="70" width="70"> </a></p>
<table border="1" width="700" align="center">
    <tr><th>CODE PRODUIT</th><th>LABEL</th><th>DESCRIPTION</th><th>PHOTO</th><th>SUPPRIMER</th><th>MODIFIER</th></tr>
    <?php while($h=mysql_fetch_array($r)) { ?>
    <tr>
        <td><?php echo($h['CODEP']) ?></td>
        <TD><?php echo($h['LABELP']) ?></TD>
        <TD><?php echo($h['DESCRIPTIONP']) ?></TD>
        <td><img src="imgh/<?php echo($h['PHOTOP']) ?>" height="80" width="80"> </td>
<?php if($_SESSION['u']==1) {?>
        <td><a href="supprimer.php?entrer=<?php echo($h['CODEP']) ?>"><img src="imgh/borrar.ico" height="50" width="50"></a></td>
		 <td><a href="editer.php?entrer=<?php echo($h['CODEP']) ?>"><img src="imgh/modification.ico" height="50" width="50"> </a> </td>
<?php  }?>
    </tr>
    <?php }?>
</table>
</body>
</html>
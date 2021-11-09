<?php
require_once("connexion.php");
$m=$_GET['entrer'];
$r=mysql_query("select * from produCt where CODEP=$m");
$p=mysql_fetch_array($r);
?>
<html>
<body>
<form action="modifier.php" method="post" enctype="multipart/form-data">
    <table width="200" >
        <tr>
            <td>CODE PRODUIT</td>
            <td><input type="text" name="CP" value="<?php echo($p['CODEP']) ?>" /></td>
        </tr>
        <tr>
            <td>LIBELLE PRODUIT</td>
            <td><input type="text" name="LP" value="<?php echo($p['LABELP']) ?>" /></td>
        </tr>
        <tr>
            <td>DESCRIPTION PRODUIT</td>
            <td><input type="text" name="DP" value="<?php echo($p['DESCRIPTIONP']) ?>"/></td>
        </tr>
        <tr>
            <td>PHOTO PRODUIT</td>
            <td><input type="file" name="PP" value="<img src="imgh/<?php echo($p['PHOTOP'])?>" width="80" height="80"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="enregistrer" value="enregistrer" /></td>
        </tr>
    </table>


</form>

</body>
</html>
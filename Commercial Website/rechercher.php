<?php
require_once("connexion.php");
$mot="null";
if(isset($_POST['chercher']))
{
    $mot=$_POST['notrecode'];
}
$r=mysql_query("select * from produit where CODEP like '%$mot%' ");

?>
<htmml>
    <body>
    <form method="post" action="rechercher.php">
        <img src="imgh/cherche.ico" height="30" width="30"><input type="text" name="notrecode" value="<?php echo ($mot) ?>" >
        <input type="submit" name="chercher" value="chercher">

    </form>
    <table border="1" width="500">
        <tr><th>CODE PRODUIT</th><th>LIBELLE PRODUIT</th><th>DESCRIPTION PRODUIT</th><th>PHOTO PRODUIT</th></tr>
        <?php while($PRO=mysql_fetch_array($r)){?>
            <tr>
                <td><?php echo ($PRO['CODEP'])?></td>
                <td><?php echo ($PRO['LIBELLEP'])?></td>
                <td><?php echo( $PRO['DESCRIPTIONP'])?></td>
                <td><img src="imgh/<?php echo( $PRO['PHOTOP'])?>" height="80" width="80"> </td>
            </tr>
        <?php } ?>
    </table>
	<a href="menu.html" > <img src="imgh/retour.ico" height="50" width="50" > </a>
    </body>
</htmml>
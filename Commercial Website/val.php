<?php
require_once("connexion.php");
$a=$_POST['U'];
$b=$_POST['P'];
$i=md5($b);
$r=mysql_query("select * from user where login='$a' and password='$i' ");
if($v=mysql_fetch_array($r))

{
    session_start();
    $_SESSION['u']=$v['niveau'];
    header("location:afficher.php");
}
else
{
    header("location:aut.html");
}

?>
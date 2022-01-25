<?php
session_start();
require_once("connexion.php");

if($v=mysql_fetch_array($r))

{
    session_start();
    $_SESSION['u']=$v['niveau'];
   header("location:saisie.html");
}

else
{
    header("location:aut.html");
}
?>
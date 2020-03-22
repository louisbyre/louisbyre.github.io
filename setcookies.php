<?php

if($_GET['give']=='sword')
{
    setcookie("sword", "yes", time() + (86400 * 30), "/");
    header('Location: index.php?p='.$_GET['p'].'');
}else{
    header('Location: index.php?p=1');
}



?>
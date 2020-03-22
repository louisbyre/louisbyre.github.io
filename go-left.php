<?php

if(isset($_GET['p'])){
    
    $goright = $_GET['p'] - 1;
    
    header('Location: index.php?p='.$goright.'');
    
}else{
    header('Location: index.php?p=1');
}


?>
<?php

echo $_GET['p'];
if(isset($_GET['p'])){
    
    $goright = $_GET['p'] + 1;
        
        echo $goright;
    echo $_GET['p'];
    
    header('Location: index.php?p='.$goright.'');
    
}else{
    header('Location: index.php?p=1');
}

?>

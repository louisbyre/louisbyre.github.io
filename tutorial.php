<?php

if(isset($_GET['p']))
{

?>

<!DOCTYPE html>
<html>
<head>
    
    <link href="style.css" rel="stylesheet">
    
</head>

<body>

<div id="wrapper">

<?php
  
    /* ///////////////////////////////////////////// 1 ///////////////////////////////////////////////////////////// */
    if($_GET['p']==1)
    {
    
?>
    
    <!-- ===========================DIALOGUE BOX==================== -->
    
    <div id="dialogue-box">
               
        <div>
            <p id="narration-wrapper">
                A wanderer crosses your path.
                <br />
                " Whatcha doing here, boi ? ", he says.
            </p>
            <div id="separator"></div>

            <p id="choices-wrapper">
                <span id="choice">> Say nothing.</span><br/>
                <span id="choice">> Answer: "Just taking a walk."</span><br />
                <span id="choice">> Answer: "Just taking a walk, mate."</span>
            </p>
        </div>
        
    </div>
    
    <!-- ==============================BOARD========================= -->
    <div id="board">

        <table>
            <tbody>
                <tr>
                    <td></td>
                    
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    
                    <td></td>
                </tr>
                
                <tr>
                    <td><?php echo "<a href='go-left.php?p=".$_GET['p']." ' />"?><img src="arrow-left.png" id="arrow-left"></a></td>
                    
                    <td></td>
                    <td><img src="player.png" id="player"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="crappy-sword.png" id="tree"></td>
                    <td><img src="voyageur.png" id="voyageur"></td>
                    <td></td>
                    <td></td>
                    
                    <td><?php echo "<a href='go-right.php?p=".$_GET['p']." ' />"?><img src="arrow-right.png" id="arrow-right"></a></td>
                </tr>
                
                <tr>
                    <td></td>
                    
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
<?php
        
    /* ///////////////////////////////////////////// 2 ///////////////////////////////////////////////////////////// */
    }elseif($_GET['p']==2){
    
?>
    
        
    <!-- ===========================DIALOGUE BOX==================== -->
    
    <div id="dialogue-box">
               
        <div>
            <p id="narration-wrapper">
                A wanderer crosses your path.   aaa
                <br />
                " Whatcha doing here, boi ? ", he says.
            </p>
            <div id="separator"></div>

            <p id="choices-wrapper">
                <span id="choice">> Say nothing.</span><br/>
                <span id="choice">> Answer: "Just taking a walk."</span><br />
                <span id="choice">> Answer: "Just taking a walk, mate."</span>
            </p>
        </div>
        
    </div>
    
    <!-- ==============================BOARD========================= -->
    <div id="board">

        <table>
            <tbody>
                <tr>
                    <td></td>
                    
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    
                    <td></td>
                </tr>
                
                <tr>
                    <td><?php echo "<a href='go-left.php?p=".$_GET['p']." ' />"?><img src="arrow-left.png" id="arrow-left"></a></td>
                    
                    <td></td>
                    <td><img src="player.png" id="player"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="crappy-sword.png" id="tree"></td>
                    <td><img src="voyageur.png" id="voyageur"></td>
                    <td></td>
                    <td></td>
                    
                    <td><?php echo "<a href='go-right.php?p=".$_GET['p']." ' />"?><img src="arrow-right.png" id="arrow-right"></a></td>
                </tr>
                
                <tr>
                    <td></td>
                    
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="tree.png" id="tree"></td>
                    
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
<?php
        
    }else{
        header('Location: index.php?p=1');
    }
?>
    
</div>    

</body>
    
</html>

<?php

}else{
    header('Location: index.php?p=1');
}
    
?>
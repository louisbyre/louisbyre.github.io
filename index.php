<?php

if(isset($_GET['p']))
{

?>

<!DOCTYPE html>
<html>
<head>
    
    <link href="style.css" rel="stylesheet">
    
    <script>
var tooltip = document.querySelectorAll('.coupontooltip');

document.addEventListener('mousemove', fn, false);

function fn(e) {
    for (var i=tooltip.length; i--;) {
        tooltip[i].style.left = e.pageX + 'px';
        tooltip[i].style.top = e.pageY + 'px';
    }
}
</script>
    
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
                You are a lonely boy in the forest.
                <br />
                <div style="margin-top: 5px; background-color: black; filter: invert(); border: 1px dotted white; padding: 10px;"><img src="mouse-right-click.png" style="height: 20px;"/> Click on the arrows to go left or right.</div>
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
                    <td></td>
                    <td></td>
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

    <!-- ==============================INVENTORY========================= -->

    <?php
       include("inventory.php");
    ?>

<?php
        
    /* ///////////////////////////////////////////// 2 ///////////////////////////////////////////////////////////// */
    }elseif($_GET['p']==2){
?>
    
        
    <!-- ===========================DIALOGUE BOX==================== -->
    
    <div id="dialogue-box">
               
        <div>
            <p id="narration-wrapper">
                A wanderer crosses your path.
                <br />
                " Take this sword ", he says.
            </p>
            <div id="separator"></div>

            <p id="choices-wrapper">
                <span id="choice">> Tell him to fuck off.</span><br/>
                <?php if($_COOKIE['sword']!='yes'){ ?><a href="setcookies.php?p=<?php echo $_GET['p']; ?>&give=sword"><span id="choice">> Take the sword.</span></a><?php } ?>
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
                    <td><?php if($_COOKIE['sword']!='yes'){ ?><img src="crappy-sword.png" id="tree"><?php } ?></td>
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

    <!-- ==============================INVENTORY========================= -->

    <?php
       include("inventory.php");
    ?>

<?php
        
    /* ///////////////////////////////////////////// 0 ///////////////////////////////////////////////////////////// */
    }elseif($_GET['p']==0){
?>
    
        
    <!-- ===========================DIALOGUE BOX==================== -->
    
    <div id="dialogue-box">
               
        <div>
            <p id="narration-wrapper">
                You are a lonely boy in the forest.
                <br />
                The forest seems too dense to continue to the left.
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
                    <td></td>
                    
                    <td><img src="tree.png" id="tree"></td>
                    <td><img src="player.png" id="player"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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

    <!-- ==============================INVENTORY========================= -->

    <?php
       include("inventory.php");
    ?>
    
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
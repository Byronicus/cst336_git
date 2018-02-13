
<?php
    function getRandomColor() {
        echo "rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)/100).")";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
        
        <style>
            
            
            body {
            /*background-color: rgba(230,20,250,.1);*/
            /*alpha = a in rgba = opacity (4th value)*/
                <?php
                $red = rand(0,255);
                $blue = rand(0,255);
                $gleen = rand(0,255);
                // $alpha = rand(0,100)/100;

                echo "background-color: rgba(".rand(0,255).",".rand(0,255).",$gleen,.3)";	//works
                ?>
            }
            h2{
                color: <?=  getRandomColor()  ?>;
                background-color: <?php  getRandomColor() ?>;
            }            
        </style>
    </head>
    <body>
        <h2>Welcome!</h2>
        Random Color!
    </body>
</html>
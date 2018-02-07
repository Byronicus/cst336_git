<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2:777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
        
        <!--this lets you do java/php coding in HTML:-->
        <!--PHP = in body.-->
        <?php
        //Philosophy DRY ("do not repeat yourself") = use a function instead of anything else.
        function displaySymbol($randomVal) {
            $bar = "bar";
            $cherry = "grapes";
            $grapes = "grapes";
            $lemon = "lemon";
            $orange = "orange";
            $seven = "seven";
            if($randomVal == 1) {
                $displayImg3 = $bar;
            }
            else if($randomVal == 2) {
                $displayImg3 = $cherry;
            }
            else if($randomVal == 3) {
                $displayImg3 = $grapes;
            }
            else if($randomVal == 4) {
                $displayImg3 = $lemon;
            }
            else if($randomVal == 5) {
                $displayImg3 = $orange;
            }
            else if($randomVal == 0) {
                $displayImg3 = $seven;
            }
        //echo = display on page:
        echo "<img src=\"img/$displayImg3.png\" width=\"70\" alt=\"$displayImg3\" title=\"$displayImg3\"/>";
        }
        
        $randomValue1 = rand(0,3);
        $randomValue2 = rand(0,3);
        $randomValue3 = rand(0,3);
        
        displaySymbol($randomValue1);
        displaySymbol($randomValue2);
        displaySymbol($randomValue3);
        
        function displayPoints($randomValue1, $randomValue2, $randomValue3){
            echo "<div id='output'>";
            if (($randomValue1 == $randomValue2) && ($randomValue2 == $randomValue3)){
                switch ($randomValue1){
                    case 0: echo "<h1>Jackpot!<h1/>";
                        $totalPoints = 1000;
                    case 1:
                        $totalPoints = 500;
                    case 2:
                        $totalPoints = 250;
                    case 3:
                        $totalPoints = 100;
                }
                echo "<h2>You won $totalPoints points!<h2/>";
            }
            else {
                echo "<h3> Try again. <h3/>";
            }
            // echo "</div>";
        }
        
        echo "<br /><br /><hr /> values: $randomValue1, $randomValue2, $randomValue3";
        displayPoints($randomValue1, $randomValue2, $randomValue3);
        
        ?>
        
        <!--<img src="img/lemon.png" width="70" alt="Lemon" title="Lemon"/>-->
        <!--<img src="img/orange.png" width="70" alt="Lemon" title="Lemon"/>-->
        <!--<img src="img/cherry.png" width="70" alt="Lemon" title="Lemon"/>-->
    </body>
</html>
<?php

// Get the contents of the JSON settings file 
$strJsonFileContents = file_get_contents("data.json");
// Convert to array 
$importedArray = json_decode($strJsonFileContents, true);
//weather data
$weatherURL = $importedArray["data"]["0"]["url"];
$weatherLocation = $importedArray["data"]["0"]["place"];

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- include ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <!-- load the time script - shows the time onscreen -->
        <script src="scripts/time.js"></script>
    </head>
    <body onload="startTime()">

        <div class="container">
            <div class="item-a">
                <h3 id="count">Time Place Holder</h3>
            </div>

            <div class="item-c">
                <a class="weatherwidget-io" href="<?php echo $weatherURL ?>" data-label_1="<?php echo $weatherLocation ?>" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-textcolor="#ffffff" ><?php echo $weatherLocation ?> WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>

            <div class="item-d">
                <p><?php include "php/dailyQuote.php"?></p>
            </div>

            <div class="item-e">
                <marquee scrollamount="2" class="bar" behavior="scroll" direction="left"> <?php include "php/news.php" ?> </marquee>
            </div>

        </div>

    </body>

<?php include "php/backgroundImageChange.php" ?>

</html>
<html>
    <head>
        <title>PHP Basics</title>
    </head>
    <body>
        <?php
            $yourName = "Noah Clark"
        ?>
        <h1>3-1: PHP Basics</h1>
        <h2><?php echo $yourName ?></h2>

        <?php
            $number1 = 9;
            $number2 = 7;
            $total = $number1 + $number2;
            echo '<p> number1 = ' , $number1 , '</p>';
            echo '<p> number2 = ' , $number2 , '</p>';
            echo '<p> total = ' , $total , '</p>';
        ?>

        <p id="outputJS"></p>

        <script>
            let langJS = [];
            <?php
                $langPHP = array("PHP", "HTML", "Javascript"); 
                foreach($langPHP as $value){
                    echo 'langJS.push("'. $value. '");';
                }
            ?>
            let lLen = langJS.length;

            let text = "<ul>";
            for (let i = 0; i < lLen; i++){
                text += "<li>" + langJS[i] + "</li>";
            }
            text += "</ul>";
            
            document.getElementById("outputJS").innerHTML = text;
        </script>
    </body>
</html>
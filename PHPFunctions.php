<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
        <?php
            // Declare functions

            function dateMDY() : string{
                $dateMDY = date("m/d/y");
                return $dateMDY;
            }

            function dateDMY() : string{
                $dateDMY = date("d/m/y");
                return $dateDMY;
            }

            function multiString(string $x){
                echo '<ul>';
                echo '<li>Number of characters: ', strlen($x), '</li>';
                echo '<li>Trimmed whitespace: ', trim($x), '</li>';
                echo '<li>All lowercase: ', strtolower($x), '</li>';
                echo '<li>Contains DMACC: ';
                if (strripos($x, "DMACC") === false) {
                    echo 'No';
                }
                else {
                    echo 'Yes';
                }
                echo '</li></ul>';
            }

            function phoneNum(string $p){
                $result = sprintf("%s-%s-%s",
                    substr($p, 0, 3),
                    substr($p, 3, 3),
                    substr($p, 6));
                echo "<p>Phone number: ", $result, "</p>";
            }

            function moneyNum(int $m) {
                echo '<p>$', $m, '<p>';
            }
        ?>

        <h1>4-1: PHP Functions</h1>

        <?php
            // Call functions
            echo '<p>', dateMDY(), '</p>';
            echo '<p>', dateDMY(), '</p>';
            multiString('  DMACC is cool ');
            phoneNum('1234567890');
            moneyNum(123456);
        ?>
    </body>
</html>
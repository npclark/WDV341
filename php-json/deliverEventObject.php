<html>
<header>
    <title>Unit 9</title>
    
    <style>
        body {
            background-color: lightblue;
        }
        h1 {
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>

    <?php

        class Event{
            public $id;
            public $name;
            public $description;
            public $presenter;
            public $date;
            public $time;

            function __construct($id, $name, $description, $presenter, $date, $time){
                $this->$id = $id;
                $this->$name = $name;
                $this->$description = $description;
                $this->$presenter = $presenter;
                $this->$date = $date;
                $this->$time = $time;
            }
        }
        
        include "../database/dbConnect.php";

        try {
            $sql = "SELECT * FROM wdv341_events WHERE id=3";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // Test to see if fetch worked
            //echo "<h2>", $result['presenter'], "</h2>";
        } catch(PDOException $e) {
            echo "ERROR: ", $e->getMessage();
        }
    ?>
</header>
<body>
    <h1>Intro to PHP</h1>
    <h2>Unit 9 Assignment 1 PHP-JSON Event</h2>

    <?php
        $outputObj = new Event($result['id'], $result['name'], $result['description'], $result['presenter'], $result['date'], $result['time']);

        $myJSON = json_encode($outputObj);
        echo $myJSON;
    ?>
</html>
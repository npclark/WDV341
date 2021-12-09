<html>
<header>
    <title>Assignment 7-1</title>
</header>
<body>
<?php
    echo "<table style='border: sold 1px black;'>";
    echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Presenter</th><th>Date</th><th>Time</th><th>Date Inserted</th><th>Date Updated</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function _construct($it) {
            parent::_construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren(){
            echo "<tr>";
        }

        function endChildren(){
            echo "</tr>" . "\n";
        }
    }

    include 'dbConnect.php';

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, name, description, presenter, date, time, date_inserted, date_updated FROM wdv341_events");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
            echo $v;
        }
    } catch(PDOException $e) {
        echo "Error: ". $e-getMessage();
    }
    $conn = null;
    echo "</table>";
?>
</body>
</html>
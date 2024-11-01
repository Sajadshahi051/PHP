<?php

include 'ConnectionToDatabase.php';

class AverageSaver {
    private $connection;

    public function __construct(connectionToDatabase $connection) {
        $this->connection = $connection->getConnection();
    }

    public function saveStatistics($sum, $count, $average){
        $stmt = $this->connection->prepare("INSERT INTO xy (sum , count , average) VALUES (?,?,?)");

        $stmt->bind_param("ddi",$sum , $count , $average);
        $stmt->execute();
        $stmt->close();
    }
}



?>

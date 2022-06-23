<?php
class Connection {
    function getConnection() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "api_066_085_125_128_143";
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}
?>
<?php 
    $SERVER_NAME = "localhost";
    $DATABASE_USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "gray_db";

    try
    {
        $conn = new PDO("mysql:host=$SERVER_NAME;dbname=$DB_NAME", $DATABASE_USERNAME, $PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

?>
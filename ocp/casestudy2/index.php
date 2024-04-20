<?php
// Define the DBMS interface
interface DBMS {
    public function createConnection();
}

// Define the DBMSConnection class
class DBMSConnection {
    public function connect(DBMS $dbms) {
        $dbms->createConnection();
    }
}

// Define the MySQL class that implements the DBMS interface
class MySQL implements DBMS {
    public function createConnection() {
        // Logic for creating a MySQL connection
        echo "MySQL connection created.\n";
    }
}

// Define the MongoDB class that implements the DBMS interface
class MongoDB implements DBMS {
    public function createConnection() {
        // Logic for creating a MongoDB connection
        echo "MongoDB connection created.\n";
    }
}

// Example usage
$dbmsConnection = new DBMSConnection();
$mysql = new MySQL();
$mongoDB = new MongoDB();

// Connect to MySQL
$dbmsConnection->connect($mysql);

// Connect to MongoDB
$dbmsConnection->connect($mongoDB);
?>
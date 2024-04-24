<?php
// Path to the SQLite database file
$databaseFile = 'mydatabase.sqlite';

// Create a new SQLite database connection
$pdo = new PDO('sqlite:' . $databaseFile);

// Check for errors
if ($pdo === false) {
    die("Error: Unable to connect to the database.");
}

// SQL query to create a table
$query = "CREATE TABLE IF NOT EXISTS users (
    username TEXT NOT NULL,
    password TEXT NOT NULL
)";

// Execute the query
if ($pdo->exec($query) === false) {
    die("Error creating table: " . implode(" ", $pdo->errorInfo()));
}

echo "Table 'users' created successfully.";
?>

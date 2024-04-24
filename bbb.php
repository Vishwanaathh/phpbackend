<?php
$databasefile = 'mydatabase.sqlite';
$pdo = new PDO('sqlite:' . $databasefile);
$name = $_GET['namee'];
$pass = $_GET['Passe'];

// Prepare the SQL statement with a placeholder for the username
$sql = "SELECT username, password FROM users WHERE username = :username";

// Prepare the statement
$stmt = $pdo->prepare($sql);

// Bind the parameter
$stmt->bindParam(':username', $name, PDO::PARAM_STR);

// Execute the statement
$stmt->execute();

// Fetch the user's information
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Verify the password
    if ($user['password'] == $pass) {
        echo "Logging in";
    } else {
        echo "Wrong password";
    }
} else {
    echo "No user found";
}

// Close the database connection
unset($pdo);
?>

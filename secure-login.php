<?php
// SECURE CODE: PRODUCTION READY
// This script uses PDO Prepared Statements. 
// The database engine treats the input as raw data, not executable code.

$username = $_POST['username'];
$password = $_POST['password'];

// The Remediation: Parameterized Query using placeholders (:username, :password)
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";

$stmt = $pdo->prepare($sql);

// Execute the statement by binding the user input safely
$stmt->execute([
    'username' => $username, 
    'password' => $password
]);

if ($stmt->rowCount() > 0) {
    echo "Login successful! Welcome.";
} else {
    echo "Invalid credentials.";
}
?>

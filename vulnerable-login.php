<?php
// VULNERABLE CODE: DO NOT USE IN PRODUCTION
// This script takes raw user input and concatenates it directly into the SQL string.
// An attacker can input "admin' OR 1=1 --" to bypass authentication.

$username = $_POST['username'];
$password = $_POST['password'];

// The Vulnerability: Direct concatenation
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful! Welcome.";
} else {
    echo "Invalid credentials.";
}
?>

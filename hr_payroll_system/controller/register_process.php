<?php
include('../config/db.php');
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

if (!$conn) {
    die("DB connection not established.");
}

$query = "INSERT INTO account (username, password, role) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sss", $username, $password, $role);

if ($stmt->execute()) {
    echo "Registration successful. <a href='../views/login.php'>Login here</a>";
} else {
    echo "Error: " . $stmt->error;
}
?>

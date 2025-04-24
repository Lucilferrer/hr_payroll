<?php
session_start();
include('../config/db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM account WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];  // Optional
    header("Location: ../views/dashboard.php");
} else {
    echo "Invalid credentials.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - HR Payroll System</title>
    <link rel="stylesheet" href="/hr_payroll_system/public/css/login/style.css">
</head>
<body>
    <div class="container">
   <div class="login-container"> 

    <h2>Login</h2>
    <form method="post" action="/hr_payroll_system/controller/login_process.php">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</div>
</div>
</body>
</html>

<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
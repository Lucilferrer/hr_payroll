<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$role = $_SESSION['role']; // Optional: only if you stored it during login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - HR Payroll System</title>
    <link rel="stylesheet" href="/hr_payroll_system/public/css/dashboard/style.css">
</head>
<body>
    <div class="dashboard">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>You are logged in as <strong><?php echo htmlspecialchars($role); ?></strong>.</p>

        <div style="margin-top: 20px;">
            <a href="logout.php"><button>Logout</button></a>
        </div>

        <div style="margin-top: 40px;">
            <h3>Navigation</h3>
            <ul>
                <li><a href="../hr/employee_list.php">Employee List</a></li>
                <li><a href="../payroll/payslips.php">Payslips</a></li>
                <li><a href="../hr/attendance.php">Attendance</a></li>
                <li><a href="../payroll/tax_reports.php">Tax Reports</a></li>
            </ul>
        </div>
    </div>
</body>
</html>

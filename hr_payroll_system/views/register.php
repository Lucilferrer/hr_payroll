<!DOCTYPE html>
<html>
<head>
    <title>Register - HR Payroll System</title>
    <link rel="stylesheet" href="/hr_payroll_system/public/css/register/style.css">
</head>
<body>
    <div class="container">
    <div class="login-container"> 
    <h2>Register</h2>
    <form method="post" action="/hr_payroll_system/controller/register_process.php">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
    </div> 
    </div>
</body>
</html>

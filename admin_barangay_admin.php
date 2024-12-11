<?php
session_start();

// Check if the admin is logged in
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

// Retrieve admin info from session
$admin_name = $_SESSION['admin_name'];
$admin_id = $_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .admin-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .admin-info div {
            flex: 1;
        }
        .admin-info label {
            font-weight: bold;
        }
        .admin-info p {
            margin: 5px 0;
        }
        .nav {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .nav a {
            margin: 0 15px;
            padding: 10px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
        }
        .nav a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Admin Dashboard</h1>
    
    <!-- Display admin information -->
    <div class="admin-info">
        <div>
            <label for="admin_name">Name:</label>
            <p id="admin_name"><?php echo $admin_name; ?></p>
        </div>
        <div>
            <label for="admin_id">Admin ID:</label>
            <p id="admin_id"><?php echo $admin_id; ?></p>
        </div>
    </div>

    <!-- Navigation links -->
    <div class="nav">
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="admin_settings.php">Settings</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>

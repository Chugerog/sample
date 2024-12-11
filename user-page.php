<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// Get user information from session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f9; }
        .container { max-width: 800px; margin: auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #333; }
        p { text-align: center; font-size: 18px; color: #555; }
        .button { padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; cursor: pointer; }
        .button:hover { background-color: #0056b3; }
        .logout { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>You are logged in as a user.</p>
        
        <!-- More personalized content can go here -->
        <p>Welcome to your homepage. You can now manage your information.</p>
        
        <div class="logout">
            <a href="logout.php" class="button">Logout</a>
        </div>
    </div>
</body>
</html>

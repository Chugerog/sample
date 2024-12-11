<?php
session_start();
if ($_SESSION['admin_type'] !== 'provincial_admin') {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincial IMS Admin</title>
</head>
<body>
    <h1>Welcome, Provincial Admin!</h1>
    <nav>
        <a href="admin_provincial_admin.php">Dashboard</a> | 
        <a href="../login.php">Logout</a>
    </nav>
    <section>
        <h2>Manage Provincial Data</h2>
        <button>Add Municipality</button>
        <button>View Municipality Data</button>
        <button>Generate Provincial Reports</button>
    </section>
</body>
</html>

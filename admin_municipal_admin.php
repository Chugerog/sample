<?php
session_start();
if ($_SESSION['admin_type'] !== 'municipal_admin') {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipal IMS Admin</title>
</head>
<body>
    <h1>Welcome, Municipal Admin!</h1>
    <nav>
        <a href="admin_municipal_admin.php">Dashboard</a> | 
        <a href="../login.php">Logout</a>
    </nav>
    <section>
        <h2>Manage Municipal Data</h2>
        <button>Add Barangay</button>
        <button>View Barangay Data</button>
        <button>Generate Municipal Reports</button>
    </section>
</body>
</html>

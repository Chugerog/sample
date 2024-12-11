<?php
// Include the database configuration file
include('config.php');

// Initialize variables
$message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check for admin login in the database
    $stmt = $conn->prepare("SELECT * FROM admins WHERE Username = ?");
    $stmt->bind_param('s', $username); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Directly compare plain-text passwords
        if ($password === $row['Password']) {
            session_start();
            $_SESSION['role'] = 'admin';
            $_SESSION['admin_id'] = $row['admin_id']; // Store the admin's ID in session
            $_SESSION['admin_name'] = $row['name']; // Store the admin's name
            $_SESSION['admin_type'] = $row['admin_id']; // Store the admin type (based on admin_id)

            // Redirect based on admin type
            switch ($row['admin_id']) {
                case 1:
                    header("Location: admin_barangay_admin.php");
                    break;
                case 2:
                    header("Location: admin_municipal_admin.php");
                    break;
                case 3:
                    header("Location: admin_provincial_admin.php");
                    break;
            }
            exit;
        } else {
            $message = 'Invalid password. Please try again.';
        }
    } else {
        $message = 'Invalid username. Please try again.';
    }
}

// Check for user login in the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param('s', $username); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Directly compare plain-text passwords
        if ($password === $row['password']) {
            session_start();
            $_SESSION['role'] = 'user';
            $_SESSION['username'] = $username;

            // Redirect to user page
            header("Location: user-page.php");
            exit;
        } else {
            $message = 'Invalid password. Please try again.';
        }
    } else {
        $message = 'Invalid username. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f9; }
        .container { max-width: 400px; margin: auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #333; }
        form { display: flex; flex-direction: column; }
        label { margin-bottom: 5px; font-weight: bold; }
        input { margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px; color: #fff; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if ($message): ?>
            <p class="error"><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

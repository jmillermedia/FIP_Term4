<?php
require_once '../load.php';
confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<h2>Welcome to the dashboard page <?php echo $_SESSION['user_fname']; ?></h2>

<a href="admin_logout.php">Sign out</a>
    
</body>
</html>
<?php
require '../load.php';

if(isset($_SESSION['user_id'])){
    redirect_to("index.php");
}

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(!empty($username) && !empty($password)){
        $result = login($username,$password);
        $message = $result;
    } else{
        $message = 'Please fill out the required fields ';
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the admin panel</title>
</head>
<body>
<?php echo !empty($message)?$message:''; ?>
<form action="admin_login.php" method="post">
    <label for="username">Username:</label>
    <input id="username" type="text" name="username" value="">
    <br><br>
    <label for="password">Password:</label>
    <input id="password" type="text" name="password">
    <br><br>
    <button type="submit" name="submit">Sign in</button>
</form>
    
</body>
</html>
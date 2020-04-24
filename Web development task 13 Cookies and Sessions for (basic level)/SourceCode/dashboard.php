<?php
session_start();
if (isset($_POST['uname']) && isset($_POST['psw'])) {
    $_SESSION['username'] = $_POST['uname'];
    $_SESSION['password'] = $_POST['psw'];
    
    echo "Welcome user" . $_SESSION['username'];
}

if (!empty($_POST)) {
    setcookie('username', $_POST['uname'], time() + 3600, '/');
    setcookie('password', $_POST['psw'], time() + 3600, '/');
} else {
    header('login.php');
}

if (!isset($_POST['remember'])) {
    session_destroy();
    setcookie('username', $_POST['uname'], time() - 3600, '/');
    setcookie('password', $_POST['psw'], time() - 3600, '/');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Dashboard</h1>
</body>
</html>
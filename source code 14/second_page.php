<!DOCTYPE html>
<html>
<head>
    <title>User Submission Form via AJAX</title>

</head>
<body>
    <?php
// write code to perform form submission and send response back to AJAX request
if (isset($_POST['first_name']) && ($_POST['last_name']) && ($_POST['email']) && ($_POST['password']) && ($_POST['phone_number']) && !empty($_POST['first_name']) && ($_POST['last_name']) && ($_POST['email']) && ($_POST['password']) && ($_POST['phone_number'])) {
    $fname    = $_POST['first_name'];
    $lname    = $_POST['last_name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone_number'];
    echo "<span id='result'>User information received.</span>";
    $error = true;
} else {
    echo "<span id='error'>Incomplete user information provided.</span>";
    $error = false;
}
?>

    
</body>
</html>

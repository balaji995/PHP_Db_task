<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    // Send the password to the user's email
    $subject = 'Your New Password';
    $message = 'Your new password is: ' . $password;
    mail($email, $subject, $message);

    // Save user data to the database (replace with your database code)
    // Example: $result = saveUserDataToDatabase($name, $mobile, $email, $dob, $password);

    if ($result) {
        echo "Registration successful! Check your email for the password.";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>

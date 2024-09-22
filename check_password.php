<?php
if (empty($_POST['password'])) {
    echo '<script>alert("Please type the password."); window.location.href = "index.html";</script>';
    exit();
}

$password = $_POST['password'];
if ($password === 'rtf256') {
    header('Location: protected_page.html');
    exit();
} else {
    echo '<script>alert("Incorrect password. Please try again."); window.location.href = "index.html";</script>';
}
?>

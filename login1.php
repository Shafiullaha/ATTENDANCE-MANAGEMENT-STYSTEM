<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $valid_name = "Shafiullah";
        $valid_email = "shafiullaha.21msc@kongu.edu";
        $valid_password = "31-mar-04";

        if ($name === $valid_name && $email === $valid_email && $password === $valid_password) {
            echo "success";
            exit;
        } else {
            echo "failure";
            exit;
        }
    } else {
        echo "invalid";
        exit;
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Invalid request method";
    exit;
}
?>

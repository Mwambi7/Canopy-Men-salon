<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database connection 
    $conn = new mysqli('localhost', 'root', '', 'signupcanopy');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (username, email, password, age) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $username, $email, $hashed_password, $age); // Use $hashed_password here
        if ($stmt->execute()) {
            echo "Registration Successfully...";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>

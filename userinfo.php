<?php
$con = mysqli_connect('localhost', 'root', '', 'foodwebsite');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch form data safely
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// Check if any field is empty
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    die("Error: All fields are required!");
}

// Prepared Statement to prevent SQL injection
$query = "INSERT INTO foodwebsite_form (name, email, mobile, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $message);
    
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);

?>

<?php

include "Components/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // Prepare SQL statement
    $sql = "INSERT INTO user_data (name, email, message, created_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";

    // Bind parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

    // Execute statement
    if (mysqli_stmt_execute($stmt)) {
        $response = "success";
    } else {
        $response = "error";
    }

    // Close statement
    mysqli_stmt_close($stmt);

} else {
    // If not a POST request, redirect to the form page
    // header("Location: /contact.html");
    echo "Method is not post";

    // exit;
}

// Close connection
$conn->close();

// Return response to JavaScript
echo $response;
exit;

?>

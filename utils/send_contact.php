<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
        
        // Initialize the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind the parameters
            $stmt->bind_param("sss", $name, $email, $message);
            
            // Execute the statement
            if ($stmt->execute()) {
                echo "Contact information sent successfully.";

                // Redirect to the contact page after 1 second
                header("refresh:1; url=../contact.php");
                
            } else {
                echo "Error: " . $stmt->error;
            }
            
            // Close the statement
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }
    
    // Close the database connection
    $conn->close();
}
?>
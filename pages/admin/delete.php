<?php
// Include database connection
include '../../utils/connection.php';

// Check if 'exp' parameter is set in the URL
if (isset($_GET['exp'])) {
    
    // Get the experience ID from the URL parameter
    $exp_id = $_GET['exp'];
    
    // Prepare an SQL statement to delete the experience with the given ID
    $sql = "DELETE FROM experiences WHERE id = ?";
    
    // Initialize a statement
    if ($stmt = $conn->prepare($sql)) {
        
        // Bind the experience ID to the statement as a parameter
        $stmt->bind_param("i", $exp_id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Experience deleted successfully. Redirecting...";
            header("refresh:1; url=../admin");
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}

// Check if 'contact' parameter is set in the URL
if (isset($_GET['contact'])) {
    
    // Get the contact ID from the URL parameter
    $contact_id = $_GET['contact'];
    
    // Prepare an SQL statement to delete the contact with the given ID
    $sql = "DELETE FROM contacts WHERE id = ?";
    
    // Initialize a statement
    if ($stmt = $conn->prepare($sql)) {
        
        // Bind the contact ID to the statement as a parameter
        $stmt->bind_param("i", $contact_id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Contact deleted successfully. Redirecting...";
            header("refresh:1; url=../admin");
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
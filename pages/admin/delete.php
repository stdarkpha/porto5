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

// Check if 'porto' parameter is set in the URL
if (isset($_GET['porto'])) {
    
    // Get the portfolio ID from the URL parameter
    $porto_id = $_GET['porto'];
    
    // Prepare an SQL statement to delete the portfolio with the given ID
    $sql = "DELETE FROM portofolios WHERE id = ?";
    
    // Initialize a statement
    if ($stmt = $conn->prepare($sql)) {
        
        // Bind the portfolio ID to the statement as a parameter
        $stmt->bind_param("i", $porto_id);
        
        // Fetch the image file path before deleting the record
        $image_sql = "SELECT img FROM portofolios WHERE id = ?";
        if ($image_stmt = $conn->prepare($image_sql)) {
            $image_stmt->bind_param("i", $porto_id);
            $image_stmt->execute();
            $image_stmt->bind_result($image_path);
            $image_stmt->fetch();
            $image_stmt->close();
        }

        // Define the target directory for the images
        $target_dir = "../../assets/upload/";

        // Check if the image file exists and delete it
        if (!empty($image_path) && file_exists($target_dir . $image_path)) {
            if (unlink($target_dir . $image_path)) {
            // Execute the statement only if the image file is successfully deleted
                echo "Image file deleted successfully. ";
                if ($stmt->execute()) {
                    echo "Portfolio deleted successfully. Redirecting...";
                    header("refresh:1; url=../admin");
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "Error: Unable to delete the image file.";
            }
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    header("refresh:1; url=../admin");
    
    // Close the database connection
    $conn->close();
}
?>
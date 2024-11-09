<?php
// Include the database connection file
include '../../utils/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $type = $_POST['type'];

    // upload img file to the server
    if (isset($_FILES["img"]) && $_FILES["img"]["error"] == 0) {
        $target_dir = "../../assets/upload/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if the image file is a actual image or fake image
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                $img = basename($_FILES["img"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                header("refresh:1; url=../admin");
                exit;
            }
        } else {
            echo "File is not an image.";
            header("refresh:1; url=../admin");
            exit;
        }
    } else {
        echo "No file was uploaded or there was an upload error.";
        header("refresh:1; url=../admin");
        exit;
    }

    $sql = "INSERT INTO portofolios (name, type, img) VALUES (?, ?, ?)";

    
    // Initialize the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters
        $stmt->bind_param("sss", $name, $type, $img);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Success! Redirecting...";
            header("refresh:1; url=../admin");
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
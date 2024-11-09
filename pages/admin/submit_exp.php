<?php
// Include the database connection file
include '../../utils/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the experience data from the POST request
    $start = $_POST['start'];
    $end = isset($_POST['end']) ? $_POST['end'] : null;
    $role = $_POST['role'];
    $company = $_POST['company'];
    $desc = $_POST['desc'];

    $id = isset($_POST['id']) ? $_POST['id'] : null;

    if ($id === null) {
        // Prepare an SQL statement to insert the experience data into the database
        $sql = "INSERT INTO experiences (start, end, role, company, `desc`) VALUES (?, ?, ?, ?, ?)";
    } else {
        // Prepare an SQL statement to update the experience data in the database
        $sql = "UPDATE experiences SET start = ?, end = ?, role = ?, company = ?, `desc` = ? WHERE id = ?";
    }

    // Initialize a statement
    if ($stmt = $conn->prepare($sql)) {
        if ($id === null) {
            // Bind the experience data to the statement as parameters
            $stmt->bind_param("sssss", $start, $end, $role, $company, $desc);
        } else {
            // Bind the experience data and id to the statement as parameters
            $stmt->bind_param("sssssi", $start, $end, $role, $company, $desc, $id);
        }

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

    // Close the database connection
    $conn->close();
}
?>
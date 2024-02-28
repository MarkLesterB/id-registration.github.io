<?php
include('conn.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentNumber = $_SESSION['students']['studentNumber'];
        // Retrieve feedback message from POST data
        $feedback_message = $_POST['message'];
        
        // Insert into feedback table
        $sql = "INSERT INTO feedback (studentNumber, message) VALUES ('$studentNumber', '$feedback_message')";
        
        if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    }

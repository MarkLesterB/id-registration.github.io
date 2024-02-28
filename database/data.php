<?php
    $studentNumber = $_SESSION['students']['studentNumber'];
    $idType = $_SESSION['idType'];
    $reason = $_SESSION['reason'];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "student_data"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Extract data from the first form
    $studentNumber = $_SESSION['students']['studentNumber'];
    $idType = $_SESSION['idType'];
    $reason = $_SESSION['reason'];
    $first_name = $_SESSION['first_name'];
    $middle_name = $_SESSION['middle_name'];
    $last_name = $_SESSION['last_name'];
    $gender = $_SESSION['gender'];
    $birthdate = $_SESSION['birthdate'];
    $home_address = $_SESSION['home_address'];
    $phone_number = $_SESSION['phone_number'];
    $email = $_SESSION['email'];
    $college = $_SESSION['college'];
    $year_section = $_SESSION['year_section'];

    // Extract data from the third form
    $contact_person = isset($_POST['contact_person']) ? $_POST['contact_person'] : "";
    $guardian_address = isset($_POST['guardian_address']) ? $_POST['guardian_address'] : "";
    $guardian_contact = isset($_POST['guardian_contact']) ? $_POST['guardian_contact'] : "";


        // Prepare and execute the SQL INSERT query
        $sql = "INSERT INTO idapplication (studentNumber, idType, reason, first_name, middle_name, last_name, gender, birthdate, home_address, phone_number, email, college, year_section, contact_person, guardian_address, guardian_contact) VALUES ('$studentNumber', '$idType', '$reason', '$first_name', '$middle_name', '$last_name', '$gender', '$birthdate', '$home_address', '$phone_number', '$email', '$college', '$year_section', '$contact_person', '$guardian_address', '$guardian_contact')";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}

$conn->close();






<?php
// Include your database connection file or establish connection here
// Example: include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $faculty = $_POST['faculty'];
    $subject = $_POST['subject'];
    $standard = $_POST['standard'];
    $timing = $_POST['timing'];
    
    // Perform validation
    $errors = array();

    // Check if fields are empty
    if (empty($faculty)) {
        $errors[] = "Faculty field is required.";
    }
    if (empty($subject)) {
        $errors[] = "Subject field is required.";
    }
    if (empty($standard)) {
        $errors[] = "Standard field is required.";
    }
    if (empty($timing)) {
        $errors[] = "Timing field is required.";
    }

    // If there are no validation errors, proceed to save data
    if (empty($errors)) {
        //  Save data to database
        //  Example:
         $sql = "INSERT INTO your_table_name (faculty, subject, standard, timing, creation_datetime) VALUES ('$faculty', '$subject', '$standard', '$timing', NOW())";
         $result = mysqli_query($conn, $sql); // Execute SQL quer
        //  Check if data is saved successfully
         if ($result) {
             echo "Data saved successfully!";
         } else {
             echo "Error: " . mysqli_error($conn);
        }

        // Close database connection if needed
        // Example: mysqli_close($conn);
    } else {
        // If there are validation errors, display them
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

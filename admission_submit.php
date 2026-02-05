<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $grade   = $_POST['grade'] ?? '';
    $student = $_POST['student_name'] ?? '';
    $parent  = $_POST['parent_name'] ?? '';
    $email   = $_POST['parent_email'] ?? '';
    $phone   = $_POST['parent_phone'] ?? '';
    $dob     = $_POST['dob'] ?? null;

    // Basic validation
    if ($grade && $student && $parent && $email && $phone) {

        $query = "INSERT INTO admissions 
        (grade, student_name, parent_name, parent_email, parent_phone, dob)
        VALUES 
        ('$grade', '$student', '$parent', '$email', '$phone', '$dob')";

        mysqli_query($conn, $query);

        // Redirect after successful submit
        header("Location: index.php?success=1");
        exit;
    }
}

// If accessed directly
header("Location: index.php");
exit;

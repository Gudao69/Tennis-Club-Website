<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'tennisclub';
    $table_name = 'members';

    // Establish database connection
    $connect = mysqli_connect($host, $user, $password, $database) or die("Could not connect to the database");

    // Validate and sanitize user inputs
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Check if any field is empty
    if (empty($username) || empty($email) || empty($password)) {
        die('Error: Please fill in all fields');
    }

    // Perform additional input validation if needed

    // SQL query to insert data into the table
    $sql = "INSERT INTO $table_name (username, email, password) 
            VALUES ('$username', '$email', '$password')";

    // Execute the query
    if (!mysqli_query($connect, $sql)) {
        die('Error: ' . mysqli_error($connect));
    } else {
        // Redirect upon successful insertion
        header("Location: ../membership.html");
        exit;
    }

    // Close the database connection
    mysqli_close($connect);
?>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $campus = $_POST['campus'];
    $events = $_POST['events'];
    $note = $_POST['note'];

    // Validate and sanitize the data (you should enhance this based on your requirements)

    // Connect to the database (replace with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tennisclub";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO eventsdetails (firstname, lastname, email, campus, events, note)
            VALUES ('$fname', '$lname', '$email', '$campus', '$events', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>('Record Added Successfully <3');</script>";
        header("Location: ../events.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

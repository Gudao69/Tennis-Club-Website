<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_details']))
{
    $did = mysqli_real_escape_string($con, $_POST['delete_details']);

    $query = "DELETE FROM eventsdetails WHERE id='$did' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: events.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: events.php");
        exit(0);
    }
}

if(isset($_POST['update_member']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $campus = mysqli_real_escape_string($con, $_POST['campus']);
    $events = mysqli_real_escape_string($con, $_POST['events']);
    $note = mysqli_real_escape_string($con, $_POST['note']);

    // Validate if essential fields are not empty
    if(empty($firstname) || empty($lastname) || empty($email) || empty($campus) || empty($events) || empty($note)) {
        $_SESSION['message'] = "Please fill in all the fields";
        header("Location: events.php");
        exit(0);
    }

    // If fields are not empty, proceed with updating data
    $query = "UPDATE eventsdetails SET firstname='$firstname', lastname='$lastname', email='$email', campus='$campus', events='$events', note='$note' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Updated Successfully";
        header("Location: events.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: events.php");
        exit(0);
    }
}


if(isset($_POST['save_member'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $campus = mysqli_real_escape_string($con, $_POST['campus']);
    $events = mysqli_real_escape_string($con, $_POST['events']);
    $note = mysqli_real_escape_string($con, $_POST['note']);

    // Validate if fields are not empty
    if(empty($firstname) || empty($lastname) || empty($email) || empty($campus) || empty($events) || empty($note)) {
        $_SESSION['message'] = "Please fill in all the fields";
        header("Location: events-create.php");
        exit(0);
    }

    // If fields are not empty, proceed with inserting data
    $query = "INSERT INTO eventsdetails (firstname,lastname,email,campus,events,note) VALUES ('$firstname','$lastname','$email','$campus','$events','$note')";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Registered Successfully";
        header("Location: events.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Registered";
        header("Location: events.php");
        exit(0);
    }
}

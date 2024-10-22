<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_member']))
{
    $member_id = mysqli_real_escape_string($con, $_POST['delete_member']);

    $query = "DELETE FROM members WHERE id='$member_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: members.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: members.php");
        exit(0);
    }
}

if(isset($_POST['update_member'])) {
    $member_id = mysqli_real_escape_string($con, $_POST['id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Validate if fields are not empty
    if(empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all the fields";
        header("Location: members.php");
        exit(0);
    }

    // If fields are not empty, proceed with updating data
    $query = "UPDATE members SET username='$username', email='$email', password='$password' WHERE id='$member_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Member Updated Successfully";
        header("Location: members.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: members.php");
        exit(0);
    }
}


if(isset($_POST['save_member'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Validate if fields are not empty
    if(empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all the fields";
        header("Location: admin-create.php");
        exit(0);
    }

    // If fields are not empty, proceed with inserting data
    $query = "INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$password')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Member Created Successfully";
        header("Location: admin-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Member Not Created";
        header("Location: admin-create.php");
        exit(0);
    }
}
?>
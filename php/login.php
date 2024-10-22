<?php
if(isset($_POST['login']))
{
if(!empty($_POST['username']) && !empty($_POST['password'])) 
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $con=mysqli_connect('localhost','root','','tennisclub') or die(mysql_error());
    $query=mysqli_query($con,"SELECT * FROM members WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysqli_num_rows($query);
    if ($numrows != 0) 
    {
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }
    
        if ($user == "admin" && $pass == $dbpassword) 
        {
            header("Location: ../admin/admin.php");
            exit;
        }
    
        if ($user == $dbusername && $pass == $dbpassword) 
        {
            header("Location: ../home.html");
            exit;
        }
    }
    
    else 
    {
        echo "<script>alert('Invalid Username or Password!!!!');</script>";
        header("Location: ../membership.html");
    }
} 
else 
{
    echo "<script>alert('All Fields are required!!!!');</script>";
}
}
?>
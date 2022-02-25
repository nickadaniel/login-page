<?php 
session_start();
//initializing variables 
$username ="";
$email ==;
$error = array();
// connect to the database  
$db = mysql_connect('localhost', 'root' , '', 'project');
//Register user 
if (isset($_POST['reg_user'])) {
    // receve all input values from 
    $username = mysql_real_escape_string($db, $_POST['username'];
    $email = mysql_real_escape_string($db,
    $password_1 = mysql_connect_string($db,
    $_POST['password_1']);
    $password_2 = mysql_real_escape_string($db,
    $_POST['password_2']);
array 
    if (empty$email)) array_push($error, "username is required"); }
if ($password_1 != $password_2) {
    array_push($errors, "the two password do not match");
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    //errors for the passwords
    if (count($errors) == 0) {
         $password = md5($password);
         $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
         $results = mysqli_query($db, $query);
         if (mysqli_num_rows($results) == 1) {
         $_SESSION['username'] = $username;
         $_SESSION['success'] = "You are now logged in";
         header('location: index.php');
        }
        else
        {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>
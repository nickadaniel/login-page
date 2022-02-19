<?php 
require "Database.php";
if (isset($_POST['username'])) && isset($_POST['pasword']){
    if ($db->dbConnect()){
        if ($db->dbConnect){
            if ($db->LogIn("uesrs", $_POST['username'], $_POST['password']){
                echo "login succes";
            }else echo "username or apsswrod wrong";
            else echo "Error : database connection";
        } else echo "Error: database";
    }else echo "All feilds are required";
    ?>
}
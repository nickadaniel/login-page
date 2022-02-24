<!DOCTYPE html>
<html>
    <body>
<?php 
session_start();

// initializing variables 
$username = "";
email = "";
$errors = array();

// connnect to the database
$db = mysql_connect('localhost', 'root', '', 'project');

if ($db->connect_error) {
    die("connectoin failed: " .$db->connect_error);
}

$sql = "SELECT id, username, email,img FROM users";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    //output data each row 
    while($row = $result->fetch_assoc()) {
        print "" <br> id: ". $row[id"]. "<br> - Name: ". 

$row ["username"]. "<br> - Email: " . $row["email"] . "<br>";
print "<img src=\"" .$row["img"]."/">;
    }
} else {
    print "0 results";
}

$db->close();
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SampleDB";
$user=$_POST['uname'];
$pass=$_POST['psw'];
$con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('SampleDB') or die("cannot select DB");
$query=mysql_query("SELECT * FROM sampletable WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysql_num_rows($query);
if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
        $dbusername=$row['username'];
        $dbpassword=$row['password'];
    }
    if($user == $dbusername && $pass == $dbpassword)
    {
        echo "Successfully logged In!";
    } else {
        echo "Invalid username or password.";
    }
    }
?>
</body>
</html>
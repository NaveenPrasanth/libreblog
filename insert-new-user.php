<?php
session_start();
$_SESSION["user"]= $_POST["username"];
$connect=  mysqli_connect("localhost", "root1", "12345", "libreblog");

$createQuery= "insert into blogusers (Username , Password ,Email) values(\"".$_SESSION["user"]."\",\"".$_POST["password"]."\",\"".$_POST["email"]."\")";  

mysqli_query($connect, $createQuery);

echo "User succesfully created";

echo "<form method=\"link\" action=\"panel.php\">
            <input type=\"submit\" value=\"Start\">
        </form>";
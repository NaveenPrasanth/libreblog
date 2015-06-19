<?php
session_start();
$_SESSION["user"]=$_POST["username"];
$userid = $_SESSION["user"];

$pass=$_POST["password"];
$user=$_POST["username"];
$connect=  mysqli_connect("localhost", "root1", "12345", "libreblog");


$checkQuery= "select * from blogusers where Username ="."\"$userid\"";

$result=mysqli_query($connect, $checkQuery);

$row = mysqli_fetch_array($result);
    if($row["Password"]==$pass){
        echo "login succesfull".", welcome ".$userid;
         echo "<form method=\"link\" action=\"panel.php\">
            <input type=\"submit\" value=\"Start blogging\">
        </form>";
    }
    
    else{
        echo "Password mismatch";
        
    }
       
    
   

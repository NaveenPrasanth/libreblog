<?php

$connection = mysqli_connect("localhost", "root1", "12345", "testiis");

$query1 = "insert into iisdetails (Name , Password) values (\"".$_POST["name"]."\",\"".$_POST["password"]."\")";

mysqli_query($connection, $query1);

$select = "select * from iisdetails ";

$result=mysqli_query($connection, $select);

while($row=  mysqli_fetch_array($result))
{
    echo "the name is".$row["Name"]."<br>";
}
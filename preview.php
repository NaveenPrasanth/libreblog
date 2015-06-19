<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    <h1>BLOG</h1>
        <title>BLOG </title>
    </head>
    <body>
        <?php
            
         $connect=  mysqli_connect("localhost", "root1", "12345", "libreblog");
         $query= "update blogusers set Content=\"".$_POST["newcontent"]."\" where Username=\"".$_SESSION["user"]."\"";
         mysqli_query($connect, $query);
         
        echo "<div>".$_POST["newcontent"]."</div>";
           ?>
        
    </body>
</html>

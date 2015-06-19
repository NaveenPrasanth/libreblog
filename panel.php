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
        <title></title>
        
        <script>
      var textarea = $("#area");
        $("#popup").click(function(){

        // To show it
       $('#area').show();

            });
    </script>
    </head>
    <body>
        <?php
         echo "Hello ".$_SESSION["user"];
         $connect=  mysqli_connect("localhost", "root1", "12345", "libreblog");
         $userid = $_SESSION["user"];
         $checkQuery= "select * from blogusers where Username ="."\"$userid\"";
         $result=  mysqli_query($connect, $checkQuery);
         $row = mysqli_fetch_array($result);
         if($row["Content"])
         {
             echo "<br> Previous content has been found";
             echo "<br>".$_SESSION["user"]." has written:".$row["Content"];
         }
        ?>
       
        
        <form method="post" action="preview.php">
            <input type="submit" id="popup" value="edit the changes">
            <textarea rows="10" cols="50" name="newcontent" id="area" style="display"></textarea>
        </form>
    
    
    </body>
    
       
</html>

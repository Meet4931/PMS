<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $c= mysqli_connect("localhost","root","","demo");
            if(!$c)
            {
                die("Error in code");
            }
            echo "data retrived";
            $qu="select * from student";
            $q= mysqli_query($c,$qu);
            while($r=mysqli_fetch_row($qu))
            {
                echo $r[0];
                echo $r[1];
                echo $r[2];
                
            }
        ?>
    </body>
</html>

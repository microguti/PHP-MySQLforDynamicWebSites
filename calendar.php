<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendario</title>
        <style type="text/css" title="text/css" media="all">
            label{
                font-weight: bold;
                color: #300ACC;
            }
        </style>
    </head>
    <body>
        <form action="calendar.php" method="post">
            <?php
                //De esta manera creamos un array indizado de 1 al 12 en vez del 0 al 11
                $months = array (1=>'January','Frebruary','March','April','June','July','August', 'September', 'October','November','December');
                $days = range (1, 31);
                $years = range (2014, 2021);
                echo '<select name="month">';
                foreach ($months as $key=>$value){
                    echo "<option value=\"$key\">$value</option>\n";
                }
                echo '</select>';
                
                echo '<select name="dias">';
                foreach ($days as $value){
                    echo "<option value=\"$value\">$value</option>\n";
                }
                echo '</select>';
                
                echo '<select name="año">';
                foreach ($years as $value){
                    echo "<option value=\"$value\">$value</option>\n";
                }
                echo '</select>';
                ?>
        </form>
       
    </body>
</html>
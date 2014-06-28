<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback</title>
    </head>
    <body>
        <?php
            $name= $_REQUEST['name'];
            $email= $_REQUEST['email'];
            $comments = $_REQUEST['comments'];
            if (isset($_REQUEST['gender'])){
                $gender =$_REQUEST['gender'];
            }else{
                $gender=NULL;
            }
            echo "<p>Thank you, <b>$name</b> , por el siguiente comentario:<br/> <tt>$comments</tt></p><p> We will reply to you at <i>$email</i></p>\n";
            IF ($gender == 'M'){
                echo '<p><b>Good day, Sir!</b></p>';
            } elseif ($gender == 'F'){
                echo '<p><b>Good day Madam!</b></p>';
            } else{
                echo '<p><b>Olvidaste introducir tu sexo</p></b>';
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Formulario HTML</title>
        <style type="text/css" title="text/css" media="all">
            .error{
                font-weight: bold;
                color: #C00;
            }
        </style>
    </head>
    <body>
        <?php
            if (!empty($_REQUEST['name'])){
                $name = $_REQUEST['name'];
            } else {
                $name =NULL;
                echo '<p class="error">Olvidaste poner el nombre!</p>';
            }
            
            if (!empty($_REQUEST['email'])){
                $email = $_REQUEST['email'];
            } else {
                $email =NULL;
                echo '<p class="error">Olvidaste poner el email!</p>';
            }
            
            if (!empty($_REQUEST['comments'])){
                $comments = $_REQUEST['comments'];
            } else {
                $comments =NULL;
                echo '<p class="error">Olvidaste poner comentarios!</p>';
            }
            
            if (!empty($_REQUEST['gender'])){
                $gender = $_REQUEST['gender'];
            }else{
                $gender = NULL;
                echo '<p class ="error"><b>Olvidaste introducir tu sexo</p></b>';
            }
            if ($gender == 'M'){
                echo '<p><b>Good day, Sir!</b></p>';
            } elseif ($gender == 'F'){
                echo '<p><b>Good day Madam!</b></p>';  
            }
            if ($name && $email && $gender && $comments){
                echo "<p>Thank you, <b>$name</b> , por el siguiente comentario:<br/> <tt>$comments</tt></p><p> We will reply to you at <i>$email</i></p>\n";
            } else {
                echo'<p class ="error">Vuelve a rellenar el formulario de nuevo. </p> ';
            }
        ?>
       
    </body>
</html>

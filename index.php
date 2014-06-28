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
            label{
                font-weight: bold;
                color: #300ACC;
            }
        </style>
    </head>
    <body>
        <form action="newhandle_form.php" method="post">
            <fieldset><legend>Introduce tu informacion en el formulario: </legend>
                <p><label>Name<input type="text" name="name"></label></p>
                <p><label>Email Address:<input type="email" name="email" size="40" maxlength="60"></label></p>
                <p><label for="gender">Gender:</label><input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female</p>
                <p><label>Age:
                        <select name="age">
                            <option value="0-29">Under 30</option>
                            <option value="30-60">Between 30 and 60</option>
                            <option value="60+">Over 60</option>
                            
                        </select></label></p>
                <p><label>Comments:<textarea name="comments" rows="3" cols="40"></textarea></label></p>
            </fieldset>   
            <p align="center"><input type="submit" name="submit" value="Submit my information"></p>
        </form>
    </body>
</html>

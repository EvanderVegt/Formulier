<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            body{
                background-color:powderblue;
            }


            input,textarea,select{
                background-color:lightblue;
            }
            label{
                float: left;
                width: 110px;
                text-align: left;
            }

        </style>

        <title>Contactformulier</title>
    <h1>Contactformulier</h1>

</head>




</body>

<form action="Welkom_get.php" method="post">
    <br><br>
    <p>
        <label for="1">Naam:</label>
        <input type="text" id="1" name="naam" placeholder="Naam"><br><br>
        <label for="1">E-mail:</label>
        <input type="text" id="1" name="e-mail" placeholder="E-mailadres"><br><br>
        <label for="1">Geslacht:</label>
        <select id ="1" name="geslacht">
            <option value="Man">Man</option>
            <option value="Vrouw">Vrouw</option>
        </select><br><br><br><br>
        <label for="1">Telefoon:</label>
        <input type="text" id ="1" name="telefoon" placeholder="Telnr." maxlength="10" size="7"><br><br>
        <label for="1">Website:</label>
        <input type="text" id ="1" name="website" value="http://"><br><br>
        <label for="1">Bericht:</label>
        <textarea name="textfield" id="1" cols="50" rows="3" style="width: 300px; height: 50px;"></textarea><br><br>
        <label for="1">Bericht:</label>
        <input type="submit"id="1" value="Verzenden" id="button">
    </p>
</form>
<?php
?>
</body>
</html>
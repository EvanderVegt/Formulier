<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contactformulier</title>
    </head>
    <body>
        <form action="Welkom_get.php" method="post">
            <br><br>
            Naam    : <input type="text" name="naam"><br><br>
            E-mail  : <input type="text" name="adres"><br><br>
            Geslacht: <select>
                <option value="Man">Man</option>
                <option value="Vrouw">Vrouw</option>
            </select><br><br><br><br>
            Telefoon  : <input type="text" name="telefoon" maxlength="10" size="7"><br><br>
            Website   : <input type="text" name="website"><br><br>
            Bericht   : <textarea name"textfield" cols="50" rows="3" style=width: 300px; height: 200px;"></textarea><br><br>
            
            <input type="submit">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
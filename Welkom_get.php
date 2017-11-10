<html>
    <head>  
        <style>

            body{

                background-color: lightpink
            }
            label{
                float: left;
                width: 110px;
                text-align: left;
            }
        </style>
        <title>Verzonden</title>
    <h1>Ontvangen contactformuliergegevens</h1>
</head>
<body>
    
    
    
    <label>Naam:</label>
    <?php echo$_POST["naam"]; ?><br>
    <label>E-mail:</label>
    <?php echo $_POST["e-mail"]; ?><br>
    <label>Geslacht:</label>
    <?php echo $_POST["geslacht"]; ?><br>
    <label>Telefoonnr:</label>
    <?php echo $_POST["telefoon"]; ?><br>
    <label>Website:</label>
    <?php echo $_POST["website"]; ?><br>
    <label>Bericht:</label>
    <?php echo $_POST["textfield"]; ?><br>

    <?php
    $newline = PHP_EOL;
    $file = fopen('welkom.txt', 'a');
    fwrite($file, $newline);
    fwrite($file, $_POST["naam"]);
    fwrite($file, $newline);
    fwrite($file, $_POST["e-mail"]);
    fwrite($file, $newline);
    fwrite($file, $_POST["geslacht"]);
    fwrite($file, $newline);
    fwrite($file, $_POST["telefoon"]);
    fwrite($file, $newline);
    fwrite($file, $_POST["website"]);
    fwrite($file, $newline);
    fwrite($file, $_POST["textfield"]);
    fwrite($file, $newline);
    fclose($file);
    ?>
</body>
</html>






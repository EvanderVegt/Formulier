<html>
    <head>  
        <style>
            button{
                background-color: pink

            }
            body{

                background-color: lightpink
            }
            label{
                float: left;
                width: 110px;
                text-align: left;
            }
        </style>
        <<script>
            function show_content() {
                document.getElementById('hidden_content').style.display = 'table-caption';
            }

        </script>
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
    <?php echo $_POST["textfield"]; ?><br><br><br>
    <a href="#" onclick="show_content()">Open file, zoeken is (ctrl+F)</a> 




    <?php
    $myFile = "welkom.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);
    echo '<div id="hidden_content" style="display:none">' . $theData . '</div>';



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






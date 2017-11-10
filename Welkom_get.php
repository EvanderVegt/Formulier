<html>
    <head>  
        <style>

            body{

                background-color: lightpink

            }
        </style>
        <title>Verzonden</title>
    <h1>Ontvangen contactformuliergegevens</h1>
</head>
<body>

    Naam:  <?php echo$_POST["naam"]; ?><br>
    Woonadres: <?php echo $_POST["adres"]; ?><br>
    Geslacht: <?php echo $_POST["geslacht"]; ?><br>
    Telefoonnummer: <?php echo $_POST["telefoon"]; ?><br>
    Website: <?php echo $_POST["website"]; ?><br>
    Bericht: <?php echo $_POST["textfield"]; ?><br>

</body>
</html>






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

    

</body>
</html>






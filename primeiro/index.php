<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo em PHP</title>
</head>
<body>
    <p>Esse exemplo trás primeiro programa intergrado HTML + PHP</p>
    <!--Inicia codico PHP -->
    <?php
        echo "<h1>Olá Mundo do Server_Side Script com PHP</h1>";
        echo "<br>";
        date_default_timezone_get('America/Sao_Paulo');
        echo "Data e hora da execução: ".date('H:i:s d/m/Y');
    ?> 
    <!--Termina codico PHP -->
    <br>
    <br>
    <script language="JavaScript">
        document.while(new Date());
    </script>
</body>
</html>
<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="upload.php" enctype="multipart/form-data"> <!--Il metodo è post o get, di default mette get-->
    <!--Action: dopo aver inviato il form va a prendere l'altro file che gestisce i dati del form-->

    <h1>Informazioni</h1>
    <label for="nome">Nome: </label>
    <input id="nome" type="text" name="nome">
    <br>
    <label for="cognome">Cognome: </label>
    <input id="cognome" type="text" name="cognome">
    <br>
    <label for="file">File: </label>
    <input id="file" type="file" name="file">
    <br>
    <button type="submit">Invia</button>
</form>

</body>
</html>
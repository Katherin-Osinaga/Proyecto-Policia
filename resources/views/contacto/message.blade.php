<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de : {{ $msg['name'] }} con el email {{ $msg['mail'] }}</p><br>
    <p><strong>Sugerencia : {{ $msg['su'] }}</strong></p>    
    
</body>
</html>
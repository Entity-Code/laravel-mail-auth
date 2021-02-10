<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        {{$text}}
    </p>

    <p>
        Gentile signor <strong>{{Auth::user() -> name}}</strong>, 
        le auguro distinti Saluti,
    </p>

    - Mario Rossi 

    <em>
        Tel.: 06 xxx xxxx <br>
        Cell.: 329 xxx xxxx <br>
        Fax: 06 xxx xxxx <br>
        Indirizzo: Via Giacomo Leopardi, 27 – 000179 – RM
    </em>
    
</body>
</html>
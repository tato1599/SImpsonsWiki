<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpsonsWiki</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">


</head>

<body>
    <h1>The Simpsons Wiki</h1>
    <h4>Characters info</h4>
    <header>
        <ul>
            <button><a href="/">Home</a></button>
            <button><a href="/register">Register</a></button>
            <button><a href="/Login">Login</a></button>
        </ul>
    </header>

    <div class="principal">

     <?php include('/Users/danielneri/SimpsonCharacters/app/Http/Controllers/Controller.php')  ?>
    
    </div>
     



</body>

</html>
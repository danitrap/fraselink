<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fraselink</title>
</head>
<body>
    <h1>Fraselink</h1>
    Link creato!
    <p>Il tuo link &egrave;: {{ link_to('/'.$link->stub, $link->stub) }}</p>
</body>
</html>
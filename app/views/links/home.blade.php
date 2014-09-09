<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Fraselink</title>
</head>
<body>
    <h1>Fraselink</h1>
    {{ Form::open(['url' => '/store']) }}

    {{ Form::label('url', 'URL: ') }}
    {{ Form::text('url') }}
    {{ Form::submit('Crea')}}

    {{ Form::close() }}

</body>
</html>
<html>
    <head>
        <title>Mensaje de correo</title>
    </head>
    <body>
        <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
        <p><strong>Asunto:</strong>{{ $msg['subject'] }}</p>
        <p><strong>Contenido:</strong>{{ $msg['content'] }}</p>
    </body>
</html>


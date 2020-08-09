<!DOCTYPE html>
<html>
    <head>
        <title>Hello Laravel!</title>
    </head>
    <body>
        <h1>Hello</h1>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        Bienvenid@... <?= ($name) ?? "Invitado"; ?>
    </body>
</html>
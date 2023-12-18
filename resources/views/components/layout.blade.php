<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href={{asset("app.css")}}>
</head>
<body>

<main>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    {{ $slot }}
</main>

<footer>
    <p>© 2023 Sitio web de onboarding. Todos los derechos reservados.</p>
</footer>
</body>
</html>

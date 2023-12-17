<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datos personales</title>
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

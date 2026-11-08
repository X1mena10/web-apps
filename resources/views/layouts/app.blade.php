<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Actividad 11')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        nav { background: #1a1a1a; padding: 1rem; color: white; display: flex; justify-content: space-between; align-items: center; }
        nav ul { list-style: none; display: flex; gap: 15px; margin: 0; padding: 0; }
        nav ul li a { color: #ccc; text-decoration: none; padding: 8px 16px; border-radius: 4px; }
        /* Estilo para resaltar la sección activa automáticamente */
        nav ul li a.active { background-color: #00bcd4; color: white; font-weight: bold; }
        .container { padding: 2rem; min-height: 75vh; background: white; margin: 20px auto; max-width: 900px; border-radius: 8px; }
        footer { background: #1a1a1a; color: #888; text-align: center; padding: 1rem; margin-top: 2rem; }
    </style>
</head>
<body>

    <nav>
        <h2>Fieldnotes</h2>
        <ul>
            <li><a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/photos') }}" class="{{ request()->is('photos') ? 'active' : '' }}">Photos</a></li>
            <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Prepared by: Ximena Alexandra Posada Vázquez</p>
    </footer>

</body>
</html>
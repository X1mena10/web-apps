<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fotos - Turismo México</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; background-color: #f4f6f7;">

    <!-- Menú -->
    <nav style="background: #2c3e50; padding: 15px; text-align: center;">
        <a href="/home" style="color: white; margin: 0 15px; text-decoration: none; font-weight: bold;">Home</a>
        <a href="/photos" style="color: #f39c12; margin: 0 15px; text-decoration: none; font-weight: bold;">Photos</a>
        <a href="/contact" style="color: white; margin: 0 15px; text-decoration: none; font-weight: bold;">Contact</a>
    </nav>

    <!-- Contenido -->
    <div style="padding: 40px; text-align: center;">
        <h1>📸 Galería de Fotos de Destinos</h1>
        <p>Aquí puedes visualizar las vistas más impresionantes de Oaxaca, Cancún y la CDMX.</p>
    </div>

    <!-- Footer -->
    <footer style="background: #1a252f; color: white; text-align: center; padding: 15px; position: fixed; bottom: 0; width: 100%;">
        <p>Desarrollado por: <strong>Ximena Alexandra Posada Vázquez</strong> | Universidad Tecmilenio</p>
    </footer>

</body>
</html>

    <!-- Contenedor para alinear varias imágenes -->
    <div style="margin-top: 30px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        
        <!-- Foto 1 -->
        <div>
            <img src="{{ asset('images/oaxaca.jpeg') }}" alt="Oaxaca" style="width: 300px; height: 200px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            <p><strong>Oaxaca</strong></p>
        </div>

        <!-- Foto 2 -->
        <div>
            <img src="{{ asset('images/cancun.jpeg') }}" alt="Cancún" style="width: 300px; height: 200px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            <p><strong>Cancún</strong></p>
        </div>

        <!-- Foto 3 -->
        <div>
            <img src="{{ asset('images/cdmx.jpeg') }}" alt="CDMX" style="width: 300px; height: 200px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            <p><strong>CDMX</strong></p>
        </div>

    </div>
</div>
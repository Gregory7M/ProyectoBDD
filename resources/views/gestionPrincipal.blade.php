<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Mercado</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1>Administración de Mercado</h1>
            <div class="menu-icon" onclick="toggleMenu()">
                &#9776;
            </div>
            <nav id="dropdown-menu" class="dropdown-menu">
                <!-- Menu HTML aquí -->
            </nav>
        </header>
        <main>
            <h2>Gestión de Espacios y Puestos de Venta</h2>
            <table>
                <thead>
                    <tr>
                        <th>#Puesto</th>
                        <th>Ubicación</th>
                        <th>Estado</th>
                        <th>Precio de Alquiler</th>
                        <th>Concesionario</th>
                        <th>Contacto</th>
                        <th>Productos</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Salida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puestos as $puesto)
                        <tr>
                            <td>{{ $puesto->ID_Puesto }}</td>
                            <td>{{ $puesto->Ubicacion }}</td>
                            <td>{{ $puesto->Estado }}</td>
                            <td>{{ $puesto->Precio_Alquiler }}</td>
                            <td>{{ $puesto->Concesionario }}</td>
                            <td>{{ $puesto->Contacto }}</td>
                            <td>{{ $puesto->Productos }}</td>
                            <td>{{ $puesto->Fecha_Ingreso }}</td>
                            <td>{{ $puesto->Fecha_Salida }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="button-container">
                <button class="btn eliminar">ELIMINAR PUESTO</button>
                <button class="btn agregar">AGREGAR PUESTO</button>
                <li><a href="./principal.blade.php"><button class="btn volver">VOLVER</button></a></li>
            </div>
        </main>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdown-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }
    </script>
</body>
</html>

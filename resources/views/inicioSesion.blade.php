<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portada con Formularios de Inicio de Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 56px; background-color: #d9c2ab; }
        .navbar { background-color: #ccb693; }
        .navbar-brand, .nav-link { color: #6f4e37 !important; }
        .card { background-color: #f8f9fa; border: 1px solid #d9c2ab; }
        .card-header { background-color: #ccb693; color: #6f4e37; }
        .btn-primary { background-color: #6f4e37; border-color: #6f4e37; }
        .btn-primary:hover { background-color: #5a3d2b; border-color: #5a3d2b; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Regresar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5" id="admin-login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Inicio de Sesión para Administradores</h3>
                    </div>
                    <div class="card-body">
                        <div id="error-message" class="alert alert-danger" role="alert" style="display: none;"></div>
                        <form id="login-form" action="{{ url('/principal') }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="admin-email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="admin-email" name="admin-email" placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <div class="form-group">
                                <label for="admin-password">Contraseña</label>
                                <input type="password" class="form-control" id="admin-password" name="admin-password" placeholder="Ingrese su contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" href="{{ url('/principal') }}" >Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

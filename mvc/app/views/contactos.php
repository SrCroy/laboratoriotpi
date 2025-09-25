<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h2>Formulario de Contacto</h2>
        <form id="contactForm" method="POST" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required />
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Número de teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="7123-4567" required />
                <div class="form-text">Formato: 4 dígitos, guion, 4 dígitos (Ej: 7123-4567)</div>
            </div>
            <div class="mb-3">
                <label for="dui" class="form-label">Número de DUI</label>
                <input type="text" class="form-control" id="dui" name="dui" placeholder="01234567-8" required />
                <div class="form-text">Formato: 8 dígitos, guion, 1 dígito (Ej: 01234567-8)</div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>

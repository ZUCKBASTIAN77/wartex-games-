<?php
$mensaje_exito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    
    $mensaje_exito = "¡Datos recibidos con éxito! Hola, $nombre. Tu correo es $correo.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto PHP Sencillo</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 50px; text-align: center; }
        .contenedor { background: white; padding: 20px; border-radius: 8px; max-width: 400px; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .grupo { margin-bottom: 15px; text-align: left; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px; width: 100%; cursor: pointer; font-size: 16px; }
        .alerta { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
    </style>
</head>
<body>

    <div class="contenedor">
        <h1>Formulario PHP</h1>

        
        <?php if (!empty($mensaje_exito)): ?>
            <div class="alerta">
                <?php echo $mensaje_exito; ?>
            </div>
        <?php endif; ?>

    
        <form action="index.php" method="POST">
            <div class="grupo">
                <label>Nombre:</label>
                <input type="text" name="nombre" required>
            </div>

            <div class="grupo">
                <label>Correo Electrónico:</label>
                <input type="email" name="correo" required>
            </div>

            <button type="submit">Enviar al Servidor</button>
        </form>
    </div>

</body>
</html>

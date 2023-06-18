<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stylescont.css">
</head>
<body>
    <div class="form-container">
        <h2>Contáctanos</h2>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <div class="font-content">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre">
                </div>
                <div class="font-content">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Correo">
                </div>
            </div>

            <div class="form-group">
                <div class="font-content">
                    <label for="direction">Direccion</label>
                    <input type="text" id="direction" name="direction" placeholder="Direccion">
                </div>
                <div class="font-content">
                    <label for="phone">Telefono</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefono">
                </div>
            </div>
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <input class="btn" type="submit" name="contact" value="Enviar mensaje">        
        </form>
    </div>
    <?php
    include("contactos.php");
    ?>
</body>
</html>
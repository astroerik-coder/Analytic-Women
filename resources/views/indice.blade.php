<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="{{ asset( 'css/stylescont.css' ) }}" rel="stylesheet">
    <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
    <!-- Enlace al archivo CSS de Tailwind -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <!--Enlace del archivo de los iconos-->
    <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Barra de navegación -->
@component('layouts.components.navbar')@endcomponent
<!--Formulario de contactos-->
    <div class="form-container">
        <h2>Contáctanos</h2>
        <div class="objeto1"><i class="fa-solid fa-phone"> +0999785416</i><br><i class="fa-solid fa-phone">+0999785416</i><br><i class="fa-solid fa-phone">+0999785416</i></div>
        <div class="objeto2"><i class="fa-brands fa-whatsapp"> +0999785416</i><br><i class="fa-brands fa-whatsapp">+0984654656</i><br><i class="fa-brands fa-whatsapp">+0984649456</i></div>
        <div class="objeto3"><i class="fa-solid fa-envelope"> dschancusig@gmail.com</i><br><i class="fa-solid fa-envelope">dschancusig@gmail.com</i></div>
        <div class="objeto4"><i class="fa-solid fa-location-dot"> ESPE</i></div>
            <form method="post" autocomplete="off" action="indice">
                @csrf
                <br><b><h3>Formulario de contacto:</h3></b> 
                <div class="form-group">
                <div class="font-content">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="font-content">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" placeholder="Correo">
                </div>
            </div>

            <div class="form-group">
                <div class="font-content">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Direccion">
                </div>
                <div class="font-content">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
                </div>
            </div>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <input class="btn" type="submit" name="contact" value="Enviar mensaje">        
        </form>
        </div>
    </div>
 <!-- Barra del footer -->

 @component('layouts.components.footer') @endcomponent
   
</body>

</html>
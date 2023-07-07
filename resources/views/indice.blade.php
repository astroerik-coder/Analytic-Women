<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
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
    <!-- Tailwind Play: https://play.tailwindcss.com/qIqvl7e7Ww  -->


<!-- component -->

<body class="bg-white">
	<!-- Container -->
	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div
					class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
				></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-gray-300 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="pt-4 text-2xl text-center">Contactanos</h3>

					<form method="post" autocomplete="off" action="indice">
						@csrf
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
									Nombre
								</label>
								<input
									class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="nombre"
									name="nombre" 
									type="text"
									placeholder="Nombre"
								/>
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="apellidos">
									Apellido
								</label>
								<input
									class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="apellidos"
									name="apellidos" 
									type="text"
									placeholder="Apellido"
								/>
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
								Email
							</label>
							<input
								class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
								id="email"
								name="email" 
								type="email"
								placeholder="Email"
							/>
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Contraseña
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="password"
									name="password" 
									type="password"
									placeholder="******************"
								/>
								<p class="text-xs italic text-red-500">Escribe una contraseña.</p>
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="confirmacion">
									Confirmar contraseña
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="confirmacion"
									name="confirmacion" 
									type="password"
									placeholder="******************"
								/>
							</div>
						</div>
						<div class="mb-6 text-center">
						 </div>
						 <div class="mb-6 text-center">
							<button
								class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
								type="submit"
							>
								Registrar cuenta
							</button>
						</div>
							
						
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a
								class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
								href="#"
							>
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a
								class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
								href="./index.html"
							>
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
 <!-- Barra del footer -->

 @component('layouts.components.footer') @endcomponent
   
</body>

</html>
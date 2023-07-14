<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
    <!-- Enlace al archivo CSS de Tailwind -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <!--Enlace del archivo de los iconos-->
    <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Barra de navegación -->
@component('layouts.components.navbar')@endcomponent

<body class="bg-white">
	<!-- Container -->
	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div
					class="w-full h-auto bg-white hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
				></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
					<h3 class="pt-4 text-2xl text-center">Contáctanos!</h3><hr><br>

					<form method="post" autocomplete="off" action="contactanos">
						@csrf
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
									Nombre:
								</label>
								<input
									class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="nombre"
									name="nombre" 
									type="text"
									placeholder="Primer Nombre"
								/>
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="apellidos">
									Apellido:
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
								Email:
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
									Mensaje:
								</label>
								<textarea name="mensaje" id="mensaje" cols="60" rows="10" placeholder="Mensaje"></textarea>
								
							</div>
						</div>
						<div class="mb-6 text-center">
						 </div>
						 <div class="mb-6 text-center">
							<button
								class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
								type="submit"
							>
								Enviar mensaje
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

 @component('layouts.components.footer') @endcomponent
   
</body>

</html>
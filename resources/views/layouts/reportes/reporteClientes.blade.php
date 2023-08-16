<html>
<title>Reporte de clientes</title>

<head>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #BC799D;
            text-decoration: none;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #555555;
            background: #FFFFFF;
            font-size: 14px;
            font-family: SourceSansPro;
        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #BC799D;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 150px;
        }

        #company {
            float: right;
            text-align: right;
        }


        #details {
            margin-bottom: 50px;
        }

        .table-container {
            text-align: center;
            /* Centra horizontalmente el contenido */
            margin: 0 auto;
            /* Centra verticalmente el contenido */
            width: 100%;
            /* Asegura que la tabla ocupe todo el ancho del contenedor */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 20px;
            background: #EEEEEE;
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            text-align: justify;
        }

        table .no {
            color: #FFFFFF;
            font-size: 1.4em;
            background: #BC799D;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }


        table tfoot td {
            padding: 10px 20px;
            background: #FFFFFF;
            border-bottom: none;
            font-size: 1.2em;
            white-space: nowrap;
            border-top: 1px solid #AAAAAA;
        }

        table tfoot tr:first-child td {
            border-top: none;
        }

        footer {
            color: #777777;
            width: 80%;
            height: 30px;
            position: fixed;
            bottom: 0;
            border-top: 1px solid #BC799D;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="clearfix">

        <div id="company">
            <h1 class="name">Analytika Women</h1>
            <div class="address">Matriz - Quito</div>
            <div class="address">Sucursales - Pujili,Guayaquill</div>
            <div>+(593) 990-902-380</div>
            <div>+(593) 999-785-416</div>
            <div class="email"><a href="mailto:">analytikawomen@gmail.com</a></div>
        </div>
        </div>
    </header>
    <main>
        <div class="table-container">
            <!-- Agregado: contenedor de la tabla -->
            <h2>Reporte de clientes</h2>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th class="no">N.</th>
                    <th class="no">Nombre</th>
                    <th class="no">Fecha de nacimiento</th>
                    <th class="no">Teléfono</th>
                    <th class="no">Correo electrónico</th>
                    <th class="no">Título</th>
                    <th class="no">Experiencia</th>
                </tr>
                @foreach ($reporteCliente as $cliente)
                <tr>
                    <td>{{ $cliente->ID_CLT }}</td>
                    <td>{{ $cliente->NOMBRE_CLT }}</td>
                    <td>{{ $cliente->FECHA_NACIMIENTO_CLT }}</td>
                    <td>{{ $cliente->TELEFONO1_CLT}}</td>
                    <td>{{ $cliente->EMAIL_CLT}}</td>
                    <td>{{ $cliente->TITULO_CLT }}</td>
                    <td>${{ $cliente->EXPERIENCIA_CLT }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
    <footer>
        Transformamos datos en información para la toma de desiciones.
    </footer>
</body>

</html>
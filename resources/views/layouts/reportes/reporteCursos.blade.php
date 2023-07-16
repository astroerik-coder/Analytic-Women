<html>
<title>Reporte de cursos impartidos</title>

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
        <div id="logo">
            <img src="Ana">
        </div>
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

        <h2>Reporte de cursos impartidos</h2>
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th class="no">N.</th>
                <th class="no">Curso</th>
                <th class="no">Descripción</th>
                <th class="no">Público</th>
                <th class="no">Edad minima</th>
                <th class="no">Cupos</th>
                <th class="no">Costo</th>
            </tr>
            @foreach ($reporteCursos as $curso)
            <tr>
                <td>{{ $curso->ID_CUR }}</td>
                <td>{{ $curso->NOMBRE_CUR }}</td>
                <td>{{ $curso->DESCRIPCION_CUR }}</td>
                <td>{{ $curso->PUBLICO_CUR}}</td>
                <td>{{ $curso->EDAD_MINIMA_CUR}}</td>
                <td>{{ $curso->CUPOS_CUR }}</td>
                <td>${{ $curso->COSTO_CUR }}</td>
            </tr>
            @endforeach
        </table>
    </main>
    <footer>
        Transformamos datos en información para la toma de desiciones.
    </footer>
</body>

</html>
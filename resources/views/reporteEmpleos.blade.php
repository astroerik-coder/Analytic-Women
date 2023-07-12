<html>
<title>Reporte de empleos</title>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            margin-top: 0;
        }

        /* Establecer ancho fijo para las columnas de fecha */
        td.fecha {
            width: 120px;
        }
        td.descripcion {
            text-align: justify;
        }
    </style>
</head>
<body>
    <h2>Reporte de empleos</h2>
    <table>
        <tr>
            <th>N.</th>
            <th>Nombre del empleo</th>
            <th>Descripcion del empleo</th>
            <th>Modalidad</th>
            <th>Requisitos</th>
            <th>Salario</th>
            <th class="fecha">Fecha de inicio</th>
            <th class="fecha">Fecha de finalización</th>
            <th>Disponibilidad</th>
            <th>Comentarios</th>
        </tr>
        @foreach ($reporteEmpleo as $empleo)
            <tr>
                <td>{{ $empleo->id_empleo }}</td>
                <td>{{ $empleo->nombre_empleo }}</td>
                <td class="descripcion">{{ $empleo->descripcion_empleo}}</td>
                <td>{{ $empleo->modalidad_empleo}}</td>
                <td>{{ $empleo->requisitos_empleo}}</td>
                <td>${{ $empleo->salario_empleo}}</td>
                <td class="fecha">{{ $empleo->fechaInicio_empleo}}</td>
                <td class="fecha">{{ $empleo->fechaFinal_empleo}}</td>
                <td>{{ $empleo->disponibilidad_empleo}}</td>
                <td>{{ $empleo->comentarios_empleo}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

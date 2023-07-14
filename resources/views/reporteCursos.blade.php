<html>
<title>Reporte de cursos impartidos</title>
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
    <h2>Reporte de cursos impartidos</h2>
    <table>
        <tr>
            <th>N.</th>
            <th>Nombre del curso</th>
            <th>Descripcion del curso</th>
            <th>Instructor</th>
            <th class="fecha">Fecha de inicio</th>
            <th class="fecha">Fecha de finalización</th>
            <th>Número de participantes</th>
            <th>Comentarios</th>
        </tr>
        @foreach ($reporteCursos as $curso)
            <tr>
                <td>{{ $curso->id_curso }}</td>
                <td>{{ $curso->nombre_curso }}</td>
                <td class="descripcion">{{ $curso->descripcion_curso }}</td>
                <td>{{ $curso->instructor }}</td>
                <td class="fecha">{{ $curso->fechaInicio}}</td>
                <td class="fecha">{{ $curso->fechaFinal}}</td>
                <td>{{ $curso->numParticipantes }}</td>
                <td>{{ $curso->comentariosCursos }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

<html>
<title>Reporte de pago de cursos</title>
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
    </style>
</head>
<body>
    <h2>Reporte de pago de Servicios</h2>
    <table>
        <tr>
            <th>N.</th>
            <th>Nombre Cliente</th>
            <th>Curso</th>
            <th>Monto</th>
            <th>Método de pago</th>
            <th>Fecha de pago</th>
            <th>Estado de pago</th>
            <th>Comentarios</th>
        </tr>
        @foreach ($pagoCursos as $pago)
            <tr>
                <td>{{ $pago->id_pagocurso }}</td>
                <td>{{ $pago->nombrePersona }}</td>
                <td>{{ $pago->cursoPagado }}</td>
                <td>${{ $pago->montoPagado }}</td>
                <td>{{ $pago->metodoPago }}</td>
                <td class="fecha">{{ $pago->fechaPago }}</td>
                <td>{{ $pago->estadoPago }}</td>
                <td>{{ $pago->comentariosPago }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

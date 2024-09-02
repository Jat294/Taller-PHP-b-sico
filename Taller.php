<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller PHP</title>
</head>
<body>
    <h1>Aprendiendo PHP</h1>

    <h3>Promedio más alto</h3>
    <?php
        /*
        Crear un arreglo asociativo llamado $estudiantes donde cada clave es el nombre de un
        estudiante y el valor es un arreglo con las calificaciones de ese estudiante en diferentes
        asignaturas. Calcular el promedio de calificaciones para cada estudiante y luego mostrar
        al estudiante con el promedio más alto.
        */
        $estudiantes = array(
            "Juan" => array(10, 9, 8, 7, 6),
            "Pedro" => array(9, 8, 7, 6, 5),
            "Maria" => array(8, 7, 6, 5, 4),
            "Ana" => array(7, 6, 5, 4, 3),
            "Luis" => array(6, 5, 4, 3, 2)
        );

        $promedios = array();
        foreach ($estudiantes as $nombre => $calificaciones) {
            $suma = 0;
            foreach ($calificaciones as $calificacion) {
                $suma += $calificacion;
            }
            $promedios[$nombre] = $suma / count($calificaciones);
        }

        $mejorEstudiante = "";
        $mejorPromedio = 0;
       
        foreach ($promedios as $nombre => $promedio) {
            if ($promedio > $mejorPromedio) {
                $mejorEstudiante = $nombre;
                $mejorPromedio = $promedio;
            }
        }
        echo "<p> El estudiante con el promedio más alto es $mejorEstudiante con un promedio de $mejorPromedio </p>";
    ?>

    <h3>Empleados</h3>
    <?php 
        /*
        Crear un arreglo asociativo llamado $empleados donde cada clave es el nombre de un
        empleado y el valor es un arreglo con la información del empleado (nombre, salario, fecha de
        ingreso, departamento). Mostrar la información de todos los empleados.
        */
        $empleados = array(
            "Juan" => array("nombre" => "Juan", "salario" => 1000, "fechaIngreso" => "01/01/2020", "departamento" => "Ventas"),
            "Pedro" => array("nombre" => "Pedro", "salario" => 2000, "fechaIngreso" => "01/01/2019", "departamento" => "Marketing"),
            "Maria" => array("nombre" => "Maria", "salario" => 3000, "fechaIngreso" => "01/01/2018", "departamento" => "Ventas"),
            "Ana" => array("nombre" => "Ana", "salario" => 4000, "fechaIngreso" => "01/01/2017", "departamento" => "Marketing"),
            "Luis" => array("nombre" => "Luis", "salario" => 5000, "fechaIngreso" => "01/01/2016", "departamento" => "Ventas")
        );

        foreach ($empleados as $empleado) {
            echo "<p> Nombre: " . $empleado["nombre"] . "</p>";
            echo "<p> Salario: " . $empleado["salario"] . "</p>";
            echo "<p> Fecha de ingreso: " . $empleado["fechaIngreso"] . "</p>";
            echo "<p> Departamento: " . $empleado["departamento"] . "</p>";
            echo "<br>";
        }
    ?>
    <h3>Productos</h3>
    <?php
        /*
        Crear un arreglo asociativo llamado $productos donde cada clave es el nombre de un
        producto y el valor es un arreglo con la información del producto (nombre, precio, cantidad).
        Mostrar la información de todos los productos.
        */
        $productos = array(
            "Camisa" => array("nombre" => "Camisa", "precio" => 100, "cantidad" => 10),
            "Pantalón" => array("nombre" => "Pantalón", "precio" => 200, "cantidad" => 20),
            "Zapatos" => array("nombre" => "Zapatos", "precio" => 300, "cantidad" => 30),
            "Bolso" => array("nombre" => "Bolso", "precio" => 400, "cantidad" => 40),
            "Sombrero" => array("nombre" => "Sombrero", "precio" => 500, "cantidad" => 50)
        );

        foreach ($productos as $producto) {
            echo "<p> Nombre: " . $producto["nombre"] . "</p>";
            echo "<p> Precio: " . $producto["precio"] . "</p>";
            echo "<p> Cantidad: " . $producto["cantidad"] . "</p>";
            echo "<br>";
        }
    ?>
</body>
</html>


<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update creador
                            set correo_creador='$_REQUEST[mailnuevo]' 
                        where correo_creador='$_REQUEST[mailviejo]'") or
        die("No se pudo actualizar el dato:" . mysqli_error($conexion));
    echo "El mail fue modificado con exito";
    ?>
</body>

</html>
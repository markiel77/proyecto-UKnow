<html>

<head>
    <title>Problema</title>
</head>

<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
    die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select correo_usuarios from usuarios
                        where correo_usuarios='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from usuarios where correo_usuarios='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado mail.";
} else {
    echo "No existe ese mail.";
}
mysqli_close($conexion);
?>
</body>

</html>
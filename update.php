<html>

<head>
  <title>Problema</title>
</head>

<body>

<?php

$conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from creador
                        where correo_creador='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="update2.php" method="post">
    Ingrese nuevo mail:
    <input type="text" name="mailnuevo" value="<?php echo $_REQUEST['mail'] ?>">
<br>
    <input type="hidden" name="mailviejo" value="<?php echo $_REQUEST['mail'] ?>">
    <input type="submit" value="Modificar">
    </form>

<?php
} else
    echo "No existe alumno con dicho mail";
?>
</body>

</html>
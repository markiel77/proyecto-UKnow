<html>

<head>
  <title>registrousuario </title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuarios(cod_usuarios,nombre_usuarios,correo_usuarios,comunidad,suscriptos) values 
                      ($_REQUEST[cod_usuarios],'$_REQUEST[nombre_usuarios]','$_REQUEST[correo_usuarios]','$_REQUEST[comunidad]','$_REQUEST[suscriptos]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "gracias su inscripcion";
  ?>
</body>

</html>
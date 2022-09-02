<html>

<head>
  <title>registrocreador </title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into creador(cod_creador,nombre_creador,correo_creador,
  telefono,profesion,lugar_nacimiento,contrasena_creador) values 
                    ($_REQUEST[cod_creador],'$_REQUEST[nombre_creador]',
                    '$_REQUEST[correo_creador]','$_REQUEST[telefono]','$_REQUEST[profesion]',
                    '$_REQUEST[lugar_nacimiento]','$_REQUEST[clave]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "gracias por su inscripcion";

  ?>
</body>

</html>
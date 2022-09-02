<html>

<head>
  <title>registrocreador </title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "reportandocolinas") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into contenido(cod_contenido,tipo_contenido,visualizaciones,
  video,audio,texto) values 
                    ($_REQUEST[cod_contenido],'$_REQUEST[tipo_contenido]',
                    '$_REQUEST[visualizaciones]','$_REQUEST[video]','$_REQUEST[audio]',
                    '$_REQUEST[texto]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "gracias por su inscripcion";

  ?>
</body>

</html>
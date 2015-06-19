<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="container">
  <div class="card">
   
       <?php 
        include("conexion.php");
        $link=Conectarse();
        $result=mysql_query("SELECT * FROM galerias",$link);
        echo "<table>";
        echo '<thead>
          <tr>
              <th data-field="id"></th>
              <th data-field="name"></th>
              <th data-field="price"></th>
              <th data-field="el"></th>
          </tr>
        </thead>
          <tbody>';
          while ($row=mysql_fetch_row($result)) {
            echo '
          <tr>
            <td>'.$row[2].'</td>
            <td><a href="../galeria.php?idgaleria='.$row[0].'">Ver</a></td>
            <td><a href="editarGaleria.php?idgaleria='.$row[0].'">Editar</a></td>
            <td><a href="">Eliminar</a></td>
          </tr';
         }
        echo ' </tbody>
      </table>';
        ?>
  </div>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>

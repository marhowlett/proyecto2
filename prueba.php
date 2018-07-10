<?php
require 'conexionBD/connection.php';

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$sql="SELECT * from tipo_producto";
$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{

  $row="";
  while ($row = $result->fetch_array(MYSQLI_ASSOC))
  {
      $row[]=array($r['id_producto'],$r['cantidad'],$r['precio']);
  }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>test</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <select name="curso" id="curso" onchange="document.getElementById('data').value=this.options[this.selectedIndex].getAttribute('fecha')+'\n'+this.options[this.selectedIndex].getAttribute('descripcion')">
<?php foreach($row as $v){ ?>
    <option descripcion="<?php echo $v[2] ?>" fecha="<?php echo $v[1] ?>" value="<?php echo $v[0] ?>"><?php echo $v[0] ?></option>
<?php }?>
  </select>
  <textarea name="data" id="data"><?php echo $row[0][1]."\n".$row[0][2] ?></textarea>
</form>
</body>
</html>

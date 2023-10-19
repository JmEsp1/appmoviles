<?php
$id = $_POST["id"];
$con = mysqli_connect("localhost","id21023345_root","rootsa$5A","id21023345_juanma");

$resultado = $con->query('SELECT titulo,contexto FROM texto WHERE id = '.$id);

if (mysqli_num_rows($resultado) > 0) {
	while($rowData = mysqli_fetch_array($resultado)){
	    echo $rowData["titulo"].'<br>';
  		echo $rowData["contexto"].'<br>';
	}
}
?>
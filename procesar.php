<?php

require'conecta.php';


$nombre=$_POST["Nom"];

$mail=$_POST["Mail"];

$telefono=$_POST["Telef"];


$sql="INSERT INTO clientes(id_clientes, nombre, mail, telefono)VALUES(' ','$nombre','$mail','$telefono')";

$resultado=mysql_query($sql,$con);


if($resultado){
 echo "El registro se almaceno de manera correcta: ".$nombre." Mail: ".$mail." Telefono: ".$telefono;       
}else{
 die("Error de conexión".mysql_error());   

}

mysql_close($con);

?>
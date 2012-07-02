<?php
$nombre_parte=$_POST['nombre_parte'];//recojo el array de nombres
$codigo_parte=$_POST['codigo_parte']; // recojo el array de apellidos
$cantidad_parte=$_POST['cantidad_parte'];
if (isset($nombre_parte) && !empty($nombre_parte) && isset($codigo_parte) && !empty($codigo_parte) && isset($cantidad_parte) && !empty($cantidad_parte)){//controlo que haya algún dato en los array nombre y apellidos. Debe haber al menos uno de cada. 
$nomapellidos=array_combine($nombre_parte, $codigo_parte);//combino los arrays nombres y apellidos en uno, en el que el nombre es la clave y los apellidos el valor.
//aquí debes abrir la conexión y seleccionar la base...

$link = mysql_connect ('localhost', 'root', '');
    if (!$link){
        echo 'error al conectar';
        die;
    }
    $bd = mysql_select_db('daniel');
    if (!$bd){
        echo 'error al seleccionar la base d datos';
        die;
    }

$sql="insert INTO partepieza (nombre_parte,codigo_parte,cantidad_parte,'$cantidad_parte') VALUES ";//primera parte de la cadena de inserción
foreach($nomapellidos as $key => $value) { //recorro el array
 if (!empty($key) || !empty($value)) {$sql.=sprintf("('%s','%s'),", trim($key), trim($value));}//compruebo que al menos uno de los dos, nombre o apellido exista en cada input-array combinado, y los pongo en la cadena de inserción, habiéndole quitado los espacios en blanco anteriores o posteriores, frutos de errores al teclear.
}
$sql=rtrim($sql,',');//elimino la última coma sobrante
echo $sql;
$res=mysql_query($sql);}
else {echo 'escriba nombre y apellidos';}
?>
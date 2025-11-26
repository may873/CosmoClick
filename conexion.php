<?php

$serv="localhost";
$nomdb="astronomia_evl";
$usu="root";
$contrasena="";
$conex=new mysqli($serv,$usu,$contrasena,$nomdb);

if($conex -> connect_errno){
    die("error al conectar base de datos ".$conex->connect_errno);

}
else{
    print "<p>conexcion establecida con exito</p>";
}

?>
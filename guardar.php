<?php

//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)


    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $apellido=$_POST['apellido']; //name="correo"
    $edad=$_POST['edad'];
    $tlf=$_POST['tlf'];
    $mensaje=$_POST['mensaje'];
    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$apellido','$edad','$tlf','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
    }else{
        echo"datos guardado correctamente <br><a href='index.html'><h2>volver</h2></a>"; //si todo sale bien mandanos este mensaje
    }
     
?>
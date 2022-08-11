<?php
include('assets/conexion.php');

 $usuario=$_POST['usuario'];
 $clave=$_POST['clave'];
 

 if ($res = mysqli_query($con, "SELECT * FROM usuario_login WHERE usuario_login=".$usuario)) {
   // printf("La consulta devolvió %d filas.\n", $res->num_rows);
}


    if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        if(password_verify($clave, $row['password'])){
            echo "BIENVENIDO!!  Contraseña Válida";
        }else{
            echo "Error en la información ingresada";
        }
    }else{
        echo "Usuario No Encontrado";
    } 

 

?>
<?php

if (strcmp($_POST["password"], $_POST["password2"]) === 0){
include('assets/conexion.php');

	//Capturamos los datos recibidos
		$nombres = $_POST["nombres"];
		$telefono = $_POST["telefono"];
		$destinatario = $_POST["email"];
		$pais = $_POST["pais"];
		$password = $_POST["password"];
		$password2 = $_POST["password2"];
		$mensaje = $_POST["mensaje"];
	    $remitente = 'info@solucionestecnologicasyiramarcelapena.com'; 

  	//Ciframos la contraseña
		$clave_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));

    // Validamos datos ingresados por el usuario
		if(!isset($nombres) ||
		!isset($telefono) ||
		!isset($destinatario) ||
		!isset($pais)||
		!isset($password)||
		!isset($password2)) {
		?>

		<script type="text/javascript">alert('Ocurrió un error y el formulario no ha sido enviado.Por favor, vuelva atrás y verifique la información ingresada');
		window.location.href = "https://www.solucionestecnologicasyiramarcelapena.com/formulario.php";
		</script>

		<?php
		die();
		}

		//Guardamos los registros en la base de datos
		$sql = "INSERT INTO usuario (nombre, telefono, email, pais, password, fechaingreso) VALUES ('".$nombres."','".$telefono."','".$destinatario."','".$pais."','".$password."',now())";

		if (mysqli_query($con, $sql)) {
			$id =  mysqli_insert_id($con);
			//echo "Datos guardados correctamente";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}


		$sql2 = "INSERT INTO usuario_login (usuario_login, password, fecha_creacion, estado, id_usuario) VALUES ('".$id."','".$clave_cifrada."',now(),'1','".$id."')";


		if (mysqli_query($con, $sql2)) {
		    //echo "Datos guardados correctamente";
		} else {
		      echo "Error: " . $sql2 . "<br>" . mysqli_error($con); 
		}
		mysqli_close($con);



			//Enviamos el correo
		    $asunto = "Confirmación de Registro, Estimado(a) Sr(a). ".$nombres;  				
			$uniqueid= uniqid('np');
			// Enviamos el email usando la función mail() 
		    $headers  = "MIME-Version: 1.0\n";
		    $headers .= "X-Priority: 3\n";
		    $headers .= "X-MSMail-Priority: Normal\n";
		    $headers .= "X-Mailer: php\n";
		    $headers .= "From: \"".$remitente."\" <".$remitente.">\n".
		                'Reply-To: '.$remitente."\r\n" .
						'X-Mailer: PHP/' . phpversion();
			$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";


			$cuerpo .=	"Estimado Sr(a): ".$nombres.", a continuación relacionamos los datos del registro en nuestra plataforma:\r\n
						Nombre: ".$nombres."\r\n
						Teléfono: ".$telefono."\r\n
						País: ".$pais."\r\n
						Email: ".$destinatario."\r\n
						Usuario: ".$id."\r\n
						Contraseña: ".$password."\r\n
						Mensaje: ".$mensaje."\r\n
						Quedamos atentos a cualquier inquietud o comentario";


		    mail($destinatario, $asunto, $cuerpo, $headers);

			?>
			

			<script type="text/javascript">alert('Su registro Fue Exitoso, Al correo fue enviado el mensaje de confirmación Muchas Gracias');
			window.location.href = "https://www.solucionestecnologicasyiramarcelapena.com/formulario.php";
			</script>

<?php
}else{ ?>
			<script type="text/javascript">alert('Las contraseñas no coinciden');
			window.location.href = "https://www.solucionestecnologicasyiramarcelapena.com/formulario.php";
			</script>	
<?php
}
?>


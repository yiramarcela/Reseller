<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ing. Yira Marcela Peña García</title>
  <link rel="stylesheet" href="css/style.css">
  

  <script language="JavaScript">
    function comprobarClave(){
    clave1 = document.f1.password.value
    clave2 = document.f1.password2.value

    if (clave1 != clave2){
       alert("Las dos claves son distintas...\n"); 
       return false;
       }else {
    formulario.submit();
    return true;
      } 
    }  
  </script>

</head>   
<body>   


<div id="logo"> 
  <h1><i> Formulario de Registro</i></h1>
</div> 
<section class="stark-login">
  
  <form action="registro.php" method="post" name="f1">


  <table border="0">
    <tr>
      <td><h4>Nombres y Apellidos: </h4></td>
      <td><input type="text" name="nombres" pattern="[A-Za-z ]{1,200}" placeholder="Ingrese su Nombre Completo" required></td>
    </tr>

    <tr>
      <td><h4>Tel&eacute;fono: </h4></td>
      <td><input type="number" name="telefono" minlength="7"  placeholder="Ingrese su Número de Teléfono" required></td>
    </tr>

    <tr>
      <td><h4>Email: </h4></td>
      <td><input type="email" name="email" placeholder="Ingrese su Email" required></td>
    </tr>

  
    <tr>
      <td><h4>Pa&iacute;s: </h4></td>
      <td><select name="pais" required="">
        <option value="">Seleccione</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Colombia">Colombia</option>
          <option value="Venezuela">Venezuela</option>
           </select>
        </td>
    </tr>

    <tr>
      <td><h4>Contraseña: </h4></td>
      <td>
        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña" pattern="[a-zA-Z0-9]{6,15}" title="La contraseña debe estar compuesta por letras y/o números y tener una longitud entre 6 y 15 caracteres" required="" >
          <input type="password" name="password2" id="password2" placeholder="Repita su Contraseña" pattern="[a-zA-Z0-9]{6,15}" title="La contraseña debe estar compuesta por letras y/o números y tener una longitud entre 6 y 15 caracteres" required=""  onChange="compara();"  >
      </td>
    </tr>

    <tr>
      <td><h4>Mensaje: </h4></td>
      <td>   
        <textarea type="mensaje" placeholder="Mensaje"></textarea>
      </td>
    </tr> 

    <tr>
      <td><a style="font-size: 30px; color:white" href="login.php">LOGIN</a></td>
      <td><button type="submit" onClick="comprobarClave()">Registrar Datos </button></td>
    </tr>

  </table>  

       
 
      </form>
      <div class="hexagons">
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span> 
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            
            <br>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
              </div>      
            </section> 
            
            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>
            
            
            
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
  
</body>
</html>

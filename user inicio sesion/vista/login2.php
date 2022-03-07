<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} 
  .form-login {
  width: 400px;
  height: 340px;
  background: #4e4d4d;
  margin: auto;
  margin-top: 180px;
  box-shadow: 7px 13px 37px #000;
  padding: 20px 30px;
  border-top: 4px solid #017bab;
  color: white;
}

.form-login h5 {
  margin: 0;
  text-align: center;
  height: 40px;
  margin-bottom: 30px;
  border-bottom: 1px solid;
  font-size: 20px ;
  
}
.controls{
  width: 100%;
  border: 1px solid #017bab;
  margin-bottom: 15px;
  padding: 11px 10px;
  background: #252323;
  font-size: 14px;
  font-weight: bold;
}

.buttons{
  width: 100%;
  height: 40px;
  background: #017bab;
  border: none;
  color: white;
  margin-bottom: 16px;
}
</style>
<body>
<link href="css/signin.css" rel="stylesheet">
 <section class="form-login">
<h5>Iniciar sesion usuario</h5>
<form action="../controladores/login.php" method="POST">
  <!-- <label for="fname">correo:</label> -->
  <input class="controls" type="email" class="controls" placeholder="Correo" name="correo_cliente">
  <!-- <label for="lname">contraseña:</label> -->
  <input class="controls" type="password" class="controls" placeholder="Contraseña" id="lname" name="password">
  <button type="submit" class="buttons" name="btnInicio">Enviar</button>

  
  </section>
</form>
</body>
</html>

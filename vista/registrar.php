<!--
<h1>REGISTRO</h1>
<form method="POST" action="../controlador/login_regi.php">
	<input type="text" name="user" placeholder="Usuario"><br>
	<input type="password" name="password" placeholder="Contraseña"><br>
	<input type="submit" value="Registrar" name="btnregistrar">
	
	<a href="index.php" style="float:center;">Regresar</a>


</form>
-->

<!DOCTYPE html>
 <html>
 <head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body style="background-color: #FF8633">
  <h1 class="text-center p-3">Registrarse</h1>
  <div class="container-fluid row">
    <form class="col-4 m-auto" method="POST" action="../controlador/login_regi.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre y apellido del cliente</label>
              <input type="text" class="form-control" name="nom" placeholder="Nombre y apellido" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Direccion</label>
              <input type="text" class="form-control" name="dir" placeholder="Direccion" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="ciu" placeholder="Ciudad" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="user" placeholder="Usuario" >
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
  
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <a href="index.php" style="float:center;">Regresar</a>
         </form>
    



  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
 </html>

<!-- <a href="index.php?action=usuarios"><button type = "button" class="btn btn-danger" ><i class="ti-user"></i></button></a></td> -->
<div class="content">
        <div class = "container-fluid">
		  <h1>Añadir Usuario</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombre" placeholder="Nombre..." required >
					</div>

					<div class="form-group">
						<label>Apellido:</label>
						<input type="text" class="form-control" name="apellido"  placeholder="Apellido..." required >
					</div>

					<div class="form-group">
						<label>Username:</label><br>
						<input type="text" class="form-control" name="username"  placeholder="Nickname..." required >
					</div>
                    <div class="form-group">
						<label>Contraseña:</label><br>
						<input type="password" class="form-control"  name="contrasena" placeholder="Password..." required >
					</div>

					<div class="form-group">
						<label>Correo:</label>
						<input type="email" class="form-control" name="correo"  placeholder="Ingrese su correo..." required >
					</div>
					<button type="submit" name="registro" class="btn btn-success">Guardar</button>
				</form>
				</div>
                </div>
            </div>  
</div>

<?php
    $registro = new Controller();
    $registro->registrarUsuarioController();


?>
<div class="content">
        <div class = "container-fluid">
		  <h1>Añadir Categoria</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombre" placeholder="Nombre..." required >
					</div>

					<div class="form-group">
						<label>Descripcíon:</label>
						<input type="text" class="form-control" name="descripcion"  placeholder="Descripción..." required >
					</div>

					<button type="submit" name="registro" class="btn btn-success">Guardar</button>
				</form>
				</div>
                </div>
            </div>  
</div>

<?php
    $registro = new Controller();
    $registro->registroCatController();


?>
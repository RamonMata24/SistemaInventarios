<div class="content">
        <div class = "container-fluid">
		  <h1>Añadir Producto</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                

                    <div class="form-group">
						<label>Código:</label><br>
						<input type="text" class="form-control"  name="codigo" placeholder="Código..." required >
					</div>

					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombre" placeholder="Nombre..." required >
					</div>

					<div class="form-group">
						<label>Precio:</label>
						<input type="text" class="form-control" name="precio"  placeholder="Precio..." required >
					</div>

					<div class="form-group">
						<label>Stock:</label><br>
						<input type="number" class="form-control" name="stock"  placeholder="Stock..." required >
					</div>
                    <div class="form-group">
						<label>Categoria:</label><br>
						<input type="number" class="form-control"  name="categoria" placeholder="Categoria..." required >
					</div>

					<button type="submit" name="registro" class="btn btn-success">Guardar</button>
				</form>
				</div>
                </div>
            </div>  
</div>

<?php
    $registro = new Controller();
    $registro->registroProController();


?>
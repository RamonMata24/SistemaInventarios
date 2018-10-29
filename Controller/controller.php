<?php
class Controller{

    public function pagina(){
        include("View/template.php");
    }


    
	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}


	public function loginController(){

		if (isset($_POST['submit'])) {
			$usuario = array(
				'username' => $_POST['username'],
				'contrasena' => $_POST['password']			
			);

			$respuesta = Datos::loginModel($usuario, 'usuarios');

			if($respuesta['username'] == $_POST['username'] && $respuesta['contrasena'] == $_POST['password']){

				session_start();
				$_SESSION['validar'] = true;

				header('location: index.php?action=inicio');
			} else {
				header('location: index.php?action=fallo');
			}
		}

	}

	
	public function usuarios(){

	$count = Datos::count_users('usuarios');
	echo ($count);	

	}

	public function categorias(){

		$count = Datos::count_categorias('categorias');
		echo ($count);		
	}

	public function productos(){

		$count = Datos::count_productos('productos');
		echo ($count);		
	}





	//////////////////////////////////// USUARIOS ////////////////////////////////////

	public function registrarUsuarioController(){

		if (isset($_POST['registro'])) {
			
			$usuario = array(
				'nombre' => $_POST['nombre'],
				'apellido' => $_POST['apellido'],
				'username' => $_POST['username'],
				'contrasena' => $_POST['contrasena'],
				'correo' => $_POST['correo']
			);

			$respuesta = Datos::registrarUsuarioModel($usuario, 'usuarios');

			if($respuesta == "success"){
				header("location:index.php?action=usuarios");
			} else {
				header("location:index.php");
			}
		}
			
	}

	public function getUsers(){
		$respuesta = Datos::getUsers('usuarios');
		foreach ($respuesta as $usuario) {
			echo '<tr>
				<td>'.$usuario["id"].'</td>
				<td>'.$usuario["nombre"].'</td>
				<td>'.$usuario["apellido"].'</td>
				<td>'.$usuario["username"].'</td>
				<td>'.$usuario["contrasena"].'</td>
				<td>'.$usuario["correo"].'</td>
				<td>'.$usuario["fecha_registro"].'</td>
				<td><a href="index.php?action=editarUser&id='.$usuario["id"].'"><button class="btn btn-warning"><i class="ti-pencil-alt"></i></button></a></td>
				<td><a href="index.php?action=deleteUser&id='.$usuario["id"].'"><button class="btn btn-danger"><i class="ti-eraser"></i></button></a></td>
			</tr>';
		}		
	}


	public function deleteUserController(){
		
            if (isset($_GET['id'])) {
                $respuesta = Datos::deleteUserModel($_GET['id'], 'usuarios');
    
                if($respuesta == "success"){
                    header("location:index.php?action=usuarios");
                } else {
                    echo 'Error al eliminar usuario';
                }
            }
	}

	public function getUserController(){

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$respuesta = Datos::getUserModel($id, 'usuarios');
			  echo '  
			  <div class="content">
				<div class = "container-fluid">
					<div class="box-body">
					<div class="form-group">
					
					<input type="hidden" name="id" value="'.$respuesta["id"].'">
					
					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombre"  value="'.$respuesta["nombre"].'" >
					</div>

					<div class="form-group">
						<label>Apellido:</label>
						<input type="text" class="form-control" name="apellido"   value="'.$respuesta["apellido"].'" >
					</div>

					<div class="form-group">
						<label>Username:</label><br>
						<input type="text" class="form-control" name="username"  value="'.$respuesta["username"].'"   >
					</div>
                    <div class="form-group">
						<label>Contraseña:</label><br>
						<input type="password" class="form-control"  name="contrasena"  value="'.$respuesta["contrasena"].'"  >
					</div>

					<div class="form-group">
						<label>Correo:</label>
						<input type="email" class="form-control" name="correo"  value="'.$respuesta["correo"].'"   >
					</div>

					<input type="submit" class="btn btn-success" value = "Actualizar">
				
				</div>
                </div>
            </div>  
</div>                    
				';
		
		}

		
	}

	
	public function actualizarUserController(){

		if (isset($_POST['id'])) {

			$usuario = array(
				'id' => $_POST['id'],
				'nombre' => $_POST['nombre'],
				'apellido' => $_POST['apellido'],
				'username' => $_POST['username'],
				'contrasena' => $_POST['contrasena'],
				'correo' => $_POST['correo']
			);

			$respuesta = Datos::actualizarUsuarioModel($usuario, 'usuarios');

			if($respuesta == "success"){
				header("location:index.php?action=usuarios");
			} else {
				echo 'Error al actualizar usuario';
			}
		}
			
	}

	//////////////////////////////////// FIN USUARIOS ////////////////////////////////////


	//////////////////////////////////// CATEGORIAS ////////////////////////////////////

	public function getCategoria(){
		$respuesta = Datos::getCategoria('categorias');
		foreach ($respuesta as $categoria) {
			echo '<tr>
				<td>'.$categoria["id"].'</td>
				<td>'.$categoria["nombre"].'</td>
				<td>'.$categoria["descripcion"].'</td>
				<td>'.$categoria["fecha_agregado"].'</td>
				<td><a href="index.php?action=editarCat&id='.$categoria["id"].'"><button class="btn btn-warning"><i class="ti-pencil-alt"></i></button></a></td>
				<td><a href="index.php?action=deleteCat&id='.$categoria["id"].'"><button class="btn btn-danger"><i class="ti-eraser"></i></button></a></td>
			</tr>';
		}		
	}



	public function registroCatController(){

		if (isset($_POST['registro'])) {
			
			$categoria = array(
				'nombre' => $_POST['nombre'],
				'descripcion' => $_POST['descripcion']
			);

			$respuesta = Datos::registroCatModel($categoria, 'categorias');

			if($respuesta == "success"){
				header("location:index.php?action=categorias");
			} else {
				header("location:index.php");
			}
		}
			
	}
	public function getCatController(){

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$respuesta = Datos::getCatModel($id, 'categorias');
			  echo '  
			  <div class="content">
				<div class = "container-fluid">
					<div class="box-body">
					<div class="form-group">
					
					<input type="hidden" name="id" value="'.$respuesta["id"].'">
					
					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombreAct"  value="'.$respuesta["nombre"].'" >
					</div>

					<div class="form-group">
						<label>Descripción:</label>
						<input type="text" class="form-control" name="descripcionAct"   value="'.$respuesta["descripcion"].'" >
					</div>
					<input type="submit" class="btn btn-success" value = "Actualizar">
				
				</div>
                </div>
            </div>  
</div>                    
				';
		
		}

		
	}

	
	public function actualizarCatController(){

		if (isset($_POST['id'])) {

			$categoria = array(
				'id' => $_POST['id'],
				'nombre' => $_POST['nombreAct'],
				'descripcion' => $_POST['descripcionAct']
			);

			$respuesta = Datos::actualizarCatModel($categoria, 'categorias');

			if($respuesta == "success"){
				header("location:index.php?action=categorias");
			} else {
				echo 'Error al actualizar categoria';
			}
		}
			
	}


	public function deleteCatController(){
		
		if (isset($_GET['id'])) {
			$respuesta = Datos::deleteCatModel($_GET['id'], 'categorias');

			if($respuesta == "success"){
				header("location:index.php?action=categorias");
			} else {
				echo 'Error al eliminar la categoria';
			}
		}
}

	//////////////////////////////////// FIN CATEGORIAS ////////////////////////////////////
	
	//////////////////////////////////// PRODUCTOS ////////////////////////////////////

	
	public function getProductos(){
		$respuesta = Datos::getProductos('productos');
		foreach ($respuesta as $productos) {
			echo '<tr>
				<td>'.$productos["id"].'</td>
				<td>'.$productos["codigo"].'</td>
				<td>'.$productos["nombre"].'</td>
				<td>'."$".$productos["precio"].'</td>
				<td>'.$productos["stock"].'</td>
				<td>'.$productos["categoria"].'</td>
				<td>'.$productos["fecha_agregado"].'</td>
				<td><a href="index.php?action=editarPro&id='.$productos["id"].'"><button class="btn btn-warning"><i class="ti-pencil-alt"></i></button></a></td>
				<td><a href="index.php?action=deletePro&id='.$productos["id"].'"><button class="btn btn-danger"><i class="ti-eraser"></i></button></a></td>
			</tr>';
		}		
	}



	public function registroProController(){

		if (isset($_POST['registro'])) {
			
			$productos = array(
				'codigo' => $_POST['codigo'],
				'nombre' => $_POST['nombre'],
				'precio' => $_POST['precio'],
				'stock' => $_POST['stock'],
				'categoria' => $_POST['categoria']
			);

			$respuesta = Datos::registroProModel($productos, 'productos');

			if($respuesta == "success"){
				header("location:index.php?action=productos");
			} else {
				header("location:index.php");
			}
		}
			
	}
	public function getProController(){

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$respuesta = Datos::getProModel($id, 'productos');
			  echo '  
			  <div class="content">
				<div class = "container-fluid">
					<div class="box-body">
					<div class="form-group">
					
					<input type="hidden" name="id" value="'.$respuesta["id"].'">
					
                    <div class="form-group">
						<label>Código:</label><br>
						<input type="text" class="form-control"  name="codigo"  value="'.$respuesta["codigo"].'" >
					</div>

					<div class="form-group">
						<label>Nombre:</label><br>
						<input type="text" class="form-control"  name="nombre"  value="'.$respuesta["nombre"].'">
					</div>

					<div class="form-group">
						<label>Precio:</label>
						<input type="text" class="form-control" name="precio"  value="'.$respuesta["precio"].'">
					</div>

					<div class="form-group">
						<label>Stock:</label><br>
						<input type="number" class="form-control" name="stock"   value="'.$respuesta["stock"].'">
					</div>
                    <div class="form-group">
						<label>Categoria:</label><br>
						<input type="number" class="form-control"  name="categoria" value="'.$respuesta["categoria"].'" >
					</div>
					
					<input type="submit" class="btn btn-success" value = "Actualizar">
				
				</div>
                </div>
            </div>  
</div>                    
				';
		
		}

		
	}

	
	public function actualizarProController(){

		if (isset($_POST['id'])) {
			$productos = array(
				'id'=>$_POST['id'],
				'codigo' => $_POST['codigo'],
				'nombre' => $_POST['nombre'],
				'precio' => $_POST['precio'],
				'stock' => $_POST['stock'],
				'categoria' => $_POST['categoria']
			);

			$respuesta = Datos::actualizarProModel($productos, 'productos');

			if($respuesta == "success"){
				header("location:index.php?action=productos");
			} else {
				echo 'Error al actualizar el producto';
			}
		}
			
	}


	public function deleteProController(){
		
		if (isset($_GET['id'])) {
			$respuesta = Datos::deleteProModel($_GET['id'], 'productos');

			if($respuesta == "success"){
				header("location:index.php?action=productos");
			} else {
				echo 'Error al eliminar la producto';
			}
		}
}

}

?>
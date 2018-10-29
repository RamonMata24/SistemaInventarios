<?php 

require_once("conexion.php");

class Datos extends Conexion{
	

	public function loginModel($usuario, $tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT (username, contrasena) FROM $tabla WHERE username = :username AND contrasena = :contrasena");
        $stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);	
        $stmt->bindParam(':contrasena',$usuario['contrasena'],PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	public static function registrarUsuarioModel($usuario, $tabla){
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,apellido,username,contrasena,correo) VALUES (:nombre,:apellido,:username,:contrasena,:correo)");
		$stmt->bindParam(':nombre', $usuario['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':apellido', $usuario['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);
		$stmt->bindParam(':contrasena', $usuario['contrasena'], PDO::PARAM_STR);
		$stmt->bindParam(':correo', $usuario['correo'], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	public static function count_users($usuarios){
		$model = new Conexion();
		$conexion = $model->conectar();
		$sql = "SELECT COUNT(*) AS total FROM $usuarios";
		$stm = $conexion->prepare($sql);
		$stm->execute();
		$results = $stm->fetchall();
		$getCount = $results[0]['total'];
		return $getCount;
		
		
	}

	public static function count_categorias($categorias){
		$model = new Conexion();
		$conexion = $model->conectar();
		$sql = "SELECT COUNT(*) AS total FROM $categorias";
		$stm = $conexion->prepare($sql);
		$stm->execute();
		$results = $stm->fetchall();
		$getCount = $results[0]['total'];
		return $getCount;
		
		
	}

	public static function count_productos($productos){
		$model = new Conexion();
		$conexion = $model->conectar();
		$sql = "SELECT COUNT(*) AS total FROM $productos";
		$stm = $conexion->prepare($sql);
		$stm->execute();
		$results = $stm->fetchall();
		$getCount = $results[0]['total'];
		return $getCount;
		
		
	}

	//////////////////////////////////////// USUARIOS ////////////////////////////////////////////////////
	public function actualizarUsuarioModel($usuario, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, username = :username ,contrasena = :contrasena, correo = :correo  WHERE id = :id");		
		$stmt->bindParam(':nombre', $usuario['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':apellido', $usuario['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);
		$stmt->bindParam(':contrasena', $usuario['contrasena'], PDO::PARAM_STR);
		$stmt->bindParam(':correo', $usuario['correo'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $usuario['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	public function getUserModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();
	}


    public static function getUsers($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->close();
	}

	public static function deleteUserModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}


	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////// CATEGORIAS ////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public static function getCategoria($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
	
	public function registroCatModel($categoria, $tabla){
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,descripcion) VALUES (:nombre,:descripcion)");
		$stmt->bindParam(':nombre', $categoria['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':descripcion', $categoria['descripcion'], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}
	public function actualizarCatModel($categoria, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion WHERE id = :id");		
		$stmt->bindParam(':nombre', $categoria['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':descripcion', $categoria['descripcion'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $categoria['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	public function getCatModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();
	}

	public static function deleteCatModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}

	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////// PRODUCTOS ////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public static function getProductos($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
	public function registroProModel($producto, $tabla){
	
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo,nombre,precio,stock,categoria) VALUES (:codigo,:nombre,:precio,:stock,:categoria)");
		$stmt->bindParam(':codigo', $producto['codigo'], PDO::PARAM_STR);
		$stmt->bindParam(':nombre', $producto['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':precio', $producto['precio'], PDO::PARAM_STR);
		$stmt->bindParam(':stock', $producto['stock'], PDO::PARAM_INT);
		$stmt->bindParam(':categoria', $producto['categoria'], PDO::PARAM_INT);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}
	public function actualizarProModel($producto, $tabla){
		
		$stmt = Conexion::conectar()->prepare(" UPDATE $tabla SET codigo = :codigo, nombre = :nombre, precio = :precio, stock = :stock ,categoria = :categoria WHERE id = :id");		
		$stmt->bindParam(':codigo', $producto['codigo'], PDO::PARAM_STR);
		$stmt->bindParam(':nombre', $producto['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':precio', $producto['precio'], PDO::PARAM_STR);
		$stmt->bindParam(':stock', $producto['stock'], PDO::PARAM_INT);
		$stmt->bindParam(':categoria', $producto['categoria'], PDO::PARAM_INT);
		$stmt->bindParam(':id', $producto['id'], PDO::PARAM_INT);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	public function getProModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();
	}

	public static function deleteProModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}
	

}

?>
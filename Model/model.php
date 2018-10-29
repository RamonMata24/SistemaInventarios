<?php 

class Paginas{
	
	public static function enlacesPaginasModel($enlaces){


		if( $enlaces == "usuarios" || $enlaces =="addUser" || $enlaces=="editarUser" || $enlaces == "deleteUser" || 
			$enlaces== "categorias" || $enlaces == "addCat" || $enlaces=="editarCat" || $enlaces == "deleteCat" ||
			$enlaces== "productos" || $enlaces == "addPro" || $enlaces=="editarPro" || $enlaces == "deletePro" ||
			$enlaces == "salir"){

			$module =  "View/modules/".$enlaces.".php";
		
		}else if($enlaces == "inicio"){

			$module =  "View/modules/inicio.php";
		
		}
		else if($enlaces == "usuarios"){

			$module =  "View/modules/usuarios.php";
		
		}else if($enlaces == "fallo"){

			$module =  "login.php";
		
		}else if($enlaces == "categorias"){

			$module =  "View/modules/categorias.php";
		
		}else if($enlaces == "productos"){

			$module =  "View/modules/productos.php";
		
		}
		
		
		
		
		
		else{

			$module =  "View/modules/inicio.php";

		}
		
		return $module;

	}

}

?>
<a href="index.php?action=addPro"><button type = "button" class="btn btn-success" ><i class="ti-plus"></i></button></a></td>

<a href="index.php?action=index"><button class="btn btn-primary" ><i class="ti-home"></i></button></a></td>

<div class="page-body">
    <div class="card">
    <div class="card-header">
        <h2>Productos</h2>
            
                <div class="card-header-right"> 
                    <ul class="list-unstyled card-option">       
                    <li><i class="icofont icofont-simple-left "></i></li>        
                    <li><i class="icofont icofont-maximize full-card"></i></li>        
                    <li><i class="icofont icofont-minus minimize-card"></i></li>       
                    <li><i class="icofont icofont-refresh reload-card"></i></li>       
                        <li><i class="icofont icofont-error close-card"></i></li>   
                    </ul></div>
                </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Fecha y Hora de Agregado</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                
                                </tr>
                            </thead>
                        <tbody>
                                <?php
                                    $users = new Controller();
                                    $users->getProductos();
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

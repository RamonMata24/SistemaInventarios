
<a href="index.php?action=addUser"><button type = "button" class="btn btn-success" ><i class="ti-plus"></i></button></a></td>

<a href="index.php?action=index"><button class="btn btn-primary" ><i class="ti-home"></i></button></a></td>

<div class="page-body">
    <div class="card">
    <div class="card-header">
        <h2>Usuarios</h2>
            
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
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nickname</th>
                                    <th>Contraseña</th>
                                    <th>Email</th>
                                    <th>Fecha y Hora de Registro</th>
                                    <th> Editar</th>
                                    <th> Eliminar</th>
                                
                                </tr>
                            </thead>
                        <tbody>
                                <?php
                                    $users = new Controller();
                                    $users->getUsers();
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<?php

    include("conexion.php");

    if ($connect){
        ?> 
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>conexion Exitosa!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    
    <?php
    }else{
        ?>
            
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error de conexion!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            
        <?php
    }

    if(isset($_POST['validar'])){
        if(isset($_POST['d1']) && !empty($_POST['d1']) && isset($_POST['d2']) && !empty($_POST['d2']) && isset($_POST['d3']) && !empty($_POST['d3']) && isset($_POST['d4'])
        && !empty($_POST['d4']) && isset($_POST['d5']) && !empty($_POST['d5'])){
            $id= trim($_POST['d1']);
            $nombre= trim($_POST['d2']);
            $correo= trim($_POST['d3']);
            $curso= trim($_POST['d4']);
            $mensaje= trim($_POST['d5']);
            $datos= 'INSERT INTO `service`(`id`,`nombre`,`correo`,`curso`,`mensaje`) VALUES (`$id`,`$nombre`,`$correo`,`$curso`,`$mensaje`)';
            $reg= mysqli_query($connect,$datos);

            if($reg){
                ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registro exitoso!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
              
                <?php
            }else{
                ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error al guardar los datos!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

              <?php
            }

            }else{
                ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Favor completar los datos!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
              
                <?php
            }
        }
    

?>
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
        if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['correo']) && !empty($_POST['correo'])
        && isset($_POST['curso']) && !empty($_POST['curso']) && isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
            $date1= trim($_POST['id']);
            $date2= trim($_POST['nombre']);
            $date3= trim($_POST['correo']);
            $date4= trim($_POST['curso']);
            $date5= trim($_POST['mensaje']);
            $datos= "INSERT INTO `servicio`(`Id`,`Nombre`,`Correo`,`Servicio`,`Mensaje`) VALUES (`$date1`,`$date2`,`$date3`,`$date4`,`$date5`)";
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
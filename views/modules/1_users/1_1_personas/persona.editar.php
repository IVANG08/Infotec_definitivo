
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Personas</h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Personas&a=modificar_persona"novalidate>
                <div class="col-md-2">
                        <label for="id_rol" class="form-label">Rol</label>
                <select class="form-control mb-3" name="id_rol" placeholder="Rol" >
                    
                    <?php 
                        while($row=mysqli_fetch_array($roles)){
                            if($row['id_rol']==$editper[0]){
                            ?>
                            <option selected value='<?php echo $row['id_rol']?>'> <?php echo $row['nombre_rol']?></option>
                            <?php
                            }else{
                            ?>
                        <option value='<?php echo $row['id_rol']?>'> <?php echo $row['nombre_rol']?></option>
                        <?php

                            }
                        }
                         ?>
                    </select>    
                
                        
                        </div>
                    <div class="col-md-5">
                        <label for="id_personas" class="form-label">Identificacion</label>
                        <input type="text" class="form-control" id="id_personas"  required name="id_personas" placeholder="Identificacion" value="<?php echo $editper[1]?>" readonly>
                        </div>
                    <div class="col-md-5">
                        <label for="Nombre rol" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre rol"  required name="nombres_persona" placeholder="Nombre" value="<?php echo $editper[2]?>">
                        </div>
                    <div class="col-md-6 mt-0">
                        <label for="apellidos_persona" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos_persona"  required name="apellidos_persona" placeholder="Apellidos" value="<?php echo $editper[3]?>">
                        </div>
                        <div class="col-md-6">
                        <label for="telefono_persona" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono_persona"  required name="telefono_persona" placeholder="Telefono" value="<?php echo $editper[4]?>">
                        </div>
                    <div class="col-md-6">
                        <label for="correo_persona" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo_persona"  required name="correo_persona" placeholder="Correo" value="<?php echo $editper[5]?>">
                        </div>
                    
                    <div class="col-md-6">
                        <label for="pass_persona" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass_persona"  required name="pass_persona" placeholder="Contraseña" value="<?php echo $editper[6]?>">
                        </div>
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>
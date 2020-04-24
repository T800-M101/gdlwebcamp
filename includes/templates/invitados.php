
        <?php

           try{
             require_once('includes/funciones/db_conexion.php'); //Crear conexion
             mysqli_query($conn,"SET CHARACTER SET 'utf8'");
             mysqli_query($conn,"SET SESSION collation_connection = 'utf8_unicode_ci'");
             $sql = "SELECT * FROM invitados ";

             $resultado = $conn->query($sql); // Consultar la base


           }catch(\Exception $e){
             echo $e->getMessage();
           }

         ?>



    <section class="invitados contenedor seccion">
             <h2>Nuestros Invitados</h2>
             <ul class="lista-invitados clearfix">
                  <?php while($invitados = $resultado->fetch_assoc() ) { ?>

                        <li>
                             <div class="invitado">
                               <a class="invitado-info"  href="#invitado<?php echo $invitados['invitado_id'];?>">
                                 <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="imagen invitado">
                                 <p><?php echo $invitados['nombre_invitado'] . " " .$invitados['apellido_invitado']; ?></p>
                              </a>
                             </div>
                        </li>
                        <div style="display:none;">
                          <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
                            <h2><?php echo $invitados['nombre_invitado'] ." " . $invitados['apellido_invitado']; ?></h2>
                            <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="imagen invitado">
                            <p><?php echo $invitados['descripcion']; ?></p>
                          </div>

                        </div>

                <?php } ?>
           </ul>


         <?php
           $conn->close(); //Siempre cerrar la conexión
          ?>

  </section>

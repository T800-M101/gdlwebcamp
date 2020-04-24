<?php include_once 'includes/templates/header.php'; ?>



  <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>

        <?php

           try{
             require_once('includes/funciones/db_conexion.php'); //Crear conexion
             mysqli_query($conn,"SET CHARACTER SET 'utf8'");
             mysqli_query($conn,"SET SESSION collation_connection = 'utf8_unicode_ci'");
             $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Escribir la consulta
             $sql .= "FROM eventos ";
             $sql .= " INNER JOIN categoria_evento" ;
             $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
             $sql .= " INNER JOIN invitados ";
             $sql .= " ON eventos.id_inv = invitados.invitado_id ";
             $sql .= " ORDER BY evento_id ";
             $resultado = $conn->query($sql); // Consultar la base


           }catch(\Exception $e){
             $error =  $e->getMessage();
           }

         ?>

         <div class="calendario">
           <?php
          $calendario = array();
           while($eventos = $resultado->fetch_assoc() ) {
            //Agrupando los arrays por categoria

            $fecha = $eventos['fecha_evento'];
            //$categoria = $eventos['cat_evento'];

             $evento = array(
               'titulo' => $eventos['nombre_evento'],
               'fecha' => $eventos['fecha_evento'],
               'hora' => $eventos['hora_evento'],
               'categoria' => $eventos['cat_evento'],
               'icono' => $eventos['icono'],
               'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']

             );

             $calendario[$fecha][] = $evento;
             //$calendario[] = $evento;


             ?>

            <?php  }// while de fetch_assoc ?>

                <?php
                 //Imprime todos los eventos
                 foreach($calendario as $dia =>$lista_eventos){?>
                   <h3>
                     <i class="far fa-calendar-alt"></i>
                     <?php
                     //Linux
                     setlocale(LC_TIME, 'es_ES.UTF-8');

                     //Windows
                     //setlocale(LC_TIME, 'spanish');
                      echo strftime("%A, %d de %B del %Y",strtotime($dia) ); ?>

                   </h3>

                   <?php foreach($lista_eventos as $evento) { ?>
                     <div class="dia">
                       <p class="titulo"><?php echo $evento['titulo']; ?></p>
                       <p class="hora"><i class="far fa-clock"></i><?php echo $evento['fecha'] . " " .$evento['hora']; ?></p>

                       <p><i class="fas <?php echo $evento['icono'];?>"></i><?php echo $evento['categoria']; ?></p>
                       <p><i class="fas fa-user"></i><?php echo $evento['invitado']; ?></p>

                       <!--<pre>Se usa la etiqueta <pre> para imprimir resultados-->
                       <!-- <?php var_dump($calendario); ?> -->
                      <!-- </pre>-->
                     </div>
                   <?php } // fin foreach eventos?>

                 <?php } //fin for each  de $dias?>

         </div><!--.calendario-->

         <?php
           $conn->close(); //Siempre cerrar la conexión
          ?>

  </section>



  <?php include_once 'includes/templates/footer.php'; ?>

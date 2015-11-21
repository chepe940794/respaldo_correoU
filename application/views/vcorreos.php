
<div class="container" >
  <div class="page-header" ><h1>Correos</h1></div>
      <!-- Nav tabs -->
      
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#salida" aria-controls="salida" role="tab" data-toggle="tab">Salida</a></li>
    <li role="presentation"><a href="#enviados" aria-controls="enviados" role="tab" data-toggle="tab">Enviados</a></li>
    <li role="presentation"><a href="#salir" aria-controls="salir" role="tab" data-toggle="tab">Salir</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="salida">
      <br/>
     
      
      <a href="<?php echo base_url();?>correo/nuevo/?id=<?php echo $id?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Nuevo</a>
       
      <br/>
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
            <tr>
              <th>ID</th>
              <th>Destinatario</th>
              <th>Asunto</th>
              <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
        
          <?php foreach ($emails as $email) { ?>
            
            <tr>
              <td><?php echo $email['id']; ?></td>
              <td><?php echo $email['destinatario']; ?></td>
              <td><?php echo $email['asunto']; ?></td>
              <td><?php echo $email['mensaje']; ?></td>
              <td>

                  <a href="<?php echo base_url();?>correo/editar/?cid=<?php echo $email['id']?>&id=<?php echo $id?>"><span class="glyphicon glyphicon-edit" >Editar</a>
              </td>
              <td>
                  <a href="<?php echo base_url();?>correo/eliminar/?cid=<?php echo $email['id']?>&id=<?php echo $id?>" onClick="return confirm('Desea eliminar el correo ?');"><span class="glyphicon glyphicon-trash">Eliminar</a>
              </td>
              
            </tr>
            <?php }?>
         
        </tbody>
      </table>
      </div>
    </div>
    

    <div role="tabpanel" class="tab-pane" id="enviados">
      <br/>
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
            <tr>
              <th>ID</th>
              <th>Destinatario</th>
              <th>Asunto</th>
              <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
          
         <?php foreach ($emailss as $emailv) { ?>
            
            <tr>
              <td><?php echo $emailv['id']; ?></td>
              <td><?php echo $emailv['destinatario']; ?></td>
              <td><?php echo $emailv['asunto']; ?></td>
              <td><?php echo $emailv['mensaje']; ?></td>
              
              <td>
                  <a href="<?php echo base_url();?>correo/eliminar/?cid=<?php echo $emailv['id']?>&id=<?php echo $id?>" onClick="return confirm('Desea eliminar el correo ?');"><span class="glyphicon glyphicon-trash">Eliminar</a>
              </td>
              
            </tr>
            <?php }?>
        </tbody>
      </table>
      </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="salir">
        </br>
        <center><a href="<?php echo base_url();?>user/login" class="btn btn-danger"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Logout</a>
      </center>
      </div>

    </div>

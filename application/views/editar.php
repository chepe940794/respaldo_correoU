<p><br/></p>
<br/>
<br/>



    <p><h1><center>Editar Correo</center></h1></p>
    <br/>
<div class="container ">
  <?php foreach ($email as $e) { ?>

 

  <form class="form-horizontal" method="POST" action="<?php echo base_url();?>correo/update/?cid=<?php
  echo $e['id'];?>&id=<?php echo $id?>">
   <div class="form-group">
    <label  class="col-xs-4 control-label">Destinario :</label>
    <div class="col-xs-4">
      <input type="email" class="form-control" value='<?php echo $e['destinatario'] ?>' name="nemail" placeholder="Destinario">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label">Asunto :</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" value='<?php echo $e['asunto'] ?>' name="nasunto" placeholder="Asunto">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label">Mensaje :</label>
    
     <div class="col-xs-4">
    <textarea name="nmensaje" class="form-control"  style=" width: 365px; height: 200px;"><?php echo $e['mensaje'] ?>
    </textarea><br />
     </div>
     <?php }?>
    
  </div>
   
  <div class="row">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-success btn-lg btn-block" name="update" >Update</button>
    </div>
  </div>
</br>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >
      
      <a class="btn btn-danger btn-lg btn-block" href="<?php echo base_url();?>correo/vista/?id=<?php echo $id?>">Cancelar</a>
      </form>
    </div>
 
</form>
</div>

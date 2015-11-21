<div class="page-header"><center><h1>WebUMail</center></h1></div>


<div class="container">
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>user/autenticar">
  <div class="form-group">
    <label for="username" class="col-xs-4 control-label">Nombre Usuario: </label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nusername" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-xs-4 control-label">Contraseña :</label>
    <div class="col-xs-4">
      <input type="password" class="form-control" name="npassword" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign in</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >
      
      <a href="<?php echo base_url();?>user/registrar">Crear Cuenta</a>
      </form>
    </div>
  </div>
</form>
</div>

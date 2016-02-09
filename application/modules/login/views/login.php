<script src="<?php echo base_url("/js/login/login.js"); ?>"></script>
<div class="fondoLogin">
<div class="row margin-login">
	<div class="col-md-4">
		<!--<img class="img-responsive" src="<?php echo base_url("images/login-img"); ?>" alt="eCenso">-->
		<?php if (isset($enviado) && $enviado==true){ ?>
			  		<p>
						<div class="alert alert-info" role="alert">
        					<?php echo $mensaje; ?>
      					</div>
      		  		</p>
      	<?php } 
      	      elseif (isset($enviado) && $enviado==false){  
      	?>          <p>
						<div class="alert alert-danger" role="alert">
        					<?php echo $mensaje; ?>
      					</div>
      		  		</p>
      	<?php } ?>
      	
		<div id="reslogin" class="alert alert-danger" role="alert"></div>
        <div class="textWhite"><h2>BIENVENIDO</h2><h4>Al piloto de la primera estrategia de recolección de información vía web para 
el censo de población y vivienda del país.</h4>
      	<fieldset>
        <?php if ($reg){ ?>			
				<button class="btn btn-info" type="button" id="btnRegistra" name="btnRegistra">Registro</button>
			<?php } ?><br><br>
            Si ya estás registrado, ingresa tus datos aquí:<br/><br/>
				<form id="frmIngreso" name="frmIngreso" method="post" action="<?php echo site_url("/login/userAuth"); ?>" class="form-signin">			
			<input type="email" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Correo electrónico" required autofocus>
			<br/>
			<input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña" required>
			<br/>
			<div class="g-recaptcha" data-sitekey="6LcqTg4TAAAAAN5yCK3f8wmkTpkilBE8rmTQr8gV"></div>
			<br/>
			<button class="btn btn-success" type="submit" id="btnIngresar" name="btnIngresar">Ingresar</button>
            <button class="btn btn-link" type="button" id="btnReminder" name="btnReminder">¿Olvidó su contraseña?</button>
            <p>&nbsp;</p>
          </form>	
		</fieldset>
        </div>
	</div>	
	<div class="col-md-4 textWhite">
		
	</div>
</div>
</div>
<p><small>La información que nos brindarás cuenta con la protección de los datos establecidos en la ley de reserva estadística: Los datos suministrados al Departamento Administrativo Nacional de Estadística (DANE), en el desarrollo de censos y encuestas, no podrán darse a conocer al público ni a las entidades u organismos oficiales, ni a las autoridades públicas, sino únicamente en resúmenes numéricos, que no hagan posible deducir de ellos información alguna de carácter individual que pudiera utilizarse para fines comerciales, de tributación fiscal, de investigación judicial o cualquier otro diferente del propiamente estadístico. LEY DE RESERVA ESTADÍSTICA (Art 5 Ley 79 DE 1993)</small></p>


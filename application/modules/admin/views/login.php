<div class="row margin-login">
	
	
	<div class="col-md-3">
		<fieldset>
		<legend>M&oacute;dulo de Administraci&oacute;n</legend>
		<form id="frmIngreso" name="frmIngreso" method="post" action="<?php echo site_url("/login/userAuth"); ?>" class="form-signin">			
			<label for="txtUsuario">Correo electr&oacute;nico:</label>
			<input type="email" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Correo electr&oacute;nico" required autofocus>
			<br/>
			<label for="txtPassword">Contrase&ntilde;a:</label>
			<input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contrase&ntilde;a" required>
			<br/>
			<div class="g-recaptcha" data-sitekey="6LcqTg4TAAAAAN5yCK3f8wmkTpkilBE8rmTQr8gV"></div>
			<br/>
			<button class="btn btn-link" type="button" id="btnReminder" name="btnReminder">&iquest; Olvid&oacute; su contrase&ntilde;a ?</button>
			<br/>
			<br/>
			<?php //<button class="btn btn-link" type="button" id="btnRegistra" name="btnRegistra">Registrese</button> 
			//<br/>
			//<br/>
			?>
			<button class="btn btn-primary" type="button" id="btnIngresar" name="btnIngresar">Ingresar</button>
		</form>	
		</fieldset>
	</div>	
	<div class="col-md-1">
	&nbsp;
	</div>
	<div class="col-md-8">
		
		
		<br/>
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
      	<p>
			<div id="reslogin" class="alert alert-danger" role="alert"></div>
      	</p>
	</div>	
	
</div>
<script src="<?php echo base_url("/js/admin/admin.js"); ?>"></script>
<!-- <script src="https://www.google.com/recaptcha/api.js?hl=es"></script>    -->
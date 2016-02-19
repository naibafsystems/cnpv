<br/>	
 <div class="container">
	<div class="row">
		<div class="col-lg-11">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						CONFIRMACI&Oacute;N
					</h4>
				</div>
			</div>
		</div>			
	</div>
</div>    
<div class="container">
    <div class="row">
    	<div class="col-md-11"> 
			<form role="form" method="post" id ="registro" action="">
				 <div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> Gracias <b><?php echo $datosp['PRIMER_NOMBRE']." ". $datosp['SEGUNDO_NOMBRE'] . " ". $datosp['PRIMER_APELLIDO'] . " " . $datosp['SEGUNDO_APELLIDO'];?> </b>  por formar parte de la construcci&oacute;n de un mecanismo innovador para  Censo Nacional de Poblaci&oacute;n y Vivienda.</br></label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>Recuerda que la fecha asignada para diligenciar el formulario es del </label><font color="orange"> <b>1 de Marzo al 18 de Marzo</b> </font></br>
						</div>	
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 ">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<h5 class="list-group-item-heading">
										Pasos a Seguir
									</h5>
								</div>
							</div>
						</div>
					</div>	
				</div>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> <span class="label label-danger">1</span> Ingresa en el siguiente enlace: &nbsp;&nbsp; </label><a  href="http://pilotoecenso.dane.gov.co/ecenso"><b>http://pilotoecenso.dane.gov.co/ecenso</b></a>
						</div>
					</div>
				</div>							
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> <span class="label label-danger">2</span> Ingresa con tu usuario: &nbsp;&nbsp; <font color="green"> <b><?php echo $datosp['CORREO_ELECTRONICO'];?> </b></font> y la contrase&ntilde;a registrada: &nbsp;&nbsp; <font color="green"> <b><?php echo $datosp['CONTRASENA'];?></b> </font></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> <span class="label label-danger">3</span> Despu&eacute;s de ingresar con tu usuario y contrase&ntilde;a, podr&aacute;s iniciar el diligenciamiento del  formulario electr&oacute;nico.</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> <span class="label label-danger">4</span> En caso de requerir soporte para el diligenciamiento, cuenta con las opciones de correo electr&oacute;nico, l&iacute;nea gratuita de atenci&oacute;n y chat. </label></br></br>
						</div>
					</div>
				</div>

		  		<div class="row">
					<div id="result" class="form-group col-md-10">
		  				&nbsp;
		  			</div>	  				
		  			<div id="result" class="form-group col-md-1">
		  				<button type="button" id="dbtnfinalreg" name="dbtnfinalreg" class="btn btn-danger">Salir</button>
		  			</div>
		  		</div>
			</form> 
		</div>
	</div>
</div>
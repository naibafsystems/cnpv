<br/>	
 <div class="container">
	<div class="row">
		<div class="col-lg-11">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						PROCESO DE INSCRIPCI&Oacute;N
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
							<label> Gracias <?php echo $datos['PRIMER_NOMBRE']. " " . $datos['SEGUNDO_NOMBRE']. " " . $datos['PRIMER_APELLIDO']. " " . $datos['SEGUNDO_APELLIDO']?>  por formar parte de la construcci&oacute;n de un mecanismo innovador para  Censo Nacional de Poblaci&oacute;n y Vivienda.</br></label>
						</div>
					</div>
				</div>	
				<br/><br/>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> Tu usuario es : &nbsp;&nbsp; <font color="green"> <b><?php echo $datos['CORREO_ELECTRONICO'] ?></b></font></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label> y la contrase&ntilde;a registrada es: &nbsp;&nbsp; <font color="green"> <b><?php echo $datos['CONTRASENA'] ?></b> </font></label>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>  Recuerda que debes completar su registro con los pasos:</label></br></br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>  2 Datos de ubicaci&oacute;n de tu residencia habitual</label></br></br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>  3 Datos de conformaci&oacute;n del hogar</label></br></br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>  4 Confirmaci&oacute;n</label></br></br>
						</div>
					</div>
				</div>
				<br/><br/>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>  En caso de requerir soporte para el diligenciamiento, cuenta con las siguientes opciones:</label></br></br>
						</div>
					</div>
				</div>
				<br/><br/>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<img src="<?php echo base_url("images/contactenos.png"); ?>" class="img-rounded"><br/><br/>
						</div>
					</div>
			</form> 
		</div>
	</div>
</div>
<script src="<?php echo base_url("/js/encuesta/encuesta.js"); ?>" rel="stylesheet"></script>
<div class="page-header">
	<h1>e-censo / Encuesta Final</h1>
</div>
<form id="form_encuesta" name="form_encuesta" action="">
<div class="row">
	<!-- <div class="col-md-2">
		<img src="<?php // echo base_url("/images/hogar.png"); ?>"/></div>-->
	<div class="col-md-12" align="center">
		<h3>&#191;C&oacute;mo retroalimentar el censo?</h3>	
	</div>
	<div class="col-md-12" >
		<br>
		<p> Cu&eacute;ntenos su experiencia en la construcci&oacute;n de la primera estrategia de recolecci&oacute;n v&iacute;a web para el Censo de Poblaci&oacute;n y Vivienda del pa&iacute;s.
		</p>
	</div>
	
</div>

<div class="row">
<div class="col-md-12" >
		<legend class="" style="color: #990099; border-color: #990099;">Inscripci&oacute;n</legend>
	</div>
</div>

<div class="row">
	
		<div class="col-md-4">
			Considera que el proceso de inscripci&oacute;n fue:
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_1" name="inscrip_1" value="1" >1. Muy dif&iacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_1" name="inscrip_1" value="2" >2. Dif&iacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_1" name="inscrip_1" value="3" >3. F&aacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_1" name="inscrip_1" value="4" >4. Muy f&aacute;cil</label>
			</div>
		</div>
</div>	
<hr>

<div class="row">
	
		<div class="col-md-4">
			Tuvo alg&uacute;n inconveniente durante el proceso de inscripci&oacute;n:
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_2" name="inscrip_2" value="1" onclick='ocultaCual("inscrip_2_cual","inscrip_2");' >1. Si</label>				
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_inscrip_2" name="inscrip_2" value="2" onclick='ocultaCual("inscrip_2_cual","inscrip_2");' >2. No</label>
			</div>
		</div>
		
</div>
<div class="row">
		
		<div class="col-md-4">
			&nbsp;
		</div>
		
		<div class="col-md-4">Cu&aacute;l?
			<!-- <input size="40" type="text" name="inscrip_2_cual" id="inscrip_2_cual" maxlength="970" /> -->
			<textarea rows="5" cols="70" id="inscrip_2_cual" name="inscrip_2_cual" maxlength="970"></textarea>
		</div>
</div>	
<hr>


<div class="row">
	
		<div class="col-md-4">
			Tiene alguna recomendaci&oacute;n para mejorar el proceso de inscripci&oacute;n:
		</div>
		<div class="col-md-8">
			
			<textarea rows="5" cols="70" id="inscrip_3" name="inscrip_3" maxlength="970"></textarea>
		</div>
		
</div>


<br>
<div class="row">
<div class="col-md-12" >
		<legend class="" style="color: #009900; border-color: #009900;">Diligenciamiento</legend>
	</div>
</div>
<div class="row">
	
		<div class="col-md-4">
			Considera que el cuestionario fue: 
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_1" name="dilig_1" value="1" >1. Muy dif&iacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_1" name="dilig_1" value="2" >2. Dif&iacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_1" name="dilig_1" value="3" >3. F&aacute;cil</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_1" name="dilig_1" value="4" >4. Muy f&aacute;cil</label>
			</div>
		</div>
	
</div>
<hr>	
<div class="row">
	
		<div class="col-md-4">
			Considera que las preguntas del cuestionario fueron: 
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_2" name="dilig_2" value="1" >1. Muy confusas</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_2" name="dilig_2" value="2" >2. Confusas </label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_2" name="dilig_2" value="3" >3. Claras</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_2" name="dilig_2" value="4" >4. Muy claras</label>
			</div>
		</div>
	
</div>	
<hr>
<div class="row">
	
		<div class="col-md-4">
			Tuvo alg&uacute;n inconveniente durante el diligenciamiento del formulario electr&oacute;nico:
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_3" name="dilig_3" value="1" onclick='ocultaCual("dilig_3_cual","dilig_3");' >1. Si</label>				
			</div>			
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_dilig_3" name="dilig_3" value="2" onclick='ocultaCual("dilig_3_cual","dilig_3");' >2. No</label>
			</div>
		</div>
		
</div>
<div class="row">
		
		<div class="col-md-4">
			&nbsp;
		</div>
		
		<div class="col-md-4">Cu&aacute;l?			
			<textarea rows="5" cols="70" id="dilig_3_cual" name="dilig_3_cual" maxlength="970"></textarea>
		</div>
</div>	

<hr>
<div class="row">
	
		<div class="col-md-4">
			Tiene alguna recomendaci&oacute;n para mejorar el proceso de diligenciamiento del formulario electr&oacute;nico:
		</div>
		<div class="col-md-6">
			
			<textarea rows="5" cols="70" id="dilig_4" name="dilig_4" maxlength="970"></textarea>
		</div>
		
</div>

<br>
<div class="row">
<div class="col-md-12" >
		<legend class="" style="color: #CC6633; border-color: #CC6633;">Soporte</legend>
	</div>
</div>
<div class="row">
	
		<div class="col-md-4">
			Utiliz&oacute; algunos de los canales de soporte brindados por el DANE:
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_soport_1" name="soport_1" value="1" onclick="ocultaSoporte()" >1. Si</label>				
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
			  	<label><input type="radio" id="rad_soport_1" name="soport_1" value="2" onclick="ocultaSoporte()">2. No</label>
			</div>
		</div>
		
</div>

<div id="div_soporte">
<hr>

<div class="row">
	
		<div class="col-md-12">
			C&oacute;mo califica el servicio brindado de 1 a 4, siendo Excelente: 4; Bueno: 3; Regular: 2; Malo:1 
		</div>	
</div>
<br>
<div class="row">
	
		<div class="col-md-4">
			<br><br>
		</div>
		<div class="col-md-2">
			<label>Atenci&oacute;n a la inquietud</label>
		</div>
		<div class="col-md-2">
			<label>Rapidez de la respuesta</label>
		</div>
		<div class="col-md-2">
			<label>Soluci&oacute;n de la inquietud</label>
		</div>
		<div class="col-md-2">
			<label>La atenci&oacute;n del personal</label>
		</div>
</div>
<div class="row">	
		<div class="col-md-4">
			<input type="checkbox" value="A" onclick="" name="tipo_soporte" id="tipoA">			
			Chat:
			<br><br>			
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="chat_1" id="chat_1">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="chat_2" id="chat_2">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="chat_3" id="chat_3">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="chat_4" id="chat_4">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>		
</div>

<div class="row">	
		<div class="col-md-4">
			<input type="checkbox" value="B" onclick="" name="tipo_soporte" id="tipoB">
			Tel&eacute;fono:			
			<br><br>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="tel_1" id="tel_1">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="tel_2" id="tel_2">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="tel_3" id="tel_3">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="tel_4" id="tel_4">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>		
</div>
<div class="row">	
		<div class="col-md-4">
		<input type="checkbox" value="C" onclick="" name="tipo_soporte" id="tipoC">
			Correo Electr&oacute;nico:			
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="mail_1" id="mail_1">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
			
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="mail_2" id="mail_2">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="mail_3" id="mail_3">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="select">
			  	<select name="mail_4" id="mail_4">
				<option value="-">...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
			</div>
		</div>		
</div>

</div>

<hr>
<div class="row">
	
		<div class="col-md-4">
			Tiene alguna recomendaci&oacute;n para mejorar el servicio de soporte:
		</div>
		<div class="col-md-6">
			
			<textarea rows="5" cols="70" id="soport_3" name="soport_3" maxlength="970"></textarea>
		</div>
		
</div>
<br>
<div class="row">
<div class="col-md-8">
				&nbsp;
			</div>
			
			<div class="col-md-3" align="right">
				<div id="encuesta_cargando" class="" style="display:none"><img src="<?php echo base_url("images/ajax-loader.gif")?>" title="Guardando" />  Guardando ...</div>
				<div id="encuesta_error" class="" style="display:none; color: red;">Error: Formulario no guardado.</div>
			</div>
			<div class="col-md-1" >
				<button type="button" id="btnEncuesta" name="btnEncuesta" class="btn btn-sm btn-primary">Enviar</button>




			</div>
</div>

</form>
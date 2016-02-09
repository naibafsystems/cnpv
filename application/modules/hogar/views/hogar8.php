<div id="page8" class="row col-md-12">
	<form id="frmPantalla8" name="frmPantalla8" method="post" action="">
		<h4>&iquest;Usted o alg&uacute;n miembro de su hogar ha vivido alguna de las siguientes situaciones:  </h4>
		<br><br>
		<h5>Desplazamiento forzado?<span id="hint18"></span></h5>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37A_DESPLAFORZ" name="C3H37A_DESPLAFORZ" value="1" <?php echo ($hogar["C3H37A_DESPLAFORZ"]==1)?"checked=\"checked\"":""; ?>>Si</label>
				</div>
			</div>				
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37A_DESPLAFORZ" name="C3H37A_DESPLAFORZ" value="2" <?php echo ($hogar["C3H37A_DESPLAFORZ"]==2)?"checked=\"checked\"":""; ?> >No</label>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta24" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<div id ="desplazado" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>A&ntilde;o</label>
					<label><select  id="C3H37A1_ANIODESPLA" name="C3H37A1_ANIODESPLA">
								<option value="">A&ntilde;o...</option>
								<?php for ($i=2015; $i>=1946; $i--){ 
									if ($hogar["C3H37A1_ANIODESPLA"]==$i)
									{
								?> 
										<option  value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
								<?php }
									else 
									{?>
										  <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php }
								} ?>
							</select>
					</label>
				</div>
				
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta25" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<div id ="desplazado1" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>Ha(n) retornado a la residencia de la cual fue(fueron) desplazados(s) </label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37A2_RETORNO" name="C3H37A2_RETORNO" value="1" <?php echo ($hogar["C3H37A2_RETORNO"]==1)?"checked=\"checked\"":""; ?> >Si</label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37A2_RETORNO" name="C3H37A2_RETORNO" value="2" <?php echo ($hogar["C3H37A2_RETORNO"]==2)?"checked=\"checked\"":""; ?> >No</label>
				</div>
				
			</div>
		</div>
	
			<div class="row">
				<div class="col-md-8">
					<div id="alerta26" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			
		<h5>Abandono forzado de tierras? <span id="hint19"></span></h5>
		<div class="row">	
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37B_DESPLAFORZ" name="C3H37B_DESPLAFORZ" value="1" <?php echo ($hogar["C3H37B_DESPLAFORZ"]==1)?"checked=\"checked\"":""; ?>>Si</label>
				</div>
			</div>				
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37B_DESPLAFORZ" name="C3H37B_DESPLAFORZ" value="2" <?php echo ($hogar["C3H37B_DESPLAFORZ"]==2)?"checked=\"checked\"":""; ?> >No</label>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta27" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<div id ="abandono" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>A&ntilde;o</label>
					<label><select  id="C3H37B1_ANIODESPLA" name="C3H37B1_ANIODESPLA">
								<option value="">A&ntilde;o...</option>
								<?php for ($i=2015; $i>=1946; $i--){ 
									if ($hogar["C3H37B1_ANIODESPLA"]==$i)
									{
								?> 
										<option  value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
								<?php }
									else 
									{?>
										  <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php }
								} ?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta28" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			
		<div id ="abandono1" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>Ha(n) retornado a la residencia de la cual fue(fueron) desplazados(s) </label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37B2_RETORNO" name="C3H37B2_RETORNO" value="1" <?php echo ($hogar["C3H37B2_RETORNO"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37B2_RETORNO" name="C3H37B2_RETORNO" value="2" <?php echo ($hogar["C3H37B2_RETORNO"]==2)?"checked=\"checked\"":""; ?>>No</label>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta29" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<h5>Despojo de tierras? <span id="hint20"></span></h5>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37C_DESPLAFORZ" name="C3H37C_DESPLAFORZ" value="1" <?php echo ($hogar["C3H37C_DESPLAFORZ"]==1)?"checked=\"checked\"":""; ?> >Si</label>
				</div>
			</div>				
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H37C_DESPLAFORZ" name="C3H37C_DESPLAFORZ" value="2" <?php echo ($hogar["C3H37C_DESPLAFORZ"]==2)?"checked=\"checked\"":""; ?>>No</label>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta30" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<div id ="despojo" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>A&ntilde;o</label>
					<label><select  id="C3H37C1_ANIODESPLA" name="C3H37C1_ANIODESPLA">
								<option value="">A&ntilde;o...</option>
								<?php for ($i=2015; $i>=1946; $i--){ 
									if ($hogar["C3H37C1_ANIODESPLA"]==$i)
									{
								?> 
										<option  value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
								<?php }
									else 
									{?>
										  <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php }
								} ?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
					<div id="alerta31" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<div id ="despojo1" class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>Ha(n) retornado a la residencia de la cual fue(fueron) desplazados(s) </label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37C2_RETORNO" name="C3H37C2_RETORNO" value="1" <?php echo ($hogar["C3H37C2_RETORNO"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label><input type="radio" id="C3H37C2_RETORNO" name="C3H37C2_RETORNO" value="2" <?php echo ($hogar["C3H37C2_RETORNO"]==2)?"checked=\"checked\"":""; ?>>No</label>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta32" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		<br><br>	
		
		<div class="row">
			<div class="col-md-8">&nbsp;
			</div>
			<div class="col-md-4">
				<div class="radio">
					<button type="button" id="btnSiguiente9" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="8"  />
			</div>	
		</div>	
	</form>	
</div>
	

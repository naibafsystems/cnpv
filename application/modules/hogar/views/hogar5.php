<div id="page5" class="row col-md-12">
	<form id="frmPantalla5" name="frmPantalla5" method="post" action="">
		<div class="row">
			<h4>Durante los &uacute;ltimos 5 a&ntilde;os (de febrero de 2011 a la fecha) &iquest;alguna(s) persona(s) que FORMABA(N) PARTE DE SU HOGAR, viaj&oacute; (viajaron) al exterior y actualmente vive (n) en otro(s) pa&iacute;s(es)?</h4>
			<div class="row">
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H34_EMIGRA" name="C3H34_EMIGRA" value="1" <?php echo ($hogar["C3H34_EMIGRA"]==1)?"checked=\"checked\"":""; ?> > Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H34_EMIGRA" name="C3H34_EMIGRA" value="2" <?php echo ($hogar["C3H34_EMIGRA"]==2)?"checked=\"checked\"":""; ?> > No</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div id="alerta17" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		
		<div class="row" id ="viveactual">
			<h4>&iquest;En qu&eacute; pa&iacute;s(es) vive(n) actualmente? </h4>
			<div class="row">
				<div class="col-md-3">
					<div class="radio">
					</div>	
				</div>
				<div class="col-md-4">
					<div class="radio">
						<label><span id="hint13"></span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34A_VENEZUELA" name="C3H34A_VENEZUELA" value="1" <?php echo ($hogar["C3H34A_VENEZUELA"]==1)?"checked=\"checked\"":""; ?> >Venezuela</label>
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34B_USA" name="C3H34B_USA" value="1" <?php echo ($hogar["C3H34B_USA"]==1)?"checked=\"checked\"":""; ?>>Estados Unidos</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34C_ESPANA" name="C3H34C_ESPANA" value="1" <?php echo ($hogar["C3H34C_ESPANA"]==1)?"checked=\"checked\"":""; ?>>Espa&ntilde;a</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="checkbox"> 
						<label><input type="checkbox" id="C3H34D_ECUADOR" name="C3H34D_ECUADOR" value="1" <?php echo ($hogar["C3H34D_ECUADOR"]==1)?"checked=\"checked\"":""; ?>>Ecuador</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34E_PANAMA" name="C3H34E_PANAMA" value="1" <?php echo ($hogar["C3H34E_PANAMA"]==1)?"checked=\"checked\"":""; ?>>Panam&aacute;</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34F_CANADA" name="C3H34F_CANADA" value="1" <?php echo ($hogar["C3H34F_CANADA"]==1)?"checked=\"checked\"":""; ?>>Canad&aacute;</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="checkbox">
						<label><input type="checkbox" id="C3H34G_OTRO_PAIS" name="C3H34G_OTRO_PAIS" value="1" <?php echo ($hogar["C3H34G_OTRO_PAIS"]==1)?"checked=\"checked\"":""; ?> >Otro &nbsp; </label>
						<label>&iquest;Cu&aacute;l?</label>
						<label><select  id="C3H34G1_OTRO_CUAL" name="C3H34G1_OTRO_CUAL">
							<option value="">Seleccione...</option>
							<?php for ($i=0; $i<count($paises); $i++){ ?> 
						   	          <?php if ($paises[$i]["CODIGO"] == $hogar["C3H34G1_OTRO_CUAL"])
						   	          {	?>
										<option  value="<?php echo $paises[$i]["CODIGO"]; ?>" selected="selected"><?php echo $paises[$i]["NOMBRE_PAIS"]; ?></option>
									<?php }
										else 
										{?>						   	          
						   	          	<option  value="<?php echo $paises[$i]["CODIGO"]; ?>"><?php echo $paises[$i]["NOMBRE_PAIS"]; ?></option>
						    <?php 	}
								} ?>
						</select></label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div id="alerta18" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		
		<div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente6" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="5"  />
			</div>	
		</div>			
	</form>
</div> 


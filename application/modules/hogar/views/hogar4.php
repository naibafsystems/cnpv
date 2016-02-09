<div id="page4" class="row col-md-12">
<form id="frmPantalla4" name="frmPantalla4" method="post" action="">
<h4>&iquest;Su hogar DISPONE de:</h4>
		<div class="row">
			<div class="col-md-10">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><span id="hint7"></span></label>
				</div>
			</div>
		</div>
		
		<div class="row">
			<br><br><br><br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label >a. Se&ntilde;al de radio<span id="hint8"></span></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33A_RADIO" name="C3H33A_RADIO" value="1" <?php echo ($hogar["C3H33A_RADIO"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33A_RADIO" name="C3H33A_RADIO" value="2" <?php echo ($hogar["C3H33A_RADIO"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta10" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>b. Servicio de televisi&oacute;n abierta?<br>(antena aérea - An&aacute;loga o decodificador TDT) <span id="hint9"></span></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33B_TVABIE" name="C3H33B_TVABIE" value="1" <?php echo ($hogar["C3H33B_TVABIE"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33B_TVABIE" name="C3H33B_TVABIE" value="2" <?php echo ($hogar["C3H33B_TVABIE"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta11" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>c. Servicio de televisi&oacute;n por suscripci&oacute;n?<span id="hint10"></span> </label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33C_TVSUSC" name="C3H33C_TVSUSC" value="1" <?php echo ($hogar["C3H33C_TVSUSC"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33C_TVSUSC" name="C3H33C_TVSUSC" value="2" <?php echo ($hogar["C3H33C_TVSUSC"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta12" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>d. L&iacute;nea telef&oacute;nica fija?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33D_TEL_FIJO" name="C3H33D_TEL_FIJO" value="1" <?php echo ($hogar["C3H33D_TEL_FIJO"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33D_TEL_FIJO" name="C3H33D_TEL_FIJO" value="2" <?php echo ($hogar["C3H33D_TEL_FIJO"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta13" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>e. Acceso a internet fijo?<span id="hint11"></span></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33E_INT_FIJO" name="C3H33E_INT_FIJO" value="1" <?php echo ($hogar["C3H33E_INT_FIJO"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33E_INT_FIJO" name="C3H33E_INT_FIJO" value="2" <?php echo ($hogar["C3H33E_INT_FIJO"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta14" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>f. Acceso a internet m&oacute;vil?<span id="hint12"></span></label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33F_INT_MOVIL" name="C3H33F_INT_MOVIL" value="1" <?php echo ($hogar["C3H33F_INT_MOVIL"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33F_INT_MOVIL" name="C3H33F_INT_MOVIL" value="2" <?php echo ($hogar["C3H33F_INT_MOVIL"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta15" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
						<label>g. Computador?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33G_PC" name="C3H33G_PC" value="1" <?php echo ($hogar["C3H33G_PC"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H33G_PC" name="C3H33G_PC" value="2" <?php echo ($hogar["C3H33G_PC"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div id="alerta16" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
			
		</div>

		<div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente5" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="4"  />
			</div>	
		</div>
	</form>	
</div> 

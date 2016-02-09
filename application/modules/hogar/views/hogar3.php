<div id="page3" class="row col-md-12">
	<form id="frmPantalla3" name="frmPantalla3" method="post" action="">
		<h4>&iquest;Con qu&eacute; energ&iacute;a o combustible cocinan PRINCIPALMENTE en su hogar? </h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="1" <?php echo ($hogar["C3H29_COCINAN_CON"]==1)?"checked=\"checked\"":""; ?>>Gas natural conectado a red p&uacute;blica </label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="2" <?php echo ($hogar["C3H29_COCINAN_CON"]==2)?"checked=\"checked\"":""; ?>>Energ&iacute;a el&eacute;ctrica</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="3" <?php echo ($hogar["C3H29_COCINAN_CON"]==3)?"checked=\"checked\"":""; ?>>Gas propano en cilindro o en pipeta</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="4" <?php echo ($hogar["C3H29_COCINAN_CON"]==4)?"checked=\"checked\"":""; ?>>Petr&oacute;leo, gasolina, keros&eacute;n o alcohol</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="5" <?php echo ($hogar["C3H29_COCINAN_CON"]==5)?"checked=\"checked\"":""; ?>>Le&ntilde;a, madera, carb&oacute;n vegetal</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="6" <?php echo ($hogar["C3H29_COCINAN_CON"]==6)?"checked=\"checked\"":""; ?>>Carb&oacute;n mineral</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H29_COCINAN_CON" name="C3H29_COCINAN_CON" value="7" <?php echo ($hogar["C3H29_COCINAN_CON"]==7)?"checked=\"checked\"":""; ?>>No cocinan</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div id="alerta5" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		<div id ="otroCombustible">
			<h4>Adicionalmente, &iquest;utiliza otro combustible para cocinar? </h4>
			<div class="row">
				<div class="col-md-2">
					<div class="radio">
						<label><input type="radio" id="C3H30_OTRO_COMB" name="C3H30_OTRO_COMB" value="1" <?php echo ($hogar["C3H30_OTRO_COMB"]==1)?"checked=\"checked\"":""; ?>>Si &nbsp;&iquest;Cu&aacute;l?</label>
					</div>
				</div>				
					<div class="col-md-3">
						<div class="radio">
							<label><input type="radio" id="C3H30_OTRO_COMB" name="C3H30_OTRO_COMB" value="2" <?php echo ($hogar["C3H30_OTRO_COMB"]==2)?"checked=\"checked\"":""; ?>>No</label>
						</div>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<div id="alerta6" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			<div id="resno">
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="1" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==1)?"checked=\"checked\"":""; ?>>Gas natural conectado a red p&uacute;blica</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="2" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==2)?"checked=\"checked\"":""; ?>>Energ&iacute;a el&eacute;ctrica</label>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="3" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==3)?"checked=\"checked\"":""; ?>>Gas propano en cilindro o en pipeta</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="4" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==4)?"checked=\"checked\"":""; ?>>Petr&oacute;leo, gasolina, keros&eacute;n o alcohol</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="5" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==5)?"checked=\"checked\"":""; ?>>Le&ntilde;a, madera, carb&oacute;n vegetal</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<label>&nbsp;&nbsp;&nbsp;<input type="radio" id="C3H30A_CUAL_OTRO" name="C3H30A_CUAL_OTRO" value="6" <?php echo ($hogar["C3H30A_CUAL_OTRO"]==6)?"checked=\"checked\"":""; ?>>Carb&oacute;n mineral</label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
						<div id="alerta7" class="alert alert-warning" role="alert">
		        			<strong></strong>
		      			</div>	
					</div>
				</div>
			</div>
		</div>
		<h4>&iquest;De d&oacute;nde obtiene PRINCIPALMENTE su hogar el agua para PREPARAR LOS ALIMENTOS?</h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="1" <?php echo ($hogar["C3H31_AGUA_COCIN"]==1)?"checked=\"checked\"":""; ?> >Acueducto p&uacute;blico</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="2" <?php echo ($hogar["C3H31_AGUA_COCIN"]==2)?"checked=\"checked\"":""; ?>>Acueducto veredal o comunal</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="3" <?php echo ($hogar["C3H31_AGUA_COCIN"]==3)?"checked=\"checked\"":""; ?>>Pozo con bomba</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="4" <?php echo ($hogar["C3H31_AGUA_COCIN"]==4)?"checked=\"checked\"":""; ?>>Pozo sin bomba, aljibe, jag&uuml;ey o barreno  <span id="hint5"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="5" <?php echo ($hogar["C3H31_AGUA_COCIN"]==5)?"checked=\"checked\"":""; ?>>Agua lluvia</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="6" <?php echo ($hogar["C3H31_AGUA_COCIN"]==6)?"checked=\"checked\"":""; ?>>R&iacute;o, quebrada, manantial o nacimiento</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="7" <?php echo ($hogar["C3H31_AGUA_COCIN"]==7)?"checked=\"checked\"":""; ?>>Pila p&uacute;blica</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="8" <?php echo ($hogar["C3H31_AGUA_COCIN"]==8)?"checked=\"checked\"":""; ?>>Carro tanque</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="9" <?php echo ($hogar["C3H31_AGUA_COCIN"]==9)?"checked=\"checked\"":""; ?>>Aguatero</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H31_AGUA_COCIN" name="C3H31_AGUA_COCIN" value="10" <?php echo ($hogar["C3H31_AGUA_COCIN"]==10)?"checked=\"checked\"":""; ?>>Agua embotellada o en bolsa</label>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div id="alerta8" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
			<h4>&iquest;En este hogar separan los residuos s&oacute;lidos (basuras) entre RECICLABLES y ORDINARIOS?<span id="hint6"></span></h4>
			<div class="row">
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H32_RECICLAN" name="C3H32_RECICLAN" value="1" <?php echo ($hogar["C3H32_RECICLAN"]==1)?"checked=\"checked\"":""; ?>>Si</label>
					</div>
				</div>				
				<div class="col-md-1">
					<div class="radio">
						<label><input type="radio" id="C3H32_RECICLAN" name="C3H32_RECICLAN" value="2" <?php echo ($hogar["C3H32_RECICLAN"]==2)?"checked=\"checked\"":""; ?>>No</label>
					</div>
				</div>
			</div>
			
			<div class="row">
			<div class="col-md-8">
				<div id="alerta9" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente4" class="btn btn-sm btn-primary" >Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="3"  />
			</div>	
		</div>
	</form>
</div>

<div id="page2" class="row col-md-12">
	<form id="frmPantalla2" name="frmPantalla2" method="post" action="">
		<h4>Incluidos la sala y el comedor, &iquest;de cu&aacute;ntos cuartos en total dispone su hogar? <br> (No cuente cocina, ba&ntilde;os, ni los destinados exclusivamente para garaje o negocio)  </h4>
		<div class="row">
		    <div class="col-md-4">
				<div class="radio">
		  			<label><span id="hint2"></span></label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="radio">
					<label><input type="text" id="C3H27_NRO_CUARTOS" name="C3H27_NRO_CUARTOS" value="<?php echo $hogar['C3H27_NRO_CUARTOS'];?>"></label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>&nbsp;</label>
				</div>
			</div>
			<div class="col-md-3">
				<div id="alerta3" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
			
		<h4><br><br><br>&iquest;Cu&aacute;ntos de esos cuartos usan para dormir las personas de su hogar?  </h4>
		<div class="row">
			<div class="col-md-4">
					<div class="radio">
						<label><span id="hint3"></span></label>
					</div>
			</div>
			<div class="col-md-3">
					<div class="radio">
						<label><input type="text" id="C3H28_NRO_DORMIT" name="C3H28_NRO_DORMIT" value="<?php echo $hogar['C3H28_NRO_DORMIT'];?>"></span></label>
					</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
					<div class="radio">
						<label>&nbsp;</label>
					</div>
			</div>
			<div class="col-md-3">
				<div id="alerta4" class="alert alert-warning" role="alert">
        			<strong></strong> 
      			</div>	
			</div>
		</div>
		</br> 
		</br>
		</br>
		
		<div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente3" class="btn btn-sm btn-primary" >Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="2"  />
			</div>	
		</div>
		
	</form>
</div> 

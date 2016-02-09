<div id="page2">
	<form id="frmPregunta1" name="frmPregunta1" method="post" action="">
		<div class="row">
			<h4>La vivienda d&oacute;nde usted reside es: </h4>
			<div class="row">
				<div class="col-md-6">
					<div class="radio">
			  			<label><input type="radio" id="c2v14_tipo_viv" name="pregunta1" value="1" <?php echo ($vivienda["c2v14_tipo_viv"]==1)?"checked=\"checked\"":""; ?>>a. Una casa&nbsp;<span id="hint1"></span></label>
					</div>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>	
				</div>
				<div class="col-md-6">
					<div class="radio">
			  			<label><input type="radio" id="c2v14_tipo_viv" name="pregunta1" value="2" <?php echo ($vivienda["c2v14_tipo_viv"]==2)?"checked=\"checked\"":""; ?>>b. Un apartamento&nbsp;<span id="hint2"></span></label>
					</div>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</div>
			</div>
			<div class="row" style="height: 230px;">
				<div class="col-md-6">
					<div class="radio">
						<label><input type="radio" id="c2v14_tipo_viv" name="pregunta1" value="3" <?php echo ($vivienda["c2v14_tipo_viv"]==3)?"checked=\"checked\"":""; ?>>c. Tipo cuarto&nbsp;<span id="hint3"></span></label>
					</div>
					<br/><br/><br/><br/><br/><br/><br/><br/>	
				</div>
				<div class="col-md-6">
					<div class="radio">
			  			<label><input type="radio" id="c2v14_tipo_viv" name="pregunta1" value="4" <?php echo ($vivienda["c2v14_tipo_viv"]==4)?"checked=\"checked\"":""; ?>>d. Vivienda tradicional &eacute;tnica&nbsp;<span id="hint4"></span></label>
					</div>
					<br/><br/><br/><br/><br/><br/><br/><br/>
				</div>
			</div>
			<div class="row" style="height: 230px;">
				<div class="col-md-6">&nbsp;</div>
				<div class="col-md-6">
					<div class="radio">
			  			<label><input type="radio" id="c2v14_tipo_viv" name="pregunta1" value="5" <?php echo ($vivienda["c2v14_tipo_viv"]==5)?"checked=\"checked\"":""; ?>>e. Otro tipo de vivienda&nbsp;<span id="hint5"></span></label>
					</div>
				</div>
			</div>			
			<div class="row">
				<div class="col-md-12">
					<div id="alerta1" class="alert alert-warning" role="alert">
        				&nbsp;
      				</div>
				</div>
			</div>			
		</div>
		
		<div class="row">
			<div class="col-md-12" style="text-align: right">
				<button type="button" id="btnPregunta1" name="btnPregunta1" class="btn btn-sm btn-primary">Guardar y siguiente</button>
			</div>
		</div>
	</form>
</div>
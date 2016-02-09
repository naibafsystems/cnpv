<div id="page11" class="row col-md-10">
	<form id="frmPage11" name="frmPage11" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="11" />
  			<input type="hidden" name="edadPersona11" id="edadPersona11" value="" />
  			<input type="hidden" name="nroPersona11" id="nroPersona11" value="" />
  		</div>
		<div class="row">
		<h4>&iquest;D&oacute;nde o con qui&eacute;n permanece <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> durante la mayor parte del tiempo entre semana?</h4>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="1">Asiste a alg&uacute;n establecimiento de atenci&oacute;n infantil u hogar comunitario.</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="2">Con su padre o madre en la casa.</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="3">Con su padre o madre en el trabajo.</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="4">Al cuidado de un pariente o persona de 18 a&ntilde;os o m&aacute;s, en la casa. (donde reside el ni&ntilde;o(a))</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="5">Al cuidado de un pariente o persona menor de 18 a&ntilde;os, en la casa. (donde reside el ni&ntilde;o(a))</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="6">Al cuidado de un pariente o de otra persona en otro lugar.</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P68_CUIDA"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p68_cuida" name="c4p68_cuida" value="7">En la casa solo.</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p68_cuida" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div class="row" id="div_c4p69_estab_asis">
			<h4>&iquest;A qu&eacute; tipo de establecimiento asiste <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>?</h4>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="1">Hogar comunitario u hogar infantil de Bienestar familiar (p&uacute;blico)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="2">Centro de desarrollo infantil o jardines infantiles (p&uacute;blico)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="3">Escuela o colegio p&uacute;blico en los grados prejard&iacute;n o jard&iacute;n (prekinder o kinder)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="4">Colegio privado en los grados prejard&iacute;n o jard&iacute;n (prekinder o kinder)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="5">Jard&iacute;n infantil privado (guarder&iacute;a)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P69_ESTAB_ASIS"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p69_estab_asis" name="c4p69_estab_asis" value="6">Modalidad de atenci&oacute;n para grupos &eacute;tnicos</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p69_estab_asis" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div id="div_c4p70_edu_integ">
			<div class="row">
				<h4>&iquest;La persona con quien permanece <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> asiste o ha asistido al programa de Modalidad familiar<label><span id="hint_c4p70_edu_integ"></span></label> para la atenci&oacute;n integral?</h4>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P70_EDU_INTEG"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p70_edu_integ" name="c4p70_edu_integ" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P70_EDU_INTEG"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p70_edu_integ" name="c4p70_edu_integ" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p70_edu_integ" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente11" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
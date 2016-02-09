<div id="page15" class="row col-md-10">
	<form id="frmPage15" name="frmPage15" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="15" />
  			<input type="hidden" name="edadPersona15" id="edadPersona15" value="" />
  			<input type="hidden" name="nroPersona15" id="nroPersona15" value="" />
  		</div>
		<h4><?php echo $semanaAnterior;?><span id="hint_c4p75"></span>, <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> :</h4><br />
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="1">trabaj&oacute; por lo menos una hora<span id="hint_c4p75_trabajo"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="2">no trabaj&oacute;, pero ten&iacute;a trabajo</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="3">busc&oacute; trabajo pero hab&iacute;a trabajado antes</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="4">busc&oacute; trabajo por primera vez</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="5">estudi&oacute; y no trabaj&oacute; ni busc&oacute; trabajo</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="6">realiz&oacute; oficios del hogar y no busc&oacute; trabajo</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="7">estuvo incapacitado permanentemente para trabajar</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='8'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="8">vivi&oacute; de jubilaci&oacute;n o renta y no trabaj&oacute; ni busc&oacute; trabajo</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P75_TRABAJO"]=='9'){?> checked="checked"<?php }?> type="radio" id="c4p75_trabajo" name="c4p75_trabajo" value="9">estuvo en otra situaci&oacute;n</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p75_trabajo" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>

		<div id="div_cap76a_neg_flia">
			<h4>Aunque ya seleccion&oacute; que <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> <span id="div_c4p75_trabajo"><?php echo $trabajoActual;?></span> &iquest;la semana pasada:</h4>
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>a. ayud&oacute; en un negocio familiar o no familiar?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76A_NEG_FLIA"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76a_neg_flia" name="cap76a_neg_flia" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76A_NEG_FLIA"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76a_neg_flia" name="cap76a_neg_flia" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76a_neg_flia" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>b. vendi&oacute; por su cuenta alg&uacute;n producto?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76B_NEG_FLIG"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76b_neg_flig" name="cap76b_neg_flig" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76B_NEG_FLIG"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76b_neg_flig" name="cap76b_neg_flig" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76b_neg_flig" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>c. elabor&oacute; alg&uacute;n producto para vender?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76C_NEG_FLIF"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76c_neg_flif" name="cap76c_neg_flif" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76C_NEG_FLIF"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76c_neg_flif" name="cap76c_neg_flif" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76c_neg_flif" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>d. realiz&oacute; otro tipo de actividad a cambio de alg&uacute;n pago?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76D_NEG_FLIE"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76d_neg_flie" name="cap76d_neg_flie" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76D_NEG_FLIE"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76d_neg_flie" name="cap76d_neg_flie" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76d_neg_flie" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>e. realiz&oacute; algun tipo de trabajo colectivo de grupos &eacute;tnicos? (minga, mamuncia, convite, yanama)</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76E_NEG_FLID"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76e_neg_flid" name="cap76e_neg_flid" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76E_NEG_FLID"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76e_neg_flid" name="cap76e_neg_flid" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76e_neg_flid" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>f. ayud&oacute; en las labores del campo o en la cr&iacute;a de animales?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76F_NEG_FLIC"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76f_neg_flic" name="cap76f_neg_flic" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76F_NEG_FLIC"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76f_neg_flic" name="cap76f_neg_flic" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76f_neg_flic" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
	
			<div class="row">
				<div class="col-md-9">
					<div class="radio">
			  			<label>g. fue pasante o aprendiz o realiz&oacute; alg&uacute;n trabajo como voluntario?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76G_NEG_FLIB"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap76g_neg_flib" name="cap76g_neg_flib" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["CAP76G_NEG_FLIB"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap76g_neg_flib" name="cap76g_neg_flib" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap76g_neg_flib" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br/>
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente15" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>

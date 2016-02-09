<div id="page10" class="row col-md-10">
	<form id="frmPage10" name="frmPage10" method="post" action="">
		<?php
			$lPpal=$this->modpersona->consultarLimitacionPpal($nro_pers);
			$lPpalActual=$this->modpersona->consultarLimitacionPpalActual($nro_pers,"");
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="10" />
  			<input type="hidden" name="edadPersona10" id="edadPersona10" value="" />
  			<input type="hidden" name="nroPersona10" id="nroPersona10" value="" />
  		</div>
				
	<div id="div_desempeno" <?php //echo ($persona["variasDificultades"] == 1)?" style='visibility: hidden;' ":""; ?> >	
	
		<h4>De las anteriores dificultades, &iquest;cu&aacute;l es la que m&aacute;s afecta el desempe&ntilde;o diario de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>?</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><select class="form-control" id="c4p65_lim_ppal" name="c4p65_lim_ppal" class="form-control" autofocus>
								<?php if(count($lPpal)>1){?><option value="">Seleccione una opci&oacute;n</option><?php }?>
				  				<?php for($i=0;$i<count($lPpal);$i++)
				  				{
				  				?>
				  					<option <?php if($persona["C4P65_LIM_PPAL"]==$lPpal[$i]["VALOR_MINIMO"]){ ?>selected="selected"<?php }?> value="<?php echo $lPpal[$i]["VALOR_MINIMO"];?>"><?php echo $lPpal[$i]["VALOR_MINIMO"].' - '.$lPpal[$i]["DESCRIPCION"];?></option>
				  				<?php 
				  				}
				  				?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p65_lim_ppal" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
	</div>
		<h4>La dificultad de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> de <span id="div_LPpal"><?php echo $lPpalActual["LACTUAL"];?></span> fue ocasionada:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="1">porque naci&oacute; as&iacute;</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="2">por enfermedad</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="3">por accidente</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="4">por edad avanzada</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="5">por el conflicto armado</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="6">por violencia NO asociada al conflicto armado</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="7">por otra causa, </label>
		  			<div id="div_c4p66a_otracausa">
			  			<br /><label>&iquest;cu&aacute;l?</label>
			  			<label><input type="text" id="c4p66a_otracausa" name="c4p66a_otracausa" value="<?php echo $persona["C4P66A_OTRACAUSA"];?>" /></label>
			  		</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p66a_otracausa" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P66_CAUSA"]=='8'){?> checked="checked"<?php }?> type="radio" id="c4p66_causa" name="c4p66_causa" value="8">no sabe</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p66_causa" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<h4>&iquest;Para la dificultad de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> de <span id="div_LPpal1"><?php echo $lPpalActual["LACTUAL"];?></span> utiliza ayudas permanentes? <span id="hint_page9"></span></h4>
		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>a. t&eacute;cnicas o tecnol&oacute;gicas (gafas, lentes, lupas, implantes cocleares, bastones, silla de ruedas, entre otras)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67A_AYUDA_TEC"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67a_ayuda_tec" name="c4p67a_ayuda_tec" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67A_AYUDA_TEC"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67a_ayuda_tec" name="c4p67a_ayuda_tec" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67a_ayuda_tec" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>b. de otras personas</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67B_AYUDA_PERS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67b_ayuda_pers" name="c4p67b_ayuda_pers" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67B_AYUDA_PERS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67b_ayuda_pers" name="c4p67b_ayuda_pers" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67b_ayuda_pers" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>c. medicamentos o terapias</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67C_AYUDA_MED"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67c_ayuda_med" name="c4p67c_ayuda_med" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67C_AYUDA_MED"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67c_ayuda_med" name="c4p67c_ayuda_med" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67c_ayuda_med" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>d. pr&aacute;cticas de medicina ancestral</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67D_AYUDA_ANCES"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67d_ayuda_ances" name="c4p67d_ayuda_ances" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67D_AYUDA_ANCES"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67d_ayuda_ances" name="c4p67d_ayuda_ances" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67d_ayuda_ances" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>e. perro gu&iacute;a</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67E_AYUDA_ANIM"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67e_ayuda_anim" name="c4p67e_ayuda_anim" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67E_AYUDA_ANIM"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67e_ayuda_anim" name="c4p67e_ayuda_anim" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67e_ayuda_anim" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-10">
				<div class="radio">
		  			<label>f. otro tipo de ayuda</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67F_AYUDA_OTRO"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p67f_ayuda_otro" name="c4p67f_ayuda_otro" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P67F_AYUDA_OTRO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p67f_ayuda_otro" name="c4p67f_ayuda_otro" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p67f_ayuda_otro" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente10" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
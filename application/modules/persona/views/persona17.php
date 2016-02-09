<div id="page17" class="row col-md-10">
	<form id="frmPage17" name="frmPage17" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P79A_DPTO_TRAB"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="17" />
  			<input type="hidden" name="edadPersona17" id="edadPersona17" value="" />
  			<input type="hidden" name="nroPersona17" id="nroPersona17" value="" />
  		</div>
		<div class="row" id="div_page17">
			<h4>En ese <b>trabajo</b> <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> era:</h4>
			<div class="row">
				<div class="col-md-5">
					<div class="radio">
					</div>	
				</div>
				<div class="col-md-6">
					<div class="radio">
			  			<label><span id="hint_c4p78_tipo_trab"></span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="1">empleado(a), obrero(a) de empresa particular.</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="2">empleado(a), obrero(a) del gobierno.</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="3">patr&oacute;n(a), empleador(a).</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="4">trabajador(a) por cuenta propia o independiente.<span id="hint_c4p78_tipo_trab_ind"></span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="5">jornalero(a) o pe&oacute;n.</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="6">empleado(a) dom&eacute;stico(a).</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P78_TIPO_TRAB"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p78_tipo_trab" name="c4p78_tipo_trab" value="7">trabajador(a) sin remuneraci&oacute;n.</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p78_tipo_trab" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />

			<h4>El lugar donde <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> trabaj&oacute; est&aacute; ubicado en:</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P79_SITIO_TRAB"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p79_sitio_trab" name="c4p79_sitio_trab" value="1"><?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P79_SITIO_TRAB"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p79_sitio_trab" name="c4p79_sitio_trab" value="2">Otro municipio</label>
					</div>
				</div>
				<div id="div_c4p79_sitio_trab">
					<div class="col-md-12">
						<div class="radio">
				  			<label><select class="form-control" id="c4p79a_dpto_trab" name="c4p79a_dpto_trab" class="form-control" required autofocus>
										<option value="">Seleccione el departamento</option>
						  				<?php for($i=0;$i<count($dpto);$i++)
						  				{
						  				?>
						  					<option <?php if($persona["C4P79A_DPTO_TRAB"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
						  				<?php 
						  				}
						  				?>
									</select>
							</label>
						</div>
					</div>
					<div class="col-md-12">
						<div id="alert_c4p79a_dpto_trab" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
					<div class="col-md-12">
						<div class="radio">
				  			<label><select class="form-control" id="c4p79b_mpio_trab" name="c4p79b_mpio_trab" class="form-control" required autofocus>
										<option value="">Seleccione el municipio</option>
						  				<?php for($i=0;$i<count($mpio);$i++)
						  				{
						  				?>
						  					<option <?php if($persona["C4P79B_MPIO_TRAB"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
						  				<?php 
						  				}
						  				?>
									</select>
							</label>
						</div>
					</div>
					<div class="col-md-12">
						<div id="alert_c4p79b_mpio_trab" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label><input <?php if($persona["C4P79_SITIO_TRAB"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p79_sitio_trab" name="c4p79_sitio_trab" value="3">Otro pa&iacute;s</label>
					</div>		
				</div>
				<div class="col-md-12" id="div_c4p79c_pais_trab">
					<div class="radio">
			  			<label><select class="form-control" id="c4p79c_pais_trab" name="c4p79c_pais_trab" class="form-control" required autofocus>
									<option value="">Seleccione el pa&iacute;s</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P79C_PAIS_TRAB"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p79c_pais_trab" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p79_sitio_trab" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>	
			
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> est&aacute; cotizando actualmente a un fondo de pensiones? </h4>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P80_COTIZ_PENS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p80_cotiz_pens" name="c4p80_cotiz_pens" value="1">S&iacute;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P80_COTIZ_PENS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p80_cotiz_pens" name="c4p80_cotiz_pens" value="2">No</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="radio">
		  			<label><input <?php if($persona["C4P80_COTIZ_PENS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p80_cotiz_pens" name="c4p80_cotiz_pens" value="3">Ya est&aacute; pensionado</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p80_cotiz_pens" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente17" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>
</div>
<div id="page5" class="row col-md-10">
	<form id="frmPage5" name="frmPage5" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P54A_DPTO_1ANO"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="5" />
  			<input type="hidden" name="edadPersona5" id="edadPersona5" value="" />
  			<input type="hidden" name="nroPersona5" id="nroPersona5" value="" />
  		</div>
		<?php 
			$mes=date('m')-1;
			$ano=date('Y');
			$array = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		?>
		<h4>Indique el lugar donde resid&iacute;a <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> en <?php echo $array[$mes];?> de <?php echo ($ano-1);?>?</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P54_VIVIA_1ANO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p54_vivia_1ano" name="c4p54_vivia_1ano" value="2"><?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P54_VIVIA_1ANO"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p54_vivia_1ano" name="c4p54_vivia_1ano" value="3">Otro municipio colombiano</label>
				</div>
			</div>
			<div id="div_c4p54_vivia_1ano_otro_mpio">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p54a_dpto_1ano" name="c4p54a_dpto_1ano" class="form-control" autofocus>
									<option value="">Seleccione el departamento...</option>
					  				<?php for($i=0;$i<count($dpto);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P54A_DPTO_1ANO"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p54a_dpto_1ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p54b_mpio_1ano" name="c4p54b_mpio_1ano" class="form-control" autofocus>
									<option value="">Seleccione el municipio</option>
					  				<?php for($i=0;$i<count($mpio);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P54B_MPIO_1ANO"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p54b_mpio_1ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P54_VIVIA_1ANO"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p54_vivia_1ano" name="c4p54_vivia_1ano" value="4">Otro pa&iacute;s</label>
				</div>		
			</div>
			<div id="div_c4p54_vivia_1ano_otro_pais">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p54c_pais_1ano" name="c4p54c_pais_1ano" class="form-control" required autofocus>
									<option value="">Seleccione el pa&iacute;s...</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P54C_PAIS_1ANO"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?>value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p54c_pais_1ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p54_vivia_1ano" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div id="div_c4p55_clase_1ano">
			<h4>Seleccione el &aacute;rea donde resid&iacute;a <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> en <?php echo $array[$mes];?> de <?php echo ($ano-1);?></h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P55_CLASE_1ANO"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p55_clase_1ano" name="c4p55_clase_1ano" value="1">Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P55_CLASE_1ANO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p55_clase_1ano" name="c4p55_clase_1ano" value="2">Centro poblado? (corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P55_CLASE_1ANO"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p55_clase_1ano" name="c4p55_clase_1ano" value="3">Rural disperso (vereda, campo, resguardo, territorio colectivo)</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p55_clase_1ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>
			
		<div id="div_c4p56_causa_1ano">
			<h4>Indique el principal motivo por el que <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> cambi&oacute; de municipio o de pa&iacute;s donde resid&iacute;a en <?php echo $array[$mes];?> de <?php echo ($ano-1);?>?</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="1">Trabajo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="2">Estudio </label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="3">Salud</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="4">Amenaza o riesgo para su vida o integridad f&iacute;sica, ocasionada por conflicto armado</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="5">Amenaza o riesgo para su vida o integridad f&iacute;sica, por violencia NO asociada al conflicto armado</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="6">Desastres naturales</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="7">Conformaci&oacute;n de un nuevo hogar</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='8'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="8">Acompa&ntilde;ar a otro(s) miembro(s) del hogar</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='9'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="9">Motivos culturales (pueblo n&oacute;mada)</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P56_CAUSA_1ANO"]=='10'){?> checked="checked"<?php }?> type="radio" id="c4p56_causa_1ano" name="c4p56_causa_1ano" value="10">Otro </label>
					</div>
					<div id="div_c4p56a_otra_causa">
						<div class="radio">
							<label>&iquest;Cu&aacute;l?</label>
				  			<label><input type="text" id="c4p56a_otra_causa" name="c4p56a_otra_causa" value="<?php echo $persona["C4P56A_OTRA_CAUSA"];?>" style="width: 250px" /></label>
						</div>	
						<div class="col-md-12">
							<div id="alert_c4p56a_otra_causa" class="alert alert-warning" role="alert">
					        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
					      	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p56_causa_1ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente5" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
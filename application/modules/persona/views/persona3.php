<div id="page3" class="row col-md-10">
	<form id="frmPage3" name="frmPage3" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P50A_DPTO_NAC"]);
			$mpioMama=$this->modpersona->consultarTodosMpios($persona["C4P51A_DPTO_MAMA"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="3" />
  			<input type="hidden" name="edadPersona3" id="edadPersona3" value="" />
  			<input type="hidden" name="nroPersona3" id="nroPersona3" value="" />
  		</div>
		<h4>Indique d&oacute;nde naci&oacute; <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P50_LUG_NAC"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p50_lug_nac" name="c4p50_lug_nac" value="1"><?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
				<?php /* 2016feb01 - hhchavez - envia mpio de residencia
					<input type="hidden" id="c4p50a_dpto_nac_resid" name="c4p50a_dpto_nac_resid" value="<?php echo $nombreMpioRes[0]["COD_DPTO"];?>" />
					<input type="hidden" id="c4p50b_mpio_nac_resid" name="c4p50b_mpio_nac_resid" value="<?php echo $nombreMpioRes[0]["VALOR_MINIMO"];?>" />
				*/ ?>	
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P50_LUG_NAC"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p50_lug_nac" name="c4p50_lug_nac" value="2">En otro municipio colombiano</label>
				</div>
			</div>
			<div id="div_c4p50_lug_nac_otro_mpio">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p50a_dpto_nac" name="c4p50a_dpto_nac" autofocus>
									<option value="">Seleccione el departamento</option>
					  				<?php for($i=0;$i<count($dpto);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P50A_DPTO_NAC"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p50a_dpto_nac" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p50b_mpio_nac" name="c4p50b_mpio_nac" class="form-control" autofocus>
									<option value="">Seleccione el municipio</option>
					  				<?php for($i=0;$i<count($mpio);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P50B_MPIO_NAC"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p50b_mpio_nac" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P50_LUG_NAC"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p50_lug_nac" name="c4p50_lug_nac" value="3">En otro pa&iacute;s</label>
				</div>		
			</div>
			<div id="div_c4p50_lug_nac_otro_pais">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p50c_pais_nac" name="c4p50c_pais_nac" class="form-control" autofocus>
									<option value="">Seleccione el pa&iacute;s</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P50C_PAIS_NAC"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p50c_pais_nac" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&iquest;En qu&eacute; a&ntilde;o lleg&oacute; a Colombia?</label>
			  			<label><select class="form-control" id="c4p50c1_ano_llego" name="c4p50c1_ano_llego">
			  				<option value="">Seleccione el a&ntilde;o</option>
			  				<?php for($i=2015;$i>=1900;$i--){ ?>
			  					<option <?php if($persona["C4P50C1_ANO_LLEGO"]==$i){?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
			  				<?php } ?>
			  				</select>
			  			</label>
					</div>		
				</div>
				<div class="col-md-12">
					<div id="alert_c4p50c1_ano_llego" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p50_lug_nac" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<h4>Cuando <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> naci&oacute;, la MAM&Aacute; RESID&Iacute;A en:</h4>
		<div class="row">
			<div class="col-md-7">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="radio">
		  			<label><span id="hint_c4p51_res_mama"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P51_RES_MAMA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p51_res_mama" name="c4p51_res_mama" value="1"><?php //echo $nombreMpioRes[0]["DESCRIPCION"];?>El mismo Municipio o Pa&iacute;s donde naci&oacute; <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P51_RES_MAMA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p51_res_mama" name="c4p51_res_mama" value="2">Otro municipio colombiano</label>
				</div>
			</div>
			<div id="div_c4p51_res_mama_otro_mpio">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p51a_dpto_mama" name="c4p51a_dpto_mama" class="form-control" autofocus>
									<option value="">Seleccione el departamento</option>
					  				<?php for($i=0;$i<count($dpto);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P51A_DPTO_MAMA"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p51a_dpto_mama" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p51b_mpio_mama" name="c4p51b_mpio_mama" class="form-control" autofocus>
									<option value="">Seleccione el municipio</option>
					  				<?php for($i=0;$i<count($mpioMama);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P51B_MPIO_MAMA"]==$mpioMama[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpioMama[$i]["VALOR_MINIMO"];?>"><?php echo $mpioMama[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p51b_mpio_mama" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P51_RES_MAMA"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p51_res_mama" name="c4p51_res_mama" value="3">Otro pa&iacute;s</label>
				</div>		
			</div>
			<div id="div_c4p51_res_mama_otro_pais">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select id="c4p51c_pais_mama" name="c4p51c_pais_mama" class="form-control" autofocus>
									<option value="">Seleccione el pa&iacute;s</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P51C_PAIS_MAMA"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p51c_pais_mama" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P51_RES_MAMA"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p51_res_mama" name="c4p51_res_mama" value="4">No sabe</label>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p51_res_mama" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente3" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
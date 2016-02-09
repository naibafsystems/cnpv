<div id="page21" class="row col-md-10">
	<form id="frmPage21" name="frmPage21" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P90A_DPTO_CENS"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="21" />
  			<input type="hidden" name="edadPersona21" id="edadPersona21" value="" />
  			<input type="hidden" name="nroPersona21" id="nroPersona21" value="" />
  		</div>
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> fue censado este a&ntilde;o por el DANE en ESTE o en OTRO MUNICIPIO del PA&Iacute;S? </h4>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P89_FUE_CENS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p89_fue_cens" name="c4p89_fue_cens" value="1">S&iacute;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P89_FUE_CENS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p89_fue_cens" name="c4p89_fue_cens" value="2">No</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="radio">
		  			<label><input <?php if($persona["C4P89_FUE_CENS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p89_fue_cens" name="c4p89_fue_cens" value="3">No sabe</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p89_fue_cens" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
	
		<div id="div_fue_censado">
			<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> d&oacute;nde fue CENSADO:</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P90_LUG_CENS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p90_lug_cens" name="c4p90_lug_cens" value="1"><?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P90_LUG_CENS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p90_lug_cens" name="c4p90_lug_cens" value="2">en otro municipio colombiano</label>
					</div>
				</div>
				<div id="div_c4p90_lug_cens_otro_mpio">
					<div class="col-md-12">
						<div class="radio">
				  			<label><select class="form-control" id="c4p90a_dpto_cens" name="c4p90a_dpto_cens" class="form-control"  autofocus>
										<option value="">Seleccione el departamento</option>
						  				<?php for($i=0;$i<count($dpto);$i++)
						  				{
						  				?>
						  					<option <?php if($persona["C4P90A_DPTO_CENS"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
						  				<?php 
						  				}
						  				?>
									</select>
							</label>
						</div>
					</div>
					<div class="col-md-12">
						<div id="alert_c4p90a_dpto_cens" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
					<div class="col-md-12">
						<div class="radio">
				  			<label><select class="form-control" id="c4p90b_mpio_cens" name="c4p90b_mpio_cens" class="form-control"  autofocus>
										<option value="">Seleccione el municipio</option>
						  				<?php for($i=0;$i<count($mpio);$i++)
						  				{
						  				?>
						  					<option <?php if($persona["C4P90B_MPIO_CENS"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
						  				<?php 
						  				}
						  				?>
									</select>
							</label>
						</div>
					</div>
					<div class="col-md-12">
						<div id="alert_c4p90b_mpio_cens" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p90_lug_cens" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		
			<h4>&iquest;En qu&eacute; mes fue CENSADO <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>?</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><select class="form-control" id="c4p91_mes_cens" name="c4p91_mes_cens" class="form-control"  autofocus>
									<option value="">Mes</option>
									<?php for ($i=1; $i <= 12; $i++){
											$Mes_Desc = ($i==1) ? "ENERO" : (($i==2) ? "FEBRERO" : (($i==3) ? "MARZO" : (($i==4) ? "ABRIL" : (($i==5) ? "MAYO" : (($i==6) ? "JUNIO" : (($i==7) ? "JULIO" : (($i==8) ? "AGOSTO" : (($i==9) ? "SEPTIEMBRE" : (($i==10) ? "OCTUBRE" : (($i==11) ? "NOVIEMBRE" : "DICIEMBRE" )))))))))) ;
											?>
									        <option <?php if($persona["C4P91_MES_CENS"]==$i){?>selected="selected"<?php }?> value="<?PHP  echo($i);?>"><?PHP  echo($Mes_Desc);?> </option>
								        <?PHP  }?>
								</select>
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p91_mes_cens" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente21" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
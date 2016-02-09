<div id="page4" class="row col-md-10">
	<form id="frmPage4" name="frmPage4" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P52A_DPTO_5ANOS"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="4" />
  			<input type="hidden" name="edadPersona4" id="edadPersona4" value="" />
  			<input type="hidden" name="nroPersona4" id="nroPersona4" value="" />
  		</div>
		<?php 
			$mes=date('m')-1;
			$ano=date('Y');
			$array = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		?>
		<h4>Indique el lugar donde resid&iacute;a <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> en <?php echo $array[$mes];?> de <?php echo ($ano-5);?>?</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P52_VIVIA_5ANOS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p52_vivia_5anos" name="c4p52_vivia_5anos" value="2"><?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P52_VIVIA_5ANOS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p52_vivia_5anos" name="c4p52_vivia_5anos" value="3">En otro municipio colombiano</label>
				</div>
			</div>
			<div id="div_c4p52_vivia_5anos_otro_mpio">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p52a_dpto_5anos" name="c4p52a_dpto_5anos" class="form-control" autofocus>
									<option value="">Seleccione el departamento</option>
					  				<?php for($i=0;$i<count($dpto);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P52A_DPTO_5ANOS"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p52a_dpto_5anos" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p52b_mpio_5anos" name="c4p52b_mpio_5anos" class="form-control" autofocus>
									<option value="">Seleccione el municipio</option>
					  				<?php for($i=0;$i<count($mpio);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P52B_MPIO_5ANOS"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p52b_mpio_5anos" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P52_VIVIA_5ANOS"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p52_vivia_5anos" name="c4p52_vivia_5anos" value="4">En otro pa&iacute;s</label>
				</div>		
			</div>
			<div id="div_c4p52_vivia_5anos_otro_pais">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p52c_pais_5ano" name="c4p52c_pais_5ano" class="form-control" autofocus>
									<option value="">Seleccione el pa&iacute;s</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P52C_PAIS_5ANO"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p52c_pais_5ano" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>A&ntilde;o en el que lleg&oacute; a Colombia</label>
			  			<label><select class="form-control" id="c4p52c1_ano_llega5" name="c4p52c1_ano_llega5">
			  				<option value="">Seleccione el a&ntilde;o</option>
			  				<?php for($i=2015;$i>=2011;$i--){ ?>
			  					<option <?php if($persona["C4P52C1_ANO_LLEGA5"]==$i){?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
			  				<?php } ?>
			  				</select>
			  			</label>
					</div>		
				</div>
				<div class="col-md-12">
					<div id="alert_c4p52c1_ano_llega5" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p52_vivia_5anos" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div id="div_c4p53_clase_5anos">
			<h4>Seleccione el &aacute;rea donde resid&iacute;a <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> en <?php echo $array[$mes];?> de <?php echo ($ano-5);?></h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P53_CLASE_5ANOS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p53_clase_5anos" name="c4p53_clase_5anos" value="1">Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P53_CLASE_5ANOS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p53_clase_5anos" name="c4p53_clase_5anos" value="2">Centro poblado (corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label><input <?php if($persona["C4P53_CLASE_5ANOS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p53_clase_5anos" name="c4p53_clase_5anos" value="3">Rural disperso (vereda, campo, resguardo, territorio colectivo)</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p53_clase_5anos" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
		</div>			
		<br />

		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente4" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
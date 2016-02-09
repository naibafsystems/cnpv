<div id="page1" class="row col-md-10">
<a onclick='$("#page1").hide(); $("#page17").show();'> hch pruebas </a>
	<form id="frmPage1" name="frmPage1" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<h4>Digite la fecha de nacimiento de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> ?</h4>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="1" />
  			<input type="hidden" name="c4p49_parentesco" id="c4p49_parentesco" value="<?php echo $persona["C4P49_PARENTESCO"]?>" />
  			<input type="hidden" name="nroPersona1" id="nroPersona1" value="<?php echo $nro_pers?>" />
  		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><select class="form-control" id="c4p46a_dia_nac" name="c4p46a_dia_nac" class="form-control"   <?php echo $persona["DESHABILITA_EDAD"]; ?>   >
								<option value="">D&iacute;a</option>
								<?php for ($i=1; $i<=31; $i++){ ?> 
							   	          <option <?php if($persona["C4P46A_DIA_NAC"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
							    <?php } ?>
							</select>
						<div class="col-md-12">
							<div id="alerta1" class="alert alert-warning" role="alert" style="width: 120px">
			        			<!-- <strong>Warning!</strong> Best check yo self, you're not looking too good. -->
			      			</div>
						</div>
					</label>
					<label><select id="c4p46b_mes_nac" name="c4p46b_mes_nac" class="form-control" <?php echo $persona["DESHABILITA_EDAD"]; ?> >
								<option value="">Mes</option>
								<?php for ($i=1; $i <= 12; $i++){
										$Mes_Desc = ($i==1) ? "ENERO" : (($i==2) ? "FEBRERO" : (($i==3) ? "MARZO" : (($i==4) ? "ABRIL" : (($i==5) ? "MAYO" : (($i==6) ? "JUNIO" : (($i==7) ? "JULIO" : (($i==8) ? "AGOSTO" : (($i==9) ? "SEPTIEMBRE" : (($i==10) ? "OCTUBRE" : (($i==11) ? "NOVIEMBRE" : "DICIEMBRE" )))))))))) ;
										?>
								        <option <?php if($persona["C4P46B_MES_NAC"]==$i){?>selected="selected"<?php }?> value="<?php  echo($i);?>"><?php echo($Mes_Desc);?> </option>
							        <?PHP  }?>
							</select>
						<div class="col-md-12">
							<div id="alerta2" class="alert alert-warning" role="alert" style="width: 120px">
			        			<!-- <strong>Warning!</strong> Best check yo self, you're not looking too good. -->
			      			</div>
						</div>
					</label>
					<label><select class="form-control" id="c4p46c_ano_nac" name="c4p46c_ano_nac" class="form-control" <?php echo $persona["DESHABILITA_EDAD"]; ?> >
								<option value="">A&ntilde;o</option>
								<?php for ($i=2015; $i>=1895; $i--){ ?> 
							   	          <option <?php if($persona["C4P46C_ANO_NAC"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
							    <?php } ?>
							</select>
						<div class="col-md-12">
							<div id="alerta3" class="alert alert-warning" role="alert" style="width: 120px">
			        			<!-- <strong>Warning!</strong> Best check yo self, you're not looking too good. -->
			      			</div>
						</div>
					</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input <?php if($persona["C4P46_SABE_FECHA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p46_sabe_fecha" name="c4p46_sabe_fecha" value="2" <?php echo $persona["DESHABILITA_EDAD"]; ?> >No sabe.</label>
				</div>
			</div>
		</div>
		<br/>
		
		<h4>A&ntilde;os cumplidos</h4>
		<div class="row">
			<div class="col-md-10">
				<div class="radio">
					<label><input type="text" id="c4p47_edad" name="c4p47_edad" value="<?php echo $persona["C4P47_EDAD"];?>" maxlength="3" <?php echo $persona["DESHABILITA_EDAD"]; ?> /></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p47_edad" class="alert alert-warning" role="alert">
        			<!-- <strong>Warning!</strong> Best check yo self, you're not looking too good. -->
      			</div>
			</div>
		</div>			
		<br/>
		
		<h4>&iquest;Cu&aacute;l o cu&aacute;les nacionalidades tiene <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> ?</h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
		  			<label><input <?php if($persona["C4P48_COLOMBIA"]=='1'){?> checked="checked"<?php }?> type="checkbox" name="c4p48_colombia" id="c4p48_colombia" value="1" /> Colombiana</label>
				</div>
				<br>
				<div class="radio">
					<label><input <?php if($persona["C4P48A_OTRA"]=='1'){?> checked="checked" <?php }?> type="checkbox" name="c4p48a_otra" id="c4p48a_otra" value="1" /> Otra nacionalidad </label>
			  		<br>
					<div id="div_otra_nal" >
			  			<br /><label>&iquest;Cu&aacute;l?</label>
			  			<label>
			  			<select id="c4p48b_cual_nal" name="c4p48b_cual_nal" class="form-control" >
			  				<option value="">Pa&iacute;s</option>
			  				<?php for($i=0;$i<count($pais);$i++)
			  				{
			  				?>
			  					<option <?php if($persona["C4P48B_CUAL_NAL"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
			  				<?php 
			  				}
			  				?>
			  			</select>
			  			</label>
			  		</div>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="radio">
		  			<label><span id="hint_nacionalidad"></span></label>
					<br/><br/><br/><br/><br/><br><br><br><br><br>
				</div>
			</div>
		</div>
		<!--
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P48_COLOMBIA"]=='1'){?> checked="checked"<?php }?> type="checkbox" name="c4p48_colombia" id="c4p48_colombia" value="1" /> Colombiana</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P48A_OTRA"]=='1'){?> checked="checked" <?php }?> type="checkbox" name="c4p48a_otra" id="c4p48a_otra" value="1" /> Otra nacionalidad </label>
			  		<div id="div_otra_nal" >
			  			<br /><label>&iquest;Cu&aacute;l?</label>
			  			<label>
			  			<select id="c4p48b_cual_nal" name="c4p48b_cual_nal" class="form-control" >
			  				<option value="">Pa&iacute;s</option>
			  				<?php for($i=0;$i<count($pais);$i++)
			  				{
			  				?>
			  					<option <?php if($persona["C4P48B_CUAL_NAL"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
			  				<?php 
			  				}
			  				?>
			  			</select>
			  			</label>
			  		</div>
				</div>
			</div>
		</div>
		-->
		
		<div class="row">
			<div class="col-md-12">
				<div id="alerta5" class="alert alert-warning" role="alert">
        			<!-- <strong>Warning!</strong> Best check yo self, you're not looking too good. -->
      			</div>
			</div>
		</div>			
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente1" name="btnSiguiente1" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>
</div>
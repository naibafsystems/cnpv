<div id="page6" class="row col-md-10">
	<form id="frmPage6" name="frmPage6" method="post" action="">
		<?php
			$pIndigena=$this->modpersona->consultarPuebloIndigena();
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="6" />
  			<input type="hidden" name="edadPersona6" id="edadPersona6" value="" />
  			<input type="hidden" name="nroPersona6" id="nroPersona6" value="" />
  		</div>
		<h4>De acuerdo con su cultura, pueblo o rasgos f&iacute;sicos <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> es o se reconoce como:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="1">Ind&iacute;gena</label>
				</div>
			</div>
			<div class="col-md-12" id="div_c4p57a_cod_etnia">
				<div class="radio">
		  			<label>&iquest;A cu&aacute;l pueblo ind&iacute;gena pertenece?</label>
		  			<label>
		  				<select class="form-control" id="c4p57a_cod_etnia" name="c4p57a_cod_etnia">
		  					<option value="">Seleccione una opci&oacute;n</option>
			  				<?php for($i=0;$i<count($pIndigena);$i++)
			  				{
			  				?>
			  					<option <?php if($persona["C4P57A_COD_ETNIA"]==$pIndigena[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pIndigena[$i]["VALOR_MINIMO"];?>"><?php echo $pIndigena[$i]["DESCRIPCION"];?></option>
			  				<?php 
			  				}
			  				?>
		  				</select>
		  			</label>
				</div>
			</div>
			<div class="col-md-12">
				<div id="alert_c4p57a_cod_etnia" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
			<br/>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="2">Gitano o Rrom</label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P57_ETNIA"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="3">Raizal del Archipi&eacute;lago de San Andr&eacute;s, Providencia y Santa Catalina</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="4">Palenquero de San Basilio</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="5">Negro(a)</label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P57_ETNIA"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="6">Mulato(a)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="7">Afrodescendiente, afrocolombiano(a)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P57_ETNIA"]=='8'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="8">Blanco(a) o mestizo(a)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P57_ETNIA"]=='9'){?> checked="checked"<?php }?> type="radio" id="c4p57_etnia" name="c4p57_etnia" value="9">Otro diferente de los anteriores</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p57_etnia" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div id="div_c4p58a_habla_leng">
			<h4>&iquest;Habla <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>:</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
			  			<label>a. la lengua nativa de su pueblo?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58A_HABLA_LENG"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p58a_habla_leng" name="c4p58a_habla_leng" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58A_HABLA_LENG"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p58a_habla_leng" name="c4p58a_habla_leng" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p58a_habla_leng" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<br />			
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
			  			<label>b. otra(s) lengua(s) nativa(s)?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58B_OTRAS_LENG"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p58b_otras_leng" name="c4p58b_otras_leng" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-5" id="div_c4p58b1_qotras_leng">
					<div class="radio">
			  			<label>&iquest;Cu&aacute;ntas? </label>
			  			<label>
			  				<select class="form-control" id="c4p58b1_qotras_leng" name="c4p58b1_qotras_leng">
			  					<option value="">Seleccione una opci&oacute;n</option>
			  					<?php for($i=1;$i<10;$i++){
			  						?>
			  						<option <?php if($persona["C4P58B1_QOTRAS_LENG"]==$i){?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
			  						<?php
			  					}?>
			  				</select>
			  			</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58B_OTRAS_LENG"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p58b_otras_leng" name="c4p58b_otras_leng" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p58b_otras_leng" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<br />			
			<div class="row">
				<div class="col-md-4">
					<div class="radio">
			  			<label>c. espa&ntilde;ol?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58C_HABLA_ESP"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p58c_habla_esp" name="c4p58c_habla_esp" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P58C_HABLA_ESP"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p58c_habla_esp" name="c4p58c_habla_esp" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p58c_habla_esp" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<br />			
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente6" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
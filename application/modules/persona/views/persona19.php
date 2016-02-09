<div id="page19" class="row col-md-10">
	<form id="frmPage19" name="frmPage19" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="19" />
  			<input type="hidden" name="edadPersona19" id="edadPersona19" value="" />
  			<input type="hidden" name="nroPersona19" id="nroPersona19" value="" />
  		</div>
		<h4>&iquest;Cu&aacute;ntos hijos e hijas nacidos vivos ha tenido <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> en total:</h4>
		<div class="row">
			<div class="col-md-8">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="radio">
		  			<label><span id="hint11"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>&iquest;Cu&aacute;ntos?</label>
		  			<label><select class="form-control" id="c4p82_thnv" name="c4p82_thnv" class="form-control" autofocus>
								<option value="">Seleccione</option>
								<?php for ($i=0; $i<=30; $i++){ ?> 
							   	          <option <?php if($persona["C4P82_THNV"]==$i && $persona["C4P82_THNV"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
							    <?php } ?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p82_thnv" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>&iquest;Cu&aacute;ntos hombres?</label>
		  			<label><select class="form-control" id="c4p82a_hnvh" name="c4p82a_hnvh" class="form-control" autofocus>
								<option value="">Seleccione</option>
								<?php for ($i=0; $i<=15; $i++){ ?> 
							   	          <option <?php if($persona["C4P82A_HNVH"]==$i && $persona["C4P82A_HNVH"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
							    <?php } ?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p82a_hnvh" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p82_thnv_c4p82a_hnvh" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label>&iquest;Cu&aacute;ntas mujeres?</label>
		  			<label><select class="form-control" id="c4p82b_hnvm" name="c4p82b_hnvm" class="form-control" autofocus>
								<option value="">Seleccione</option>
								<?php for ($i=0; $i<=15; $i++){ ?> 
							   	          <option <?php if($persona["C4P82B_HNVM"]==$i && $persona["C4P82B_HNVM"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
							    <?php } ?>
							</select>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p82b_hnvm" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p82_thnv_c4p82b_hnvm" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div id="div_c4p83_thnv">
			<h4>&iquest;De los hijos(as) que nacieron vivos de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> &iquest;cu&aacute;ntos est&aacute;n vivos actualmente?  </h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P83_HNV"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p83_hnv" name="c4p83_hnv" value="1">&iquest;Cu&aacute;ntos?</label>
					</div>
				</div>
			</div>
			<br/>
			
			<div id="div_c4p83_hnv">
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<!-- <label>&iquest;Cu&aacute;ntos?</label> -->
				  			<label><select class="form-control" id="c4p83a_thsv" name="c4p83a_thsv" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P83A_THSV"]==$i && $persona["C4P83A_THSV"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83a_thsv" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p82_thnv_c4p83a_thsv" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
		
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>&iquest;Cu&aacute;ntos hombres?</label>
				  			<label><select class="form-control" id="c4p83b_hsvh" name="c4p83b_hsvh" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P83B_HSVH"]==$i && $persona["C4P83B_HSVH"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83b_hsvh" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p82a_hnvh_c4p83b_hsvh" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
		
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>&iquest;Cu&aacute;ntas mujeres?</label>
				  			<label><select class="form-control" id="c4p83c_hsvm" name="c4p83c_hsvm" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P83C_HSVM"]==$i && $persona["C4P83C_HSVM"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83c_hsvm" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p82b_hnvm_c4p83c_hsvm" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P83_HNV"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p83_hnv" name="c4p83_hnv" value="2">No sabe</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p83_hnv" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>
		
		<div id="div_c4p83_hnv_0">
			<h4>&iquest;Cu&aacute;ntos de los hijos(as) de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> VIVEN ACTUALMENTE FUERA DE COLOMBIA? </h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P84_HFC"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p84_hfc" name="c4p84_hfc" value="1">&iquest;Cu&aacute;ntos?</label>
					</div>
				</div>
			</div>
			<br/>
			<div id="div_c4p84_hfc">
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<!-- <label>&iquest;Cu&aacute;ntos?</label> -->
				  			<label><select class="form-control" id="c4p84a_thfc" name="c4p84a_thfc" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P84A_THFC"]==$i && $persona["C4P84A_THFC"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p84a_thfc" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83a_thsv_c4p84a_thfc" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
		
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>&iquest;Cu&aacute;ntos hombres?</label>
				  			<label><select class="form-control" id="c4p84b_hfch" name="c4p84b_hfch" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P84B_HFCH"]==$i && $persona["C4P84B_HFCH"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p84b_hfch" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83b_hsvh_c4p84b_hfch" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
		
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>&iquest;Cu&aacute;ntas mujeres?</label>
				  			<label><select class="form-control" id="c4p84c_hfcm" name="c4p84c_hfcm" class="form-control" autofocus>
										<option value="">Seleccione</option>
										<?php for ($i=0; $i<=10; $i++){ ?> 
									   	          <option <?php if($persona["C4P84C_HFCM"]==$i && $persona["C4P84C_HFCM"]!=""){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									    <?php } ?>
									</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p84c_hfcm" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-12">
						<div id="alert_c4p83c_hsvm_c4p84c_hfcm" class="alert alert-warning" role="alert">
				        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
				      	</div>
					</div>
				</div>			
				<br />
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P84_HFC"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p84_hfc" name="c4p84_hfc" value="2">No sabe</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p84_hfc" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
	
			
			<h4>El &uacute;ltimo hijo o hija de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> &iquest;est&aacute; vivo(a) actualmente?</h4>
			<div class="row">
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P85_UHVA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p85_uhva" name="c4p85_uhva" value="1">S&iacute;</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P85_UHVA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p85_uhva" name="c4p85_uhva" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p85_uhva" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>

		<div id="div_uhva">
			<h4>&iquest;Cu&aacute;l es la fecha de nacimiento del &uacute;ltimo hijo(a) nacido(a) vivo(a) de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>? </h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p86a_dia_uhva" name="c4p86a_dia_uhva" class="form-control" autofocus>
									<option value="">D&iacute;a</option>
									<?php for ($i=1; $i<=31; $i++){ ?> 
								   	          <option <?php if($persona["C4P86A_DIA_UHVA"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
								    <?php } ?>
								</select>
							<div class="col-md-12">
								<div id="alert_c4p86a_dia_uhva" class="alert alert-warning" role="alert" style="width: 120px">
						        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
						      	</div>
							</div>
						</label>
						<label><select class="form-control" id="c4p86b_mes_uhva" name="c4p86b_mes_uhva" class="form-control" autofocus>
									<option value="">Mes</option>
									<?php for ($i=1; $i <= 12; $i++){
											$Mes_Desc = ($i==1) ? "ENERO" : (($i==2) ? "FEBRERO" : (($i==3) ? "MARZO" : (($i==4) ? "ABRIL" : (($i==5) ? "MAYO" : (($i==6) ? "JUNIO" : (($i==7) ? "JULIO" : (($i==8) ? "AGOSTO" : (($i==9) ? "SEPTIEMBRE" : (($i==10) ? "OCTUBRE" : (($i==11) ? "NOVIEMBRE" : "DICIEMBRE" )))))))))) ;
											?>
									        <option <?php if($persona["C4P86B_MES_UHVA"]==$i){?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo($Mes_Desc);?> </option>
								        <?PHP  }?>
								</select>
							<div class="col-md-12">
								<div id="alert_c4p86b_mes_uhva" class="alert alert-warning" role="alert" style="width: 120px">
						        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
						      	</div>
							</div>
						</label>
						<label><select class="form-control" id="c4p86c_ano_uhva" name="c4p86c_ano_uhva" class="form-control" autofocus>
									<option value="">A&ntilde;o</option>
									<?php for ($i=2015; $i>=1900; $i--){ ?> 
								   	          <option <?php if($persona["C4P86C_ANO_UHVA"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
								    <?php } ?>
								</select>
							<div class="col-md-12">
								<div id="alert_c4p86c_ano_uhva" class="alert alert-warning" role="alert" style="width: 120px">
						        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
						      	</div>
							</div>
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p86_fnuhv" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente19" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
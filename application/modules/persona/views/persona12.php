<div id="page12" class="row col-md-10">
	<form id="frmPage12" name="frmPage12" method="post" action="">
		<?php 
			$mpio=$this->modpersona->consultarMpio($persona["C4P72A1_DPTO_INST"]);
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="12" />
  			<input type="hidden" name="edadPersona12" id="edadPersona12" value="" />
  			<input type="hidden" name="nroPersona12" id="nroPersona12" value="" />
  		</div>
		<h4>&iquest;Actualmente, <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> asiste a algun jard&iacute;n infantil, escuela, colegio, centro de educaci&oacute;n t&eacute;cnica, tecnol&oacute;gica o universidad, de forma presencial o virtual?</h4>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P72_ASISTENCIA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p72_asistencia" name="c4p72_asistencia" value="1">S&iacute;</label>
				</div>
			</div>
		
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P72_ASISTENCIA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p72_asistencia" name="c4p72_asistencia" value="2">No</label>
				</div>
			</div>
		</div>
		<br />	
		<div class="row">
		<div class="col-md-12" id="div_c4p72a_ubic_inst">
			<h4>La instituci&oacute;n a la que asiste <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?>, est&aacute; ubicada:</h4>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P72A_UBIC_INST"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p72a_ubic_inst" name="c4p72a_ubic_inst" value="1">en <?php echo $nombreMpioRes[0]["DESCRIPCION"];?></label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P72A_UBIC_INST"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p72a_ubic_inst" name="c4p72a_ubic_inst" value="2">en otro municipio colombiano</label>
				</div>
			</div>
			<div id="div_c4p72a_ubic_inst_otro_mpio">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p72a1_dpto_inst" name="c4p72a1_dpto_inst" class="form-control" autofocus>
									<option value="">Seleccione el departamento...</option>
					  				<?php for($i=0;$i<count($dpto);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P72A1_DPTO_INST"]==$dpto[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $dpto[$i]["VALOR_MINIMO"];?>"><?php echo $dpto[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p72a1_dpto_inst" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p72a2_mpio_inst" name="c4p72a2_mpio_inst" class="form-control" autofocus>
									<option value="">Seleccione el municipio</option>
					  				<?php for($i=0;$i<count($mpio);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P72A2_MPIO_INST"]==$mpio[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $mpio[$i]["VALOR_MINIMO"];?>"><?php echo $mpio[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p72a2_mpio_inst" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P72A_UBIC_INST"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p72a_ubic_inst" name="c4p72a_ubic_inst" value="3">en otro pa&iacute;s</label>
				</div>		
			</div>
			<div id="div_c4p72a_ubic_inst_otro_pais">
				<div class="col-md-12">
					<div class="radio">
			  			<label><select class="form-control" id="c4p72a3_pais_inst" name="c4p72a3_pais_inst" class="form-control" autofocus>
									<option value="">Seleccione el pa&iacute;s...</option>
					  				<?php for($i=0;$i<count($pais);$i++)
					  				{
					  				?>
					  					<option <?php if($persona["C4P72A3_PAIS_INST"]==$pais[$i]["VALOR_MINIMO"]){?>selected="selected"<?php }?> value="<?php echo $pais[$i]["VALOR_MINIMO"];?>"><?php echo $pais[$i]["DESCRIPCION"];?></option>
					  				<?php 
					  				}
					  				?>
								</select>
						</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p72a3_pais_inst" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<br />
			</div>
			<div class="col-md-12">
				<div id="alert_c4p72a_ubic_inst" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>
		</div>
		<br/>
		
		
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p72_asistencia" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div id="div_c4p72b_dejo_est">
			<h4>&iquest;Y <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> dej&oacute; de estudiar definitivamente?</h4>
			<div class="row">
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P72B_DEJO_EST"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p72b_dejo_est" name="c4p72b_dejo_est" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P72B_DEJO_EST"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p72b_dejo_est" name="c4p72b_dejo_est" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p72b_dejo_est" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
			
			<h4>&iquest;La principal causa por la que <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> no asiste o por la que dej&oacute; de estudiar definitivamente, es?</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudioa" name="masnoestudioa" value="+"></label>
			  			<label>Causas familiares</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta a -->
			<div class="col-md-12" id="desnoestudioa">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C1_FAMILIA"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="1" /> Considera que ya termin&oacute; sus estudios</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C1_FAMILIA"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="2" /> Considera que no est&aacute; en edad de asistir</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C1_FAMILIA"]=='3'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="3" /> No le gusta o no le interesa estudiar o a la familia no le parece &uacute;til la educaci&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C1_FAMILIA"]=='4'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="4" /> Tuvieron que cambiar su lugar de residencia habital</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C1_FAMILIA"]=='5'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="5" /> Debe ayudar en los oficios del hogar o a personas del hogar</label>
					</div>
				</div>
			</div>
			<!-- cierra div respuestas a-->
			<br/>
	
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudiob" name="masnoestudiob" value="+"></label>
			  			<label>Causas econ&oacute;micas</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta b -->
			<div class="col-md-12" id="desnoestudiob">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C2_ECONOMIA"]=='6'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="6" /> Falta de dinero para cubrir matr&iacute;cula o pensi&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C2_ECONOMIA"]=='7'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="7" /> Porque le suspendieron el pr&eacute;stamo, cr&eacute;dito o beca</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C2_ECONOMIA"]=='8'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="8" /> Por falta de dinero para pagar manutenci&oacute;n (alimentaci&oacute;n y vivienda), uniformes, &uacute;tiles o los materiales de estudio</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C2_ECONOMIA"]=='9'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="9" /> Porque trabaja o los horarios de estudio y de trabajo no son compatibles</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas b-->
			<br/>
			
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudioc" name="masnoestudioc" value="+"></label>
			  			<label>Causas relacionadas con la instituci&oacute;n educativa</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta c -->
			<div class="col-md-12" id="desnoestudioc">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='10'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="10" /> Falta de cupo o en la zona no hay lo que quiere estudiar</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='11'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="11" /> El establecimiento educativo es lejano</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='12'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="12" /> La instituci&oacute;n no cuenta con el servicio de alimentaci&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='13'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="13" /> Por discapacidad o porque necesita educaci&oacute;n especial o apoyos especiales</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='14'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="14" /> Por infraestructura deficiente del establecimiento educativo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='15'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="15" /> Por falta de programas diferenciales para grupos &eacute;tnicos (SEIP y etnoeducaci&oacute;n)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='16'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="16" /> Porque est&aacute; interesado en ingresar al SENA o a formaci&oacute;n para el trabajo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C3_INSTEDUC"]=='17'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="17" /> Porque fue victima de matoneo</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas c-->
			<br/>
			
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudiod" name="masnoestudiod" value="+"></label>
			  			<label>Causas de la trayectoria acad&eacute;mica previa</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta d -->
			<div class="col-md-12" id="desnoestudiod">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C4_EDUCANT"]=='18'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="18" /> Por situaciones acad&eacute;micas (bajos resultados en el periodo acad&eacute;mico, repetici&oacute;n de cursos)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C4_EDUCANT"]=='19'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="19" /> Por situaciones disciplinarias (expulsi&oacute;n, suspensi&oacute;n, sanciones, peleas con la instituci&oacute;n educativa)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C4_EDUCANT"]=='20'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="20" /> Porque no estaba preparado adecuadamente para cursar este grado o semestre</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas d-->
			<br/>
			
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudioe" name="masnoestudioe" value="+"></label>
			  			<label>Causas del entorno de la instituci&oacute;n educativa</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta e -->
			<div class="col-md-12" id="desnoestudioe">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C5_ENTORNOEDUC"]=='21'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="21" /> Porque la zona en la que vive o en la que queda la instituci&oacute;n educativa era insegura y el trayecto a la instituci&oacute;n era peligroso</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C5_ENTORNOEDUC"]=='22'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="22" /> Porque esa zona sufre permanentemente desastres naturales (inundaciones, derrumbres, etc)</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas e-->
			<br/>
			
				<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudiof" name="masnoestudiof" value="+"></label>
			  			<label>Causas personales</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta f -->
			<div class="col-md-12" id ="desnoestudiof">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C6_PERSONAL"]=='23'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="23" /> Se habia inscrito en un programa o instituci&oacute;n que no era lo que quer&iacute;a</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C6_PERSONAL"]=='24'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="24" /> Porque no le gustaba la forma de ense&ntilde;ar</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C6_PERSONAL"]=='25'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="25" /> Por paternidad o maternidad</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C6_PERSONAL"]=='26'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="26" /> Por enfermedad</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C6_PERSONAL"]=='27'){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="27" /> Porque tuvo que irse a otra ciudad para estudiar y no se adapt&oacute; al cambio</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas f-->
			<br/>
			
				<div class="row">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input type="button" id="masnoestudiog" name="masnoestudiog" value="+"></label>
			  			<label>Otra causa</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta g -->
			<div class="col-md-12" id="desnoestudiog">
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["CAP72C7_OTRA"]!=''){?> checked="checked"<?php }?> type="radio" id="cap72_causa" name="cap72_causa" value="28" />&iquest;Cu&aacute;l?</label>
			  			<label><input type="text" id="cap72c7_otra" name="cap72c7_otra" style="width: 350px" value="<?php echo $persona["CAP72C7_OTRA"];?>" /></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap72c7_otra" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>
			<!--cierra div respuestas g-->
			<br/>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_cap72_causa" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
		</div>
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente12" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
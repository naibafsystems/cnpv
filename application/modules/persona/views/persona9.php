<div id="page9" class="row col-md-10">
	<form id="frmPage9" name="frmPage9" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="9" />
  			<input type="hidden" name="edadPersona9" id="edadPersona9" value="" />
  			<input type="hidden" name="nroPersona9" id="nroPersona9" value="" />
  		</div>
		<h4>Dada su condici&oacute;n f&iacute;sica y mental, y sin ning&uacute;n tipo de ayuda<span id="hint_page9xxxx"></span>, &iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> puede:</h4>
		<br/>
		<div class="row">
			<!-- <div class="col-md-12" style="border: 3px solid #2baae2; font-size: 12px; line-height: 20px; font-weight: 600; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">-->
			<div class="col-md-12 ">
			<div class=" qtip-bootstrap qtipDANE qtip-pos-tl">
			<div style="margin: auto; width: 97%;">
					<p>Esta pregunta busca identificar a la poblaci&oacute;n que, independientemente de la edad, tiene dificultades en la realizaci&oacute;n de actividades diarias, por una condici&oacute;n f&iacute;sica o mental. 
					<br><br>Para los menores de edad que por encontrarse en una etapa de desarrollo temprano, a&uacute;n no han adquirido habilidades y destrezas, para de manera aut&oacute;noma, realizar las actividades propias de su vida cotidiana, se debe marcar la opci&oacute;n  "Sin dificultad".  
					<br><br>Igualmente, para las personas que tengan dificultades temporales, por ejemplo, una persona que se lastim&oacute; una pierna bajando la escalera, y dentro de una semana se recuperar&aacute;, se debe marcar la opci&oacute;n "Sin dificultad".
					</p>	
			</div>		
		  	</div>
			</div>
			<!--<div class="col-md-2">
					
		  			<span id="hint_discapacidad"></span>
				
			</div>-->
		</div>	
		<br>
		<br>
		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>&nbsp;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="text">
		  			<label>No puede hacerlo</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="text">
		  			<label>S&iacute;, con mucha dificultad</label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="text">
		  			<label>S&iacute;, con alguna dificultad</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="text">
		  			<label>Sin dificultad</label>
				</div>
			</div>
			
			
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>a. o&iacute;r la voz o los sonidos?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64A_OIR"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64a_oir" name="c4p64a_oir" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64A_OIR"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64a_oir" name="c4p64a_oir" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64A_OIR"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64a_oir" name="c4p64a_oir" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64A_OIR"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64a_oir" name="c4p64a_oir" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64a_oir" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>b. hablar o conversar?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64B_HABLAR"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64b_hablar" name="c4p64b_hablar" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64B_HABLAR"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64b_hablar" name="c4p64b_hablar" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64B_HABLAR"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64b_hablar" name="c4p64b_hablar" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64B_HABLAR"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64b_hablar" name="c4p64b_hablar" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64b_hablar" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>c. ver de cerca, de lejos o alrededor?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64C_VER"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64c_ver" name="c4p64c_ver" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64C_VER"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64c_ver" name="c4p64c_ver" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64C_VER"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64c_ver" name="c4p64c_ver" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64C_VER"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64c_ver" name="c4p64c_ver" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64c_ver" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>d. mover el cuerpo, caminar?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64D_CAMINAR"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64d_caminar" name="c4p64d_caminar" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64D_CAMINAR"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64d_caminar" name="c4p64d_caminar" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64D_CAMINAR"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64d_caminar" name="c4p64d_caminar" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64D_CAMINAR"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64d_caminar" name="c4p64d_caminar" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64d_caminar" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>e. agarrar o mover objetos con las manos?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64E_COGER"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64e_coger" name="c4p64e_coger" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64E_COGER"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64e_coger" name="c4p64e_coger" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64E_COGER"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64e_coger" name="c4p64e_coger" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64E_COGER"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64e_coger" name="c4p64e_coger" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64e_coger" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>f. aprender, recordar, tomar decisiones por s&iacute; mismo?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64F_DECIDIR"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64f_decidir" name="c4p64f_decidir" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64F_DECIDIR"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64f_decidir" name="c4p64f_decidir" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64F_DECIDIR"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64f_decidir" name="c4p64f_decidir" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64F_DECIDIR"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64f_decidir" name="c4p64f_decidir" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64f_decidir" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>g. comer, vestirse, ba&ntilde;arse por si mismo?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64G_COMER"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64g_comer" name="c4p64g_comer" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64G_COMER"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64g_comer" name="c4p64g_comer" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64G_COMER"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64g_comer" name="c4p64g_comer" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64G_COMER"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64g_comer" name="c4p64g_comer" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64g_comer" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>h. relacionarse o interactuar con las dem&aacute;s personas?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64H_RELACION"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64h_relacion" name="c4p64h_relacion" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64H_RELACION"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64h_relacion" name="c4p64h_relacion" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64H_RELACION"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64h_relacion" name="c4p64h_relacion" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64H_RELACION"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64h_relacion" name="c4p64h_relacion" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64h_relacion" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row">
			<div class="col-md-7">
				<div class="radio">
		  			<label>i. hacer las tareas diarias sin mostrar problemas cardiacos, respiratorios?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64I_TAREAS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p64i_tareas" name="c4p64i_tareas" value="1"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64I_TAREAS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p64i_tareas" name="c4p64i_tareas" value="2"></label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64I_TAREAS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p64i_tareas" name="c4p64i_tareas" value="3"></label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P64I_TAREAS"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p64i_tareas" name="c4p64i_tareas" value="4"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p64i_tareas" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente9" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
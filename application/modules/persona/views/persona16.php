<div id="page16" class="row col-md-10">
	<form id="frmPage16" name="frmPage16" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="16" />
  			<input type="hidden" name="edadPersona16" id="edadPersona16" value="" />
  			<input type="hidden" name="nroPersona16" id="nroPersona16" value="" />
  		</div>
		<h4>A qu&eacute; se dedica principalmente la empresa, establecimiento, negocio, o finca, en la que <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> trabaj&oacute; la semana pasada?<br/></h4>
	
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa1"  value="+"></label>
		  			<label>Agricultura, ganader&iacute;a, silvicultura y pesca</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 1 -->
		<div class="col-md-12" id ="desctempresa1">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="1" /> Agricultura, ganader&iacute;a, caza y actividades de servicios conexas</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="2" /> Silvicultura y extracci&oacute;n de madera</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='3'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="3" /> Pesca y acuicultura</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 2-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa2" value="+"></label>
		  			<label>Extracci&oacute;n de productos mineros</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 2 -->
		<div class="col-md-12"  id ="desctempresa2">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='4'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="4" /> Extraci&oacute;n de carb&oacute;n de piedra y lignito</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='5'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="5" /> Extraci&oacute;n de petr&oacute;leo crudo y gas natural</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='6'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="6" /> Extraci&oacute;n de minerales metal&iacute;feros</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='7'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="7" /> Extraci&oacute;n de otras minas y canteras</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='8'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="8" /> Actividades de servicio de apoyo para la explotaci&oacute;n de minas y canteras</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 2-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa3"  value="+"></label>
		  			<label>Elaboraci&oacute;n de alimentos y de bebidas</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 3 -->
		<div class="col-md-12"  id ="desctempresa3">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='9'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="9" /> Elaboraci&oacute;n de productos alimenticios</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='10'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="10" />  Elaboraci&oacute;n de bebidas</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 3-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa4" value="+"></label>
		  			<label>Fabricaci&oacute;n de productos textiles y confecci&oacute;n de prendas de vestir</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 4 -->
		<div class="col-md-12"  id ="desctempresa4">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='11'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="11" /> Fabricaci&oacute;n de productos textiles </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='12'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="12" />  Confecci&oacute;n de prendas de vestir</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 4-->
		<br/>
		
			<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa5"  value="+"></label>
		  			<label>Otras actividades industriales</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 4 -->
		<div class="col-md-12"  id ="desctempresa5">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='13'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="13" /> Elaboraci&oacute;n de productos de tabaco </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='14'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="14" />  Curtido y recurtido de cueros; fabricaci&oacute;n de calzado; fabricaci&oacute;n de art&iacute;culos de viaje; maletas; bolsos de mano y art&iacute;culos similares, y fabricaci&oacute;n de art&iacute;culos de talabarter&iacute;a y guamicioner&iacute;a; adobo y te&ntilde;ido de pieles </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='15'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="15" /> Transformaci&oacute;n de la madera y fabricaci&oacute;n de productos de madera y de corcho, excepto muebles; fabricaci&oacute;n de art&iacute;culos de cester&iacute;a y esparter&iacute;a</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='16'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="16" /> Fabricaci&oacute;n de papel, cart&oacute;n y productos de papel y cart&oacute;n</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='17'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="17" /> Actividades de impresi&oacute;n y de producci&oacute;n de copias a partir de grabaciones originales</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='18'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="18" /> Coquizaci&oacute;n, fabricaci&oacute;n de productos de la refinaci&oacute;n del petr&oacute;leo y actividad de mezca de combustibles</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='19'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="19" /> Fabricaci&oacute;n de sustancias y productos qu&iacute;micos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='20'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="20" /> Fabricaci&oacute;n de productos farmac&eacute;uticos, sustancias qu&iacute;micas medicinales y productos bot&aacute;nicos de uso farmac&eacute;utico</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='21'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="21" /> Fabricaci&oacute;n de productos de caucho y pl&aacute;stico</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='22'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="22" /> Fabricaci&oacute;n de otros productos minerales no met&aacute;licos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='23'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="23" /> Fabricaci&oacute;n de productos metal&uacute;rgicos b&aacute;sicos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='24'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="24" /> Fabricaci&oacute;n de productos elaborados de metal, excepto maquinaria y equipo</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='25'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="25" /> Fabricaci&oacute;n de productos inform&aacute;ticos, electr&oacute;nicos y &oacute;pticos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='26'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="26" /> Fabricaci&oacute;n de aparatos y equipo el&eacute;ctrico</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='27'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="27" /> Fabricaci&oacute;n de maquinaria y equipo n.c.p.</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='28'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="28" /> Fabricaci&oacute;n de veh&iacute;culos automotores, remolques y semirremolques</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='29'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="29" /> Fabricaci&oacute;n de otros tipos de equipo de transporte</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='30'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="30" /> Fabricaci&oacute;n de muebles, colchones y somieres</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='31'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="31" /> Otras industrias manufactureras</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='32'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="32" /> Instalaci&oacute;n, mantenimiento y reparaci&oacute;n especializado de maquinaria y equipo</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 5-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa6"  value="+"></label>
		  			<label>Construcci&oacute;n y servicios relacionados</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 6 -->
		<div class="col-md-12"  id ="desctempresa6">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='33'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="33" /> Construcci&oacute;n de edificios</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='34'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="34" />  Obras de ingenier&iacute;a civil</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='35'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="35" />  Actividades especializadas para la construcci&oacute;n de edificios y obras de ingenier&iacute;a civil</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 6-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa7"  value="+"></label>
		  			<label>Comercio (compra y venta) de productos no fabricados por el establecimiento</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 7 -->
		<div class="col-md-12"  id ="desctempresa7">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='36'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="36" /> Comercio al por mayor y en comisi&oacute;n o por contrata, excepto el comercio de veh&iacute;culos automotores y motocicletas</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='37'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="37" />  Comercio al por menor (incluso el comercio al por menor de combustibles), excepto el de veh&iacute;culos automotores y motocicletas</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 7-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa8"  value="+"></label>
		  			<label>Mantenimiento y reparaci&oacute;n de veh&iacute;culos y motocicletas</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 8 -->
		<div class="col-md-12"  id ="desctempresa8">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='38'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="38" /> Comercio mantenimiento y reparaci&oacute;n de veh&iacute;culos automotores y motocicletas, sus partes, piezas y accesorios</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 8-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa9"  value="+"></label>
		  			<label>Transporte y actividades complementarias, y correos</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 9 -->
		<div class="col-md-12"  id ="desctempresa9">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='39'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="39" /> Transporte terrestre; transporte por tuber&iacute;as</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='40'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="40" /> Transporte acu&aacute;tico</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='41'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="41" /> Transporte a&eacute;reo</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='42'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="42" /> Almacenamiento y actividades complementarias al transporte</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='43'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="43" /> Correo y servicios de mensajer&iacute;a</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 9-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa10" value="+"></label>
		  			<label>Alojamiento, restaurantes, cafeterias y bares</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 10 -->
		<div class="col-md-12"  id ="desctempresa10">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='44'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="44" /> Alojamiento</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='45'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="45" /> Actividades de servicios de comidas y bebidas</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 10-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa11" value="+"></label>
		  			<label>Actividades profesionales, cient&iacute;ficas y t&eacute;cnicas</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 11 -->
		<div class="col-md-12"  id ="desctempresa11">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='46'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="46" /> Actividades jur&iacute;dicas y de contabilidad</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='47'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="47" /> Actividades de administraci&oacute;n empresarial; actividades de consultor&iacute;a de gesti&oacute;n</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='48'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="48" /> Actividades de arquitectura e ingenier&iacute;a; ensayos y an&aacute;lisis t&eacute;cnicos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='49'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="49" /> Investigaci&oacute;n cient&iacute;fica y desarrollo</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='50'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="50" /> Publicidad y estudios de mercadeo</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='51'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="51" /> Otras actividades profesionales, cient&iacute;ficas y t&eacute;cnicas</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='52'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="52" /> Actividades veterinarias</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 11-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa12"  value="+"></label>
		  			<label>Actividades de atenci&oacute;n a la salud humana y asistencia social</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 12 -->
		<div class="col-md-12"  id ="desctempresa12">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='53'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="53" /> Actividades de atenci&oacute;n a la salud humana</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='54'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="54" /> Actividades de atenci&oacute;n recidencial medicalizada</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='55'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="55" /> Actividades de asistencia social sin alojamiento</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 12-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa13"  value="+"></label>
		  			<label>Educaci&oacute;n</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 13 -->
		<div class="col-md-12"  id ="desctempresa13">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='56'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="56" /> Educaci&oacute;n</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 13-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa14" value="+"></label>
		  			<label>Telecomunicaciones</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 14 -->
		<div class="col-md-12"  id ="desctempresa14">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='57'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="57" /> Telecomunicaciones</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 14-->
		<br/>
		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input type="button" id="masactempresa15" name="masactempresa15" value="+"></label>
		  			<label>Otros servicios</label>
				</div>
			</div>
		</div>
		<!-- div de la respuesta 15 -->
		<div class="col-md-12"  id ="desctempresa15">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='58'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="58" /> Suministro de electricidad, gas, vapor y aire acondicionado </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='59'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="59" /> Capacitaci&oacute;n, tratamiento y distribuci&oacute;n de agua</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='60'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="60" /> Evaluaci&oacute;n y tratamiento de aguas residuales</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='61'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="61" /> Recolecci&oacute;n, tratamiento y disposici&oacute;n de desechos, recuperaci&oacute;n de materiales</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='62'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="62" /> Actividades de saneamiento ambiental y otros servicios de gesti&oacute;n de desechos</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='63'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="63" /> Actividades de edici&oacute;n </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='64'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="64" /> Actividades cinematogr&aacute;ficas, de video y producci&oacute;n de programas de televisi&oacute;n, grabaci&oacute;n de sonido y edici&oacute;n de m&uacute;sica </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='65'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="65" /> Actividades de programaci&oacute;n, tranmisi&oacute;n y/o difusi&oacute;n  </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='66'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="66" /> Desarrollo de sistemas inform&aacute;ticos (planificaci&oacute;n, an&aacute;lisis, dise&ntilde;o, programaci&oacute;n, pruebas), consultor&iacute;a inform&aacute;tica y actividades relacionadas </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='67'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="67" /> Actividades de servicios de informaci&oacute;n </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='68'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="68" /> Actividades de servicios financieros, excepto las de seguros y de pensiones</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='69'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="69" /> Seguros (incluso el reaseguro), seguros sociales y fondos de pensiones, excepto la seguridad social </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='70'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="70" /> Actividades auxiliares de las actividades de servicios financieros </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='71'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="71" /> Actividades inmobiliarias </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='72'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="72" /> Actividades de alquiler y arrendamiento </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='73'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="73" /> Actividades de empleo </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='74'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="74" /> Actividades de las agencias de viajes, operadores tur&iacute;sticos, servicios de reserva y actividades relacionadas </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='75'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="75" /> Actividades de seguridad e investigaci&oacute;n privada</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='76'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="76" /> Actividades de servicios en edificios y paisajismo (jardines, zonas verdes)</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='77'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="77" /> Actividades administrativas y de apoyo de oficina y otras actividades de apoyo a las empresas</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='78'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="78" /> Administraci&oacute;n p&uacute;blica y defensa; planes de seguridad social de afiliaci&oacute;n obligatoria</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='79'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="79" /> Actividades creativas, art&iacute;sticas y de entretenimiento</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='80'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="80" /> Actividades de bibliotecas, archivos, museos y otras actividades culturales </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='81'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="81" /> Actividades de juegos de azar y apuestas </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='82'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="82" /> Actividades deportivas y actividades recreativas y de esparcimiento</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='83'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="83" /> Actividades de asociaciones </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='84'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="84" /> Mantenimiento y reparaci&oacute;n de computadores, efectos personales y enseres dom&eacute;sticos </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='85'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="85" /> Otras actividades de servicios personales </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='86'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="86" /> Actividades de los hogares individuales como empleados de personal dom&eacute;stico </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='87'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="87" /> Actividades no diferencidas de los hogares individuales como productores de bienes y servicios para uso propio </label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP77A_AE_REALIZA"]=='88'){?> checked="checked"<?php }?> type="radio" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="88" /> Actividades de organizaciones y entidades extraterritoriales</label>
				</div>
			</div>
		</div>
		<!-- cierra div respuestas 15-->
		<div class="row">
			<div class="col-md-12">
				<div id="alert_cap77a_ae_realiza" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		<!-- <div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label>&iquest;Actividad realizada?</label>
		  			<label><input type="text" id="cap77a_ae_realiza" name="cap77a_ae_realiza" value="" readonly="readonly" /></label>
				</div>
			</div>
		</div>	
		<br/> -->
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente16" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>
<div id="page7" class="row col-md-12">
	<form id="frmPantalla7" name="frmPantalla7" method="post" action="">
		<h4>&iquest;Durante los &uacute;ltimos 30 d&iacute;as, alg&uacute;n miembro de su hogar realiz&oacute; alguna ACTIVIDAD ECON&Oacute;MICA DENTRO DE LA VIVIENDA DONDE USTED RESIDE para obtener ingresos? No incluya las actividades dom&eacute;sticas propias del hogar (servicio dom&eacute;stico, jard&iacute;neria, cuidado de ni&ntilde;os y adultos mayores, entre otros)</h4>
		<div class="row">
			<div class="col-md-8">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="radio">
					<label><span id="hint16"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H36_AE_HOG" name="C3H36_AE_HOG" value="1" <?php echo ($hogar["C3H36_AE_HOG"]==1)?"checked=\"checked\"":""; ?>>Si</label>
				</div>
			</div>				
			<div class="col-md-1">
				<div class="radio">
					<label><input type="radio" id="C3H36_AE_HOG" name="C3H36_AE_HOG" value="2" <?php echo ($hogar["C3H36_AE_HOG"]==2)?"checked=\"checked\"":""; ?>>No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div id="alerta21" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		
		<div id="actividades">
			<div class="row">
			<h4>&iquest;Cu&aacute;l?</h4>
			</div>
					
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactviva" name="masactviva" value="+"></label>
						<label>Cr&iacute;a de animales y/o cultivos agr&iacute;colas </label>
						<label id="inicial"><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="0-0" checked="checked" />val inicial</label>
					</div>
				</div>
			</div>
			
			<!-- div de la respuesta a -->
			<div class="row"  id ="desactviva">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="1-1" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="1-1")?"checked=\"checked\"":""; ?>/>  Cultivos agr&iacute;colas transitorios, permanente, mixto(agr&iacute;cola y pecuario).</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="1-2" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="1-2")?"checked=\"checked\"":""; ?>/>  Propagaci&oacute;n de plantas(actividades de los viveros, excepeto viveros forestales)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA"  value="1-3" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="1-3")?"checked=\"checked\"":""; ?>/>  Ganader&iacute;a</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="1-4" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="1-4")?"checked=\"checked\"":""; ?>/>  Acuicultura</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas a-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivb" name="masactvivb" value="+"></label>
						<label>Elaboraci&oacute;n de alimentos y bebidas </label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta b -->
			<div class="row"  id ="desactvivb">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="2-5" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="2-5")?"checked=\"checked\"":""; ?>/>  Elaboraci&oacute;n de productos alimenticios.</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA"  value="2-6" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="2-6")?"checked=\"checked\"":""; ?>/>  Elaboraci&oacute;n de bebidas</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas b-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivc" name="masactvivc" value="+"></label>
						<label>Fabricaci&oacute;n de art&iacute;culos textiles y prendas de vestir </label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta c -->
			<div class="row"  id ="desactvivc">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="3-7" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="3-7")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos textiles</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="3-8" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="3-8")?"checked=\"checked\"":""; ?>/>  Confecci&oacute;n de prendas de vestir</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas c-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivd" name="masactvivd" value="+"></label>
						<label>Otras actividades industriales </label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta d -->
			<div class="row"  id ="desactvivd">
				<div class="col-md-10">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-9" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-9")?"checked=\"checked\"":""; ?>/>  Curtido y recurtido de cueros: fabricaci&oacute;n de calzado; fabricaci&oacute;n de art&iacute;culos de viaje, maletas, <br/>bolsos de mano y art&iacute;culos de talabarter&iacute;a y guamicioneria: adobo y  te&ntilde;ido de pieles.</label>
					</div>
				</div>
				<div class="col-md-10">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-10" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-10")?"checked=\"checked\"":""; ?>/>  Transformaci&oacute;n de la madera y fabricaci&oacute;n de productos de madera y de corcho, excepto muebles, <br/>fabricaci&oacute;n de art&iacute;los de cester&iacute;a y esparter&iacute;a</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-11" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-11")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de papel y cart&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-12" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-12")?"checked=\"checked\"":""; ?>/>  Actividades de impresi&oacute;n y de producci&oacute;n de copias a partir de grabaciones originales </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-13" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-13")?"checked=\"checked\"":""; ?> />  Fabricaci&oacute;n de sustancias y productos qu&iacute;micos </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-14" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-14")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos farmac&eacute;uticos, sustancias qu&iacute;micas medicinales y productos bot&aacute;tanicos de uso  farmac&eacute;utico</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-15" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-15")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos de caucho y de pl&aacute;stico</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-16" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-16")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de otros productos minerales no met&aacute;licos</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-17" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-17")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos metal&uacute;rgicos b&aacute;sicos</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-18" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-18")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos elaborados de metal, excepto maquinaria y equipo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-19" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-19")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de productos inform&aacute;ticos, electr&oacute;nicos y &oacute;pticos</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-20" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-20")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de aparatos y equipo el&eacute;ctrico</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-21" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-21")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de maquinaria y equipo n.c.p. </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-22" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-22")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de  veh&iacute;culos automotores, remolques y semirremolques</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-23" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-23")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de otros tipos de equipo de transporte </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-24" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-24")?"checked=\"checked\"":""; ?>/>  Fabricaci&oacute;n de muebles, colchones y somieres</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="4-25" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="4-25")?"checked=\"checked\"":""; ?>/>  Otras industrias manufactureras </label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas d-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvive" name="masactvive" value="+"></label>
						<label>Comercio(compra y venta) de productos no fabricados en el hogar </label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta e -->
			<div class="row"  id ="desactvive">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="5-26" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="5-26")?"checked=\"checked\"":""; ?> />  Comercio al por mayor y en comisi&oacute;n o por contrata, excepto el comercio de veh&iacute;culos automotores y motocicletas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="5-27" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="5-27")?"checked=\"checked\"":""; ?>  />  Comercio al por menor (incluso el comercio al por menor de combustibles), excepto el de veh&iacute;culos automotores y motocicletas</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas e-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivf" name="masactvivf" value="+"></label>
						<label>Alojamiento(no incluye arrendamiento)</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta f -->
			<div class="row"  id ="desactvivf">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="6-28" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="6-28")?"checked=\"checked\"":""; ?> />  Alojamiento</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas f-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivg" name="masactvivg" value="+"></label>
						<label>Restaurantes, bares y similares(servicio a la mesa)</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta g -->
			<div class="row"  id ="desactvivg">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="7-29" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="7-29")?"checked=\"checked\"":""; ?>/>  Actividades de servicios de comidas y bebidas</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas g-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivh" name="masactvivh" value="+"></label>
						<label>Servicios de inform&aacute;tica, telecomunicaciones, alquiler, ense&ntilde;anza, sociales y de salud, inmobiliarios y financieros</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta h -->
			<div class="row"  id ="desactvivh">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-30" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-30")?"checked=\"checked\"":""; ?>/>  Telecomunicaciones</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-31" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-31")?"checked=\"checked\"":""; ?>/>  Desarrollo de sistemas inform&aacute;ticos (planificaci&oacute;n, an&aacute;lisis, dise&ntilde;o, programaci&oacute;n, pruebas), consultor&iacute;a inform&aacute;tica <br/>y  actividades relacionadas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-32" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-32")?"checked=\"checked\"":""; ?>/>  Actividades de servicios de informaci&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-33" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-33")?"checked=\"checked\"":""; ?>/>  Actividades de servicios financieros, excepto las de seguros y de pensiones</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-34" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-34")?"checked=\"checked\"":""; ?>/>  Actividades auxiliares de las actividades de servicios financieros y de seguros</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-35" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-35")?"checked=\"checked\"":""; ?>/>  Actividades innombiliarias</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-36" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-36")?"checked=\"checked\"":""; ?>/>  Actividades de alquiler y arrendamiento</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-37" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-37")?"checked=\"checked\"":""; ?>/>  Educaci&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-38" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-38")?"checked=\"checked\"":""; ?>/>  Actividades de atenci&oacute;n de la salud humana</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA"value="8-39" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-39")?"checked=\"checked\"":""; ?>/>  Actividades de atenci&oacute;n residencial medicalizada</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="8-40" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="8-40")?"checked=\"checked\"":""; ?>/>  Actividades de asistencia social sin alojamiento</label>
					</div>
				</div>
				
			</div>
			<!--cierra div respuestas h-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivi" name="masactvivi" value="+"></label>
						<label>Actividades profesionales y t&eacute;cnicas, peluquerias, servicios religiosos, art&iacute;sticos, juegos de azar y dem&aacute;s servicios</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta i -->
			<div class="row"  id ="desactvivi">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-41" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-41")?"checked=\"checked\"":""; ?> />  Actividades de edici&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-42" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-42")?"checked=\"checked\"":""; ?> />  Actividades cinematogr&aacute;ficas, de video y producci&oacute;n de programas de televis&oacute;n, grabaci&oacute;n de sonido y edici&oacute;n de m&uacute;sica</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-43" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-43")?"checked=\"checked\"":""; ?> />  Actividades jur&iacute;dicas y de contabilidad</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-44" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-44")?"checked=\"checked\"":""; ?> />  Actividades de administraci&oacute;n empresarial, actividades de consultor&iacute;a de gesti&oacute;n</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-45" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-45")?"checked=\"checked\"":""; ?> />  Actividades de arquitectura e ingenier&iacute;a: ensayos y an&aacute;lisis t&eacute;cnicos</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-46" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-46")?"checked=\"checked\"":""; ?> />  Investigaci&oacute;n cient&iacute;fica y desarrollo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-47" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-47")?"checked=\"checked\"":""; ?> />  Publicidad y estudios de mercado</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-48" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-48")?"checked=\"checked\"":""; ?> />  Otras actividades profesionales, cient&iacute;fica y t&eacute;cnicas </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-49" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-49")?"checked=\"checked\"":""; ?> />  Actividades veterinarias</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-50" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-50")?"checked=\"checked\"":""; ?> />  Actividades de empleo</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-51" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-51")?"checked=\"checked\"":""; ?> />  Actividades de las agencias de viajes, operadores tur&iacute:sticos, servicios de  reserva y actividades relacionadas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-52" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-52")?"checked=\"checked\"":""; ?> />  Actividades de seguridad e investigaci&oacute;n privada</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-53" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-53")?"checked=\"checked\"":""; ?> />  Actividades administrativas y de apoyo de oficina y otras actividades de apoyo a las empresas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-54" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-54")?"checked=\"checked\"":""; ?> />  Actividades creativas, art&iacute;sticas y de entretenimiento</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-55" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-55")?"checked=\"checked\"":""; ?> />  Actividades de juegos de azar y apuestas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-56" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-56")?"checked=\"checked\"":""; ?> />  Actividades deportivas y actividades recreativas y de esparcimiento </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-57" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-57")?"checked=\"checked\"":""; ?> />  Actividades de asociaciones </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-58" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-58")?"checked=\"checked\"":""; ?> />  Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-59" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-59")?"checked=\"checked\"":""; ?> />  Peluquer&iacute;a y otros tratamientos de belleza </label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="9-60" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="9-60")?"checked=\"checked\"":""; ?> />  Otras actividades de servicios personales n.c.p. </label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas i-->
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivj" name="masactvivj" value="+"></label>
						<label>Mantenimiento y reparaci&oacute;n</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta j -->
			<div class="row"  id ="desactvivj">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="10-61" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="10-61")?"checked=\"checked\"":""; ?> />  Comercio, mantenimiento y reparaci&oacute;n de veh&iacute;culos automotores y motocicletas, sus partes, piezas y accesorios.</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="10-62" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="10-62")?"checked=\"checked\"":""; ?> />  Mantenimiento y reparaci&oacute;n de computadores, efectos personales y enseres dom&eacute;sticos</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="10-63" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="10-63")?"checked=\"checked\"":""; ?> />  Reparaci&oacute; de calzado y art&iacute;culos de cuero</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="10-64" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="10-64")?"checked=\"checked\"":""; ?> />  Instalaci&oacute;n, mantenimiento y reparaci&oacute;n especializado de maquinaria y equipo</label>
					</div>
				</div>
			</div>
			<!--cierra div respuestas j-->
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="radio">
						<label><input type="button" id="masactvivk" name="masactvivk" value="+"></label>
						<label>Productos y pr&aacute;cticas que conservan las tradiciones culturales de los grupos &eacute;tnicos.</label>
					</div>
				</div>
			</div>
			<!-- div de la respuesta g -->
			<div class="row"  id ="desactvivk">
				<div class="col-md-12">
					<div class="radio">
						<label>&nbsp;&nbsp;&nbsp;</label><label><input type="radio" id="C3H36B_AE_REALIZA" name="C3H36B_AE_REALIZA" value="11-1" <?php echo (($hogar["C3H36A_AE_GRUPO"]."-".$hogar["C3H36B_AE_REALIZA"])=="11-1")?"checked=\"checked\"":""; ?> />  Productos y pr&aacute;cticas que conservan las tradiciones culturales de los grupos &eacute;tnicos.</label>
					</div>
				</div>
			</div>
			
			
			<br/>
			
			<div class="row">
				<div class="col-md-8">
					<div id="alerta22" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		
		
			<h4>&iquest;Cu&aacute;ntas personas trabajaron en los &uacute;ltimos 30 d&iacute;as en esa actividad?</h4>
			<div class="row">
				<div class="col-md-10">
					<div class="radio">
						<label><input type="text" id="C3H36C_AE_QPER" name="C3H36C_AE_QPER" value="<?php echo $hogar["C3H36C_AE_QPER"]; ?>" /><span id="hint17"></span></label>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<div id="alerta23" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		</div>
		<div id ="espacios"></div>
		<div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente8" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="grupo" name="grupo" value=""  />
				<input type="hidden" id="actividad" name="actividad" value=""  />
			</div>	
		</div>		
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="7"  />
			</div>	
		</div>		
    </form>
</div>	


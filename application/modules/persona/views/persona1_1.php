<div id="page1" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Digite la fecha de nacimiento de XXXXXX</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">D&iacute;a...</option>
							<?php for ($i=1; $i<=31; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
				<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Mes...</option>
							<?php for ($i=1; $i <= 12; $i++){
							        if ($i==1)$Mes_Desc = "ENERO";
							        if ($i==2)$Mes_Desc = "FEBRERO";
							        if ($i==3)$Mes_Desc = "MARZO";
							        if ($i==4)$Mes_Desc = "ABRIL";
							        if ($i==5)$Mes_Desc = "MAYO";
							        if ($i==6)$Mes_Desc = "JUNIO";
							        if ($i==7)$Mes_Desc = "JULIO";
							        if ($i==8)$Mes_Desc = "AGOSTO";
							        if ($i==9)$Mes_Desc  = "SEPTIEMBRE";
							        if ($i==10)$Mes_Desc = "OCTUBRE";
							        if ($i==11)$Mes_Desc = "NOVIEMBRE";
							        if ($i==12)$Mes_Desc = "DICIEMBRE";
									?>
							        <option  value="<?PHP  echo($i);?>"><?PHP  echo($Mes_Desc);?> </option>
						        <?PHP  }?>
						</select>
				</label>
				<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">A&ntilde;o...</option>
							<?php for ($i=1895; $i<=2015; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<label><input type="radio" id="radioOpcion" name="radioOpcion">No sabe.</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>A&ntilde;os Cumplidos</h4>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
				<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value="" /></label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;Cu&aacute;l o cu&aacute;les nacionalidades tiene XXXXXX?</h4>
	<div class="row">
		<div class="col-md-6">
			<div class="radio">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="radio">
	  			<label><span id="hint1"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" name="Colombia" id="Colombia" value="1" /> Colombiana</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" name="M-OBRANUEVA" id="M-OBRANUEVA" value="2" /> Otra nacionalidad &nbsp;&nbsp; </label>
	  			<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
	</div>

	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente1" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>	

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page2" class="row col-md-10">
	<h3>YYYYYY</h3><br/>
	<h4>Se&ntilde;ale la relaci&oacute;n o parentesco de YYYYYY con XXXXXX</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Cabeza  (jefe(a)) del hogar</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Pareja (c&oacute;nyuge, compa&ntilde;ero(a), esposo(a)</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Hijo(a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Hijastro(a)</label>
			</div>	
		</div>
	</div>		
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Yerno/ nuera</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Padre/ madre, padrastro, madrastra</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Suegro (a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Hermano(a), hermanastro(a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Cu&ntilde;ado(a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Nieto(a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Otro pariente</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Empleado del servicio dom&eacute;stico y sus parientes</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Trabajador (a)</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Otro no pariente</label>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente2" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>	

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page3" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Indique d&oacute;nde naci&oacute; XXXXXX</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">En el municipio donde reside </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">A&ntilde;o en que lleg&oacute; a Colombia</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
	</div>
	<br/>
	<h4>Cuando XXXXXX naci&oacute;, la mam&aacute; resid&iacute;a en:</h4>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
			</div>	
		</div>
		<div class="col-md-3">
			<div class="radio">
	  			<label><span id="hint13"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion"> (se trae autom&aacute;ticamente la respuesta de la pregunta 50) </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">No sabe</label>
			</div>		
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente3" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>	

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page4" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Indique el lugar donde resid&iacute;a XXXXXX en febrero de 2011 </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No hab&iacute;a nacido </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">En el municipio donde reside (traer el municipio de la preinscripci&oacute;n)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">A&ntilde;o en que lleg&oacute; a Colombia</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
	</div>
	<br/>
	
	<h4>Seleccione el lugar donde resid&iacute;a XXXXXX en febrero de 2011 </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Centro poblado (Corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Rural disperso (Vereda, campo, resguardo, territorio colectivo)</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente4" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page5" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Indique el lugar donde resid&iacute;a XXXXXX en febrero de 2015 </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">En el municipio donde reside (traer el municipio de la preinscripci&oacute;n)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
	</div>
	<br/>
	
	<h4>Seleccione el lugar donde resid&iacute;a XXXXXX en febrero de 2015</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Centro poblado (Corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Rural disperso (Vereda, campo, resguardo, territorio colectivo)</label>
			</div>
		</div>
	</div>
	
	<h4>Indique el principal motivo por el que XXXXXX cambi&oacute; de municipio o de pa&iacute;s donde resid&iacute;a en febrero de 2015</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Trabajo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Estudio </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Salud</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Amenaza o riesgo para su vida o integridad f&iacute;sica, ocasionada por conflicto armado</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Amenaza o riesgo para su vida o integridad f&iacute;sica, por violencia NO asociada al conflicto armado </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Desastres naturales</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Conformaci&oacute;n de un nuevo hogar</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Acompa&ntilde;ar a otro(s) miembro(s) del hogar</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">Motivos culturales (pueblo n&oacute;mada)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>Otro &iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>	
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente5" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page6" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>De acuerdo con su cultura, pueblo o rasgos f&iacute;icos XXXXXX es o se reconoce como: </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">ind&iacute;gena</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">gitano o Rrom </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">raizal del Archipi&eacute;lago de San Andr&eacute;s, Providencia y Santa Catalina</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">palenquero de San Basilio</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">negro(a)</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">mulato(a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">afrodescendiente, afrocolombiano(a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">blanco(a) o mestizo(a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">otro diferente de los anteriores </label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;Habla XXXXXX:</h4>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>a. la lengua nativa de su pueblo?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>b. otra(s) lengua(s) nativa(s)?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
		<div class="col-md-5">
			<div class="radio">
	  			<label>Cuantas </label>
	  			<label><input type="text" id="cuantas" name="cuantas" value=""  /></label>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>c. espa&ntilde;ol?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
				</div>
			</div>
		</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente6" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page7" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>XXXXXX  se considera: </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1. creyente practicante.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2. creyente no practicante.</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">3. ateo.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4. agn&oacute;stico. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="hint2"></span></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5. no sabe.</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">6. no responde.</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente7" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page8" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	
	<h4>Actualmente, &iquest;XXXXXX se encuentra afiliado(a) a salud?</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1. S&iacute;.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2.  No</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>Indique el r&eacute;gimen:</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1. Contributivo. <span id="hint3"></span></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2.  Subsidiado <span id="hint4"></span></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Especial (fuerzas armadas, docentes p&uacute;blicos,  Ecopetrol, universidades p&uacute;blicas)</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>&iquest;En los &uacute;ltimos 30 d&iacute;as, tuvo XXXXXX alguna enfermedad, accidente, problema odontol&oacute;gico o alg&uacute;n otro problema de salud?</h4>
	<div class="row">

		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>&iquest;Para tratar ese problema de salud XXXXXX acudi&oacute; por atenci&oacute;n a:</h4>
	<div class="row">
		<div class="col-md-6">
			<div class="radio">
	  			<label>  a.  servicio de salud? (hospital, cl&iacute;nica, centro de salud o consultorio m&eacute;dico, servicio m&eacute;dico domiciliario)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="radio">
	  			<label>  b. m&eacute;dico tradicional de un grupo &eacute;tnico?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>&iquest;A XXXXXX lo(a) atendieron?</h4>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente8" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page9" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Dada su condici&oacute;n f&iacute;sica y mental, y sin ning&uacute;n tipo de ayuda, &iquest;XXXXXX puede:</h4>
	<br/>
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
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>b. hablar o conversar?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>c. ver de cerca, de lejos o alrededor?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>d. mover el cuerpo, caminar?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>e. agarrar, o mover objetos con las manos?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>f. aprender, recordar, tomar decisiones por s&iacute; mismo?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>g. comer, vestirse, ba&ntilde;arse por si mismo?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>h. relacionarse o interactuar con las dem&aacute;s personas?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="radio">
	  			<label>i. hacer las tareas diarias sin mostrar problemas cardiacos, respiratorios?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente9" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page10" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	
	<h4>De las anteriores dificultades, &iquest;cu&aacute;l es la m&aacute;s afecta al desempe&ntilde;o diario de XXXXX?</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione una opci&oacute;n...</option>
						</select>
				</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>La dificulta de XXXXXX de la dificultad bbbbb fue ocacionada:</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1. porque naci&oacute; as&iacute;?</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2. por enfermedad?</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3. por accidente?</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4. por edad avanzada, envejecimiento? </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5. por el conflicto armado?</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6. por violencia NO asociada al conflicto armado?</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">7. por otra causa?</label>
	  			<label>Otro &iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
	</div>
	<br/>
	<h4>&iquest;Para la dificultad de XXXXXX de bbbbb utiliza ayudas PERMANENTES:</h4>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>a. t&eacute;cnicas o tecnol&oacute;gicas? (gafas, lentes, lupas, implantes cocleares, bastones, silla de ruedas, entre otras).</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>b. de otras personas? (enfermeras(os), int&eacute;rpretes, familiares)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>c. medicamentos o terapias?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>d. pr&aacute;cticas de medicina ancestral?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>e. perro gu&iacute;a?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div class="radio">
	  			<label>f. otro tipo de ayudas?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente10" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page11" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>&iquest;D&oacute;nde o con qui&eacute;n permanece XXXXXX durante la mayor parte del tiempo entre semana?</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1) Asiste a alg&uacute;n establecimiento de atenci&oacute;n infantil u hogar comunitario.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2) Con su padre o madre en la casa.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3) Con su padre o madre en el trabajo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4) Al cuidado de un pariente o persona de 18 a&ntilde;os o m&aacute;s, en la casa. (donde reside el ni&ntilde;o (a))</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5) Al cuidado de un pariente o persona menor de 18 a&ntilde;os, en la casa. (donde reside el ni&ntilde;o (a))</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6) Al cuidado de un pariente o de otra persona en otro lugar.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">7) En la casa solo.</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;A qu&eacute; tipo de establecimiento asiste XXXXXX?</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1) Hogar comunitario u hogar infantil de Bienestar familiar (p&uacute;blico)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2) Centro de desarrollo infantil o jardines infantiles (p&uacute;blico)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3) Escuela o colegio p&uacute;blico en los grados prejard&iacute;n o jard&iacute;n (prekinder o kinder)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4) Colegio privado en los grados prejard&iacute;n o jard6iacute;n (prekinder o kinder)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5) Jard&iacute;n infantil privado. (guarder&iacute;a)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6) Modalidad de atenci&oacute;n para grupos &eacute;tnicos</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>La persona con quien permanece XXXXXX &iquest;asiste o ha asistido al programa de Modalidad familiar<label><span id="hint5"></span></label> para la atenci&oacute;n integral?</h4>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;XXXXXX sabe leer y escribir?</h4>
	<div class="row">
		<div class="col-md-3">
			<div class="radio">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="radio">
	  			<label><span id="hint6"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente11" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>


<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page12" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>ACTUALMENTE XXXXXX asiste a algun jard&iacute;n infantil, escuela, colegio, centro de educaci&oacute;n t&eacute;cnica o tecnol&oacute;gica o universidad, de forma presencial o virtual? </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1. S&iacute;</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2. No</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;La instituci&oacute;n a la que asiste XXXXXX est&aacute; ubicada:?</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">trae el municipio de la inscripci&oacute;n</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>
	</div>
	<br/>
	
	<h4>&iquest;Y XXXXXX dej&oacute; de estudiar definitivamente?</h4>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>La PRINCIPAL CAUSA por la que XXXXXX no asiste o por la que dej&oacute; de estudiar definitivamente, es:</h4>

	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudioa" name="masnoestudioa" value="+"></label>
	  			<label>Causas familiares?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta a -->
	<div class="row"  id ="desnoestudioa">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Considera que ya termin&oacute; sus estudios</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Considera que no est&aacute; en edad de asistir</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> No le gusta o no le interesa estudiar</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Tuvieron que cambiar su lugar de residencia habital</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Debe ayudar en los oficios del hogar o a personas del hogar</label>
			</div>
		</div>
	</div>
	<!-- cierra div respuestas a-->
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudiob" name="masnoestudiob" value="+"></label>
	  			<label>Causas econ&oacute;micas?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta b -->
	<div class="row"  id ="desnoestudiob">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Falta de dinero para cubrir matr&iacute;cula o pensi&oacute;n</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque le suspendieron el pr&eacute;stamo, cr&eacute;dito o beca</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por falta de dinero para pagar manutenci&oacdute;n (alimentaci&oacute;n y vivienda), uniformes, &uactue;tiles o los materiales de estudio</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque trabaja o los horarios de estudio y de trabajo no son compatibles</label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas b-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudioc" name="masnoestudioc" value="+"></label>
	  			<label>Causas relacionadas con la instituci&oacute;n educativa?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta c -->
	<div class="row"  id ="desnoestudioc">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Falta de cupo o en la zona no hay lo que quiere estudiar</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> El establecimiento educativo es lejano</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> La instituci&oacute;n no cuenta con el servicio de alimentaci&oacute;n</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por discapacidad o porque necesita educaci&oacute;n especial o apoyos especiales</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por infraestructura deficiente del establecimiento educativo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por falta de programas diferenciales para grupos &eacute;tnicos (SEIP y etnoeducaci&oacute;n)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque est&aacute; interesado en ingresar al SENA o a formaci&oacute;n para el trabajo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque fue victima de matoneo</label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas c-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudiod" name="masnoestudiod" value="+"></label>
	  			<label>Causas de la trayectoria acad&eacute;mica previa?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta d -->
	<div class="row"  id ="desnoestudiod">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por situaciones acad&eacute;micas (bajos resultados en el periodo acad&eacute;mico, repetici&oacute;n de cursos)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por situaciones disciplinarias (expulsi&oacute;n, suspensi&oacute;n, sanciones, peleas con la instituci&oacute;n educativa)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque no estaba preparado adecuadamente para cursar este grado o semestre</label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas d-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudioe" name="masnoestudioe" value="+"></label>
	  			<label>Causas del entorno de la instituci&oacute;n educativa?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta e -->
	<div class="row"  id ="desnoestudioe">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por la zona en la que vive o en la que queda la instituci&oacute;n educativa era insegura y el trayecto a la instituci&oacute;n era peligroso</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque esa zona sufre permanentemente desastres naturales (inundaciones, derrumbres, etc)</label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas e-->
	<br/>
	
		<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudiof" name="masnoestudiof" value="+"></label>
	  			<label>Causas personales?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta f -->
	<div class="row"  id ="desnoestudiof">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Se habia inscrito en un programa o instituci&oacute;n que no lo que quer&iacute;a</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque no le gustaba la forma de ense&ntilde;ar</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por paternidad o maternidad</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Por enfermedad</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Porque tuvo que irse a otra ciudad para estudiar y no se adapt&oacdute; al cambio</label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas f-->
	<br/>
	
		<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masnoestudiog" name="masnoestudiog" value="+"></label>
	  			<label>Otra causa?</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta e -->
	<div class="row"  id ="desnoestudiog">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> &iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
	</div>
	<!--cierra div respuestas e-->
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente12" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page13" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	<h4>Indique el &uacute;ltimo a&ntilde;o o grado de estudios que XXXXXX aprob&oacute;.</h4>
	<br/>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>&nbsp;</label>
			</div>
		</div>
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="text">
			  			<label>Grados</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>1. Preescolar </label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Prejard&iacute;n</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Jard&iacute;n</label>
			</div>
		</div>
			<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Transici&oacute;n</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>2. B&aacute;sica primaria </label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5&deg;</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>3. B&aacute;sica secundaria (bachillerato b&aacute;sico) </label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6&deg;(1&deg;)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">7&deg;(2&deg;)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">8&deg;(3&deg;)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">9&deg;(4&deg;)</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>4. Media acad&eacute;mica o cl&aacute;sica (bachillerato cl&aacute;sico) </label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">10&deg;(5&deg;)</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">11&deg;(6&deg;)</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>5. Media t&eacute;cnica</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">10&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">11&deg;</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>6. Normalista</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">10&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">11&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">12&deg;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">13&deg;</label>
			</div>
		</div>
	</div>	
	<br/>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label><b>SUPERIOR</b></label>
			</div>
		</div>
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="text">
			  			<label>A&ntilde;os</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>7. T&eacute;cnica profesional</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>8. Tecnol&oacute;gica</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>9. Universitario</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6</label>
			</div>
		</div>
	</div>	
	<br/>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label><b>POSTGRADO</b></label>
			</div>
		</div>
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="text">
	  					<label>A&ntilde;os</label>
	  				</div>
	  			</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>10. Especializaci&oacute;n</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>11. Maestr&iacute;a</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>12. Doctorado</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">1</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">2</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">3</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">4</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">5</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">6</label>
			</div>
		</div>
	</div>	
		<br/>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
	  			<label>13. Ninguno</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion"></label>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente13" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page14" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	
	<h4>&iquest;XXXXXX utiliza: </h4>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>a. tel&eacute;fono celular?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>b. computador?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>c. tableta?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="radio">
	  			<label>d. internet?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente14" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page15" class="row col-md-10">
	<h3>XXXXXX</h3><br/>
	
	<h4>&iquest;Durante LA SEMANA PASADA, XXXXXX :</h4>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="radio">
	  			<label><span id="hint7"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">trabaj&oacute; por lo menos una hora?<span id="hint8"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">no trabaj&oacute; pero ten&iacute;a trabajo?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">busc&oacute; trabajo, pero hab&iacute;a trabajado antes?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">busc&oacute; trabajo por primera vez?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">estudi&oacute; y no trabaj&oacute; ni busc&oacute; trabajo?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">realiz&oacute; oficios del hogar y no trabaj&oacute; ni busc&oacute; trabajo? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">estuvo incapacitado permanentemente para trabajar? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">vivi&oacute; de jubilaci&oacute;n o renta y no trabaj&oacute; ni busc&oacute; trabajo? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">estuvo en otra situaci&oacute;n?</label>
			</div>
		</div>
	</div>
	
	<br/>
	<h4>Aunque ya selecciono que XXXXXX (El sistema traer&aacute; la opci&oacute;n marcada en la pregunta 75) &iquest;la semana pasada:</h4>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>ayud&oacute; en un negocio familiar o no familiar?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>vendi&oacute; por su cuenta alg&uacute;n producto?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>elabor&oacute; alg&uacute;n producto para vender?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>realiz&oacute; otro tipo de actividad a cambio de alg&uacute;n pago?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>realiz&oacute; algun tipo de trabajo colectivo de grupos etnicos? (minga, mamuncia, convite, yanama)</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>ayud&oacute; en las labores del campo o en la cr&iacute;a de animales?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="radio">
	  			<label>fue pasante o aprendiz, o realiz&oacute; alg&uacute;n trabajo como voluntario?</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">Si</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente15" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page16" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>&iquest;A qu&eacute;  se dedica PRINCIPALMENTE la empresa,  establecimiento, negocio, o finca, en la que XXXXXX trabaj&oacute;?<br/>Seleccione:</h4>

	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masactempresa1"  value="+"></label>
	  			<label>Agricultura, ganader&iacute;a, caza, silvicultura y pesca</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta 1 -->
	<div class="row"  id ="desctempresa1">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Agricultura, ganader&iacute;a, caza, y actividades de servicios conexas</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Silvicultura y extracci&oacute;n de madera</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Pesca y cultura</label>
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
	<div class="row"  id ="desctempresa2">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Extraci&oacute;n de carb&oacute;n de piedra y lignito</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Extraci&oacute;n de petr&oacute;leo crudo y gas natural</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Extraci&oacute;n de minerales de metal&iacute;feros</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Extraci&oacute;n de otras minas y canteras</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de servicio de apoyo para la explotaci&oacute;n de minas y canteras</label>
			</div>
		</div>
	</div>
	<!-- cierra div respuestas 2-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masactempresa3"  value="+"></label>
	  			<label>Elaboraci&oacute;n de alimentos y bebidas</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta 3 -->
	<div class="row"  id ="desctempresa3">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Elaboraci&oacute;n de productos alimenticios</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Elaboraci&oacute;n de bebidas</label>
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
	<div class="row"  id ="desctempresa4">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos textiles </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Confecci&oacute;n de prendas de vestir</label>
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
	<div class="row"  id ="desctempresa5">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Elaboraci&oacute;n de productos de tabaco </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Curtido y recurtidos de cuero; fabricaci&oacute;n de calzado; fabricaciion&oacute;n de art&iacute;culos de viaje; maletas; bolsos de mano y art&iacute;culos similares, y fabricaci&oacute;n de art&iacute;culos de talabarter&iacute;a y guamicioner&iacute;a; adobo y te&ntilde;ido de pieles </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Transformaci&oacute;n de madera y fabricaci&oacute;n de productos de madera y de corcho, excepto muebles; fabricaci&oacute;n de art&iacute;culos de cester&iacute;a y esparter&iacute;a</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de papel, cart&oacute;n, y productos de papel y cart&oacute;n</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de impresi&oacute;n y de producci&oacute;n de copias a partir de grabaciones originales</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Coquizaci&oacute;n, fabricaci&oacute;n de productos de la refinaci&oacute;n del petr&oacute;leo y actividad de mezca de combustibles</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de sustancias y productos qu&iacute;micos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos farmac&eacute;uticos, sustancias qu&iacute;micas medicinales y productos bot&aacute;nicos de uso farmac&eacute;utico</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos de caucho y pl&aacute;stico</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos minerales no met&aacute;licos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos metal&uacute;rgicos b&aacute;sicos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos elaborados en metal, excepto maquinaria y equipo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de productos inform&aacute;ticos, electr&oacute;nicos y &oacute;pticos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de aparatos y equipo el&eacute;ctrico</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de maquinaria y equipo n.c.p.</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de veh&iacute;culos automotores, remolques y semiremolques</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de otros tipos de equipo de transporte</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Fabricaci&oacute;n de muebles, colchones y somieres</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Otras industrias manufactureras</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Instalaci&oacute;n, mantenimiento y reparaci&oacute;n especializado de maquinaria y equipo</label>
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
	<div class="row"  id ="desctempresa6">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Construcci&oacute;n de edificios</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Obras de ingenier&iacute;a civil</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Actividades especializadas para la construcci&oacute;n de edificios y obras de ingenier&iacute;a civil</label>
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
	<div class="row"  id ="desctempresa7">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Comercio al por mayor y en comisi&oacute;n o por contrata, excepto el comercio de veh&iacute;culos automotores y motocicletas</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" />  Comercio al por menor (incluso el comercio al por menor de combustibles), excepto el de veh&iacute;culos automotores y motocicletas</label>
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
	<div class="row"  id ="desctempresa8">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Comercio mantenimiento y reparaci&oacute;n de veh&iacute;culos automotores y motocicletas, sus partes, piezas y accesorios</label>
			</div>
		</div>
	</div>
	<!-- cierra div respuestas 8-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masactempresa9"  value="+"></label>
	  			<label>Transporte y actividades complementarias</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta 9 -->
	<div class="row"  id ="desctempresa9">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Transporte terrestre; transporte por tuber&iacute;as</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Transporte acu&aacute;tico</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Transporte a&eacute;reo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Almacenamiento y actividades complementarias de transporte</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Correo y servicios de mensajer&iacute;a</label>
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
	<div class="row"  id ="desctempresa10">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Alojamiento</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de servicios de comidas y bebidas</label>
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
	<div class="row"  id ="desctempresa11">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades jur&iacute;dicas y de contabilidad</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de administraci&oacute;n empresarial; actividades de consultor&iacute;a de gesti&oacute;n</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de arquitectura e ingenier&iacute;a; ensayos y an&aacute;lisis t&eacute;cnicos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Investigaci&oacute;n cient&iacute;fica y desarrollo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Publicidad y estudios de mercadeo</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Otras actividades profesionales, cient&iacute;ficas y t&eacute;cnicas</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades veterinarias</label>
			</div>
		</div>
	</div>
	<!-- cierra div respuestas 11-->
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="button" id="masactempresa12"  value="+"></label>
	  			<label>Actividades de atenci&iacute;n a la salud humana y asistencia social</label>
			</div>
		</div>
	</div>
	<!-- div de la respuesta 12 -->
	<div class="row"  id ="desctempresa12">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de atenci&oacute;n a la salud humana</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de atenci&oacute;n recidencial medicalizada</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de asistencia social sin alojamiento</label>
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
	<div class="row"  id ="desctempresa13">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Educaci&oacute;n</label>
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
	<div class="row"  id ="desctempresa14">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Telecomunicaciones</label>
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
	<div class="row"  id ="desctempresa15">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Suministro de electricidad, gas, vapor y aire acondicionado </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Capacitaci&oacute;n, tratamiento y distribuci&oacute;n de agua</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Evaluaci&oacute;n y tratamiento de aguas residuales</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Recolecci&oacute;n, tratamiento y disposici&oacute;n de desechos, recuperaci&oacute;n de materiales</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de saneamiento ambiental y otros servicios de gesti&oacute;n de desechos</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de edici&oacute;n </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades cinematogr&aacute;ficas de video y producci&oacute;n de programas de televisi&oacute;n, grabaci&oacute;n de sonido y edici&oacute;n de m&uacute;sica </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de programaci&oacute;n, tranmisi&oacute;n y/o difusi&oacute;n  </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de desarrollo de sistemas inform&aacute;ticos (planificaci&oacute;n, an&aacute;lisis, dise&ntilde;o, programaci&oacute;n, pruebas), consultor&iacute;a inform&aacute;tica y actividades relacionadas </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de servicios de informaci&oacute;n </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de servicios financieros, excepto las de pensiones y de seguros </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Seguros (incluso el reaseguros), seguros sociales y fondos de pensiones, excepto la seguridad social </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades auxiliares de las actividades de servicios financieros </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades inmobiliarias </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de alquiler y arrendamiento </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de empleo </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de las agencias de viajes, operadores tur&iacute;sticos, servicios de reserva y actividades relacionadas </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de seguridad e investigaci&oacute;n privada</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de servicios en edificios y paisajismo (jardines, zonas verdes)</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades administrativas y de apoyo de oficina y otras actividades de apoyo a las empresas</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Administraci&oacute;n p&uacute;blica y defensa; planes de seguridad social de afiliaci&oacute;n obligatoria</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades creativas, art&iacute;sticas y de entretenimiento</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de bibliotecas, archivos, museos y otras actividades culturales </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de juegos de azar y apuestas </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades deportivas y actividades recreativas y de esparcimiento</label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de asociaciones </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Mantenimiento y reparaci&oacute;n de computadores, efectos personales y enseres dom&eacute;sticos </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Otras actividades de servicios personales </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de los hogares individuales como empleados de personal dom&eacute;stico </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades no diferencidas de los hogares individuales como productores de bienes y servicio para uso propio </label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="checkbox" id="radioOpcion" name="radioOpcion" /> Actividades de organizaciones y entidades extraterritoriales</label>
			</div>
		</div>
	</div>
	<!-- cierra div respuestas 15-->
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente16" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page17" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>&iquest;En ese trabajo XXXXXX era:</h4>
	<div class="row">
		<div class="col-md-5">
			<div class="radio">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="radio">
	  			<label><span id="hint9"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">empleado(a) obrero(a) de empresa particular?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">empleado(a) obrero(a) del gobierno?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">patr&oacdute;n(a) empleador(a)?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">trabajador(a) por cuenta propia o independiente?<span id="hint10"></span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">jornalero (a) o pe&oacute;n? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">empleado(a) dom&eacute;stico(a)?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">trabajador (a) sin remuneraci&oacute;n?</label>
			</div>
		</div>
	</div>
	
	<br/>
	<h4>&iquest;El lugar donde XXXXXX trabaj&oacute; est&aacute; ubicado en:</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">El sistema traer&aacute; el municipio de la inscripci&oacute;n </label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro municipio colombiano Departamento / Municipio   </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="radio">
				<label><input type="radio" id="radioOpcion" name="radioOpcion">En otro pa&iacute;s (nombre) </label>
				<label>&iquest;Cu&aacute;l?</label>
	  			<label><input type="text" id="C4P44_EDAD" name="C4P44_EDAD" value=""  /></label>
			</div>		
		</div>

	</div>
	<br/>
	
	<h4>&iquest;XXXXXX est&aacute; cotizando actualmente a un fondo de pensiones? </h4>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">S&iacute;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion"> Ya esta pensionado</label>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente17" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page18" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>Actualmente, &iquest;el estado civil de XXXXXX es</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">uni&oacute;n libre?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">casado(a)?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">divorciado(a)? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">separado(a) de uni&oacute;n libre?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">separado(a) de matrimonio? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">viudo(a)?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">soltero(a)?  (nunca se ha casado ni ha vivido en uni&oacute;n libre)</label>
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente18" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page19" class="row col-md-10">
	<h4>&iquest;Cu&aacute;ntos hijos e hijas nacidos vivos ha tenido KKKKKK en total? </h4>
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
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos hombres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos mujeres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;De los hijos(as) que nacieron vivos de KKKKKK &iquest;cu&aactue;ntos est&aacute;n vivos actualmente?  </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos hombres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos mujeres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No sabe</label>
			</div>
		</div>
	</div>
	<br/>

	
	<h4>&iquest;Cu&aacute;ntos de los hijos(as) de KKKKKK VIVEN ACTUALMENTE FUERA DE COLOMBIA? </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos hombres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
				<label>&iquest;Cu&aacute;ntos mujeres?</label>
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Seleccione...</option>
							<?php for ($i=1; $i<=10; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No sabe</label>
			</div>
		</div>
	</div>
	
	
	<h4>El &uacute;ltimo hijo o hija de KKKKKK &iquest;est&aacute; vivo actualmente?</h4>
	<div class="row">
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">S&iacute;</label>
			</div>
		</div>
		<div class="col-md-1">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">No</label>
			</div>
		</div>
	</div>
	<br/>
	
	<h4>&iquest;Cu&aacute;l es la fecha de nacimiento del &uacute;ltimo hijo(a) nacido(a) vivo(a) de KKKKKK? </h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">D&iacute;a...</option>
							<?php for ($i=1; $i<=31; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>
				<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">Mes...</option>
							<?php for ($i=1; $i <= 12; $i++){
							        if ($i==1)$Mes_Desc = "ENERO";
							        if ($i==2)$Mes_Desc = "FEBRERO";
							        if ($i==3)$Mes_Desc = "MARZO";
							        if ($i==4)$Mes_Desc = "ABRIL";
							        if ($i==5)$Mes_Desc = "MAYO";
							        if ($i==6)$Mes_Desc = "JUNIO";
							        if ($i==7)$Mes_Desc = "JULIO";
							        if ($i==8)$Mes_Desc = "AGOSTO";
							        if ($i==9)$Mes_Desc  = "SEPTIEMBRE";
							        if ($i==10)$Mes_Desc = "OCTUBRE";
							        if ($i==11)$Mes_Desc = "NOVIEMBRE";
							        if ($i==12)$Mes_Desc = "DICIEMBRE";
									?>
							        <option  value="<?PHP  echo($i);?>"><?PHP  echo($Mes_Desc);?> </option>
						        <?PHP  }?>
						</select>
				</label>
				<label><select class="form-control" id="tipo_certi" name="tipo_certi" class="form-control" required autofocus>
							<option value="">A&ntilde;o...</option>
							<?php for ($i=1895; $i<=2015; $i++){ ?> 
						   	          <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php } ?>
						</select>
				</label>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente19" class="btn btn-sm btn-primary">Siguiente</button>
			</div>
		</div>			
	</div>	
</div>

<!-- nuevo page -->
<!-- nuevo page -->
<!-- nuevo page -->

<div id="page20" class="row col-md-10">
	<h3>XXXXXX</h3><br/>

	<h4>&iquest;XXXXXX se reconoce en su orientaci&oacute;n sexual<label><span id="hint12"></span></label> como:</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">heterosexual?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">homosexual.?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">bisexual.? </label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">no sabe</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">no responde</label>
			</div>
		</div>
	</div>
	<br/>
	
	
	<h4>&iquest;XXXXXX se reconoce en su identidad de g&eacute;nero <label><span id="hint13"></span></label> como:</h4>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">masculino?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">femenino?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">transg&eacute;nero? (travesti, transformista, transexual)</label>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">no sabe</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">interg&eacute;nero?</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<label><input type="radio" id="radioOpcion" name="radioOpcion">no responde</label>
			</div>
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-12">
			<div class="radio">
	  			<button type="button" id="btnSiguiente20" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
			</div>
		</div>			
	</div>	
</div>
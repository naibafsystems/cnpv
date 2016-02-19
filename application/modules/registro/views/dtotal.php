
<!-- ojo estilo para ajustar el alto del header de la grilla--> 
 <style type="text/css">



 th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
        align:center;
    }
    </style> 
<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-11">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						DATOS DE CONFORMACI&Oacute;N DEL HOGAR
					</h4>
				</div>
			</div>
		</div>			
	</div>
</div>  

<div class="container">
    <div class="row">
    	<div class="col-md-11"> 
			<form id="frmPantallas3" name="frmPantallas3" method="post" action="">
				 <div class="row">
					<div class="col-md-6">
						<div class="radio">
							<div class='panel panel-primary'>
								<div class='panel-body' align="justify"> Ten en cuenta que HOGAR es una persona o grupo de personas, parientes o no, que:<br>
								- Ocupan la totalidad o parte de una vivienda.<br>
								- Atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n.<br>
								- Generalmente comparten las comidas.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<div class='panel panel-primary'>
								<div class='panel-body' align="justify"> Las personas que componen un hogar deben ser RESIDENTES HABITUALES, es decir,  que habitan la mayor parte del tiempo en la vivienda, aunque en el momento del diligenciamiento se encuentren ausentes temporalmente.
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class='col-md-10'>
					 	<div class="radio">
							<label> De acuerdo con las anteriores definiciones, &iquest;cu&aacute;ntas personas conforman tu hogar? </label>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="radio">
							<label>Total de personas<font color="red"><b>*</b></font></label>
							<label>
								<select class="form-control" id="dtxtotper" name="dtxtotper"  style="height: 35px; width: 80px" >
										<?php for ($i=1; $i<=20; $i++){ ?>
										<option value="<?php echo $i;?>" <?php echo ($datosp['C3H_TOT_PER']==$i)? "selected='selected'":'' ?>> <?php echo $i; ?></option>
										<?php }?>
								</select>
							</label>
						</div>	
					</div>
					<div class='col-md-10'>
						<div class="radio">
							<label>Registra los datos de cada una de las personas que conforman tu hogar.</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class='col-md-12'  >
						<div class='panel panel-primary' >
							<div class='panel-body' align="justify" > Para registrar los datos de las personas que conforman tu hogar, ten en cuenta estas consideraciones. <img src="<?php echo base_url("images/help.png"); ?>"  title=" Adem&aacute;s de los residentes 'presentes', son residentes habituales del hogar que est&aacute; censando, PORQUE NO TIENEN RESIDENCIA HABITUAL EN OTRO LUGAR, las siguientes personas:
 -Los miembros del hogar que en el momento de la entrevista se encuentren ausentes temporalmente por un periodo igual o inferior a 6 meses, por motivos especiales como: vacaciones, cursos de capacitaci&oacute;n, viajes de negocio, comisiones de trabajo, entre otros.
 - Los secuestrados y los desaparecidos, sin importar el tiempo de ausencia.
- Los enfermos que reciben atenci&oacute;n en hospitales o cl&iacute;nicas, sin importar el tiempo de ausencia.
-  Los desplazados, sin importar el tiempo de permanencia en el hogar que se est&aacute; entrevistando.
 - Las personas detenidas temporalmente en inspecciones de polic&iacute;a.
-  Las personas privadas de su libertad y de otros derechos civiles por haber infringido la ley, y que gozan del beneficio de 'Casa por c&aacute;rcel', sin importar el estado en el que se encuentre su proceso.
- Los que prestan el servicio militar en la polic&iacute;a y duermen en sus respectivos hogares.
- Los empleados dom&eacute;sticos 'internos' (son los que duermen la mayor parte del tiempo en la vivienda donde trabajan; se consideran miembros del hogar para el que trabajan).
- Los pensionistas (personas que pagan por el derecho a la vivienda y a los alimentos, se consideran miembros del hogar en el que pagan por esos derechos).
- Los residentes en las casas fiscales."/><br>
							</div>
						</div>
					</div>		
		 		</div>
				<div class="row" align ="center">
					<div id="dresultAAdminP" class="col-md-10">
						<div class="centergrid">
							<table id="djqGridP"></table>
							<div id="djqGridPagerP"></div>
						</div>
					</div>
				</div>
				<br/>
			
				<div class="row">
					<div class="col-md-8">
						<div id="dalerta33" class="alert alert-warning" role="alert">
			        		<strong></strong>
			      		</div>	
					</div>
				</div>
				<br/>
				 <div class ="row">
					<div class="col-md-8">
						<input type=hidden id="djef" name="djef" value=""  />
						<input type=hidden id="dcmpl" name="dcmpl" value=""  />
						<input type=hidden id="dcanti" name="dcanti" value=""  />
					</div>	
				</div>
	
				<div class="row">
					<div id="dresult" class="form-group col-md-10">
		  				&nbsp;
		  			</div>	  				
		  			<div id="dresult" class="form-group col-md-1">
		  				<button type="button" id="dacepto3" name="dacepto3" class="btn btn-danger">Guardar y siguiente</button>&nbsp;&nbsp;&nbsp;
		  				<input type="hidden" id="dindex" name="dindex" value="3"  />
		  			</div>
		  		</div>
			
  			</form>		
    	</div>
    </div>
</div>
	

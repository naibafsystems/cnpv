<?php //echo "aaa=".$hogar["C3H35_NRO_FALL"];
$a=$hogar["C3H35_NRO_FALL"];
if ($a == "" || $a == NULL)
{
	$hogar["C3H35_NRO_FALL"]="-1";
}
//echo "este=".$hogar["C3H35_NRO_FALL"];
?>
<script type="text/javascript">

	$(function(){
			//Configuracion de JQGrid
			$.jgrid.defaults.width = 'auto';
			$.jgrid.defaults.styleUI = 'Bootstrap';
			$.jgrid.defaults.responsive = true;
			$("#jqGrid").jqGrid({		
				url: base_url + "hogar/hogar/jsonQuery",	
				editurl: 'hogar/hogar/jsonQueryElifallecidos',									
				datatype: "json",
				colModel: [
					{ label: 'ID', name: 'C3F35A_NRO_FALL', width: 55, editable:true, hidden: true, key: true},
					{ label: 'N\u00famero de Fallecido', name: 'C3F35A_NRO_FALL', width: 135, hidden: true, },
					{ label: 'Sexo', name: 'C3F35B_SEXO_FALL', width: 125 },
				    { label: 'Edad', name: 'C3F35C_EDAD_FALL', width: 120 },
					{ label: 'Certificado', name: 'C3F35D_CERT_DEFUN', width: 120 }
				],
				viewrecords: false,  //show the current page, data rang and total records on the toolbar
				shrinkToFit: false, //Muestra la barra de desplazamiento horizontal
				width: 'auto',
				height: 'auto',
				rowNum: 20,
				rownumbers:true,
				loadonce: true, // this is just for the demo
				caption: 'PERSONAS FALLECIDAS',
				pager: "#jqGridPager",
				loadComplete: function() {

				    var ids = $(this).jqGrid('getDataIDs');
				
				    // i'm expanding all the sub grids here, but can do anything with the array
				    var len = ids.length;
				    //alert ("bb="+ids+" aaa="+len);
				    if (len==0)
					{
						$("#resultAAdmin").hide();
					}
					else
					{
						$("#resultAAdmin").show();
					}
					$("#total").val(len);

					/*alert ("combo"+$("#C3H35_NRO_FALL").val());
					alert ("total"+$("#total").val());*/
					if (parseInt($("#C3H35_NRO_FALL").val()) > parseInt($("#total").val()))
					{
						$("#datosFallecido").show();
					}
					else
					{
						$("#datosFallecido").hide();
					}
				
				}
				
			});


			jQuery("#jqGrid").navGrid('#jqGridPager',
					{ edit:false,add:false,del:false,search:false,refresh:false,defaults:false })
					.navButtonAdd('#jqGridPager',
							{ 
						closeOnEscape: true, 
								height: 'auto',
								caption:"Borrar", buttonimg:base_url + "images/row_del.png", position:"last",
								onClickButton:
									 
								function()
								{ 
										var grid = $("#jqGrid");
										var sr = jQuery("#jqGrid").getGridParam('selrow'); 
										
										if (sr) 
										{
										     grid.delGridRow(sr);
											 //alert("Selected row primary key is: " + sr);
											 var menos = parseInt($("#total").val())-parseInt(1);
											 $("#total").val(menos);
										}
										else 
										{
											alert("Por favor seleccione una fila");
										}
								}
									
						})

		});  
	</script>

<div id="page6" class="row col-md-12">
	<form id="frmPantalla6" name="frmPantalla6" method="post" action="">
		<h4>&iquest;Cu&aacute;ntas personas que eran miembros de su hogar han FALLECIDO EN LOS &Uacute;LTIMOS DOCE MESES?</h4>
		<div class="row">
			<div class="col-md-3">
				<div class="radio"></div>	
			</div>
			<div class="col-md-4">
				<div class="radio">
		  			<label><span id="hint15"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="radio"
					<label><select id="C3H35_NRO_FALL" name="C3H35_NRO_FALL" >
							<option value="-" selected="selected">Seleccione...</option>
						<?php 
							$sel='';
							
							for ($i=0; $i<=99; $i++)
							{
								if ($i == $hogar["C3H35_NRO_FALL"])
									$sel = "selected='selected'";
								else 
									$sel='';
								?>
										<option value="<?php echo $i; ?>" <?php echo $sel;?>><?php echo $i; ?></option>
								
																
								<?php 
							}?>
					</select></label>
				</div>
			</div>
		</div>
		<div class="row">
		<br/><br/><br/>
			<div class="col-md-8">
				<div id="alerta19" class="alert alert-warning" role="alert">
        			
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		</br></br>
		
		<div class="row" id="datosFallecido" >
			<div class="col-md-12">
				<div class="radio">
							<label>Sexo </label>
							<label>	<select id="C3F35B_SEXO_FALL" name="C3F35B_SEXO_FALL">
								<option value="-">Sexo</option>
								<option value="1" >Hombre</option> 
								<option value="2" >Mujer</option> 
							</select></label>
							<label>Edad al morir </label>
							<label><input type="text" id="C3F35C_EDAD_FALL" name="C3F35C_EDAD_FALL" style=" width:50px"></label>
							<label>&iquest;Se expidio certificado m&eacute;dico de defunci&oacute;n ?</label>
							<label>	<select id="C3F35D_CERT_DEFUN" name="C3F35D_CERT_DEFUN"  >
								<option value="-">Seleccione...</option>
								<option value="1" >Si</option> 
								<option value="2" >No</option>
								<option value="3" >No Sabe</option>  
							</select></label>
							<label><button type="button" id="agregaFallecidos" class="btn btn-sm btn-primary">Agregar</button></label>
							<br/><br/>
				</div>
			</div>
		</div>

		
				
	
		<!-- GRilla de personas fallecidas -->
	
		<div class="row" align ="center">
			<div id="resultAAdmin" class="col-md-10">
				<div class="centergrid">
					<table id="jqGrid"></table>
					  <div id="jqGridPager"></div>
				</div>
			</div>
		</div>
		<br/>
	
		<div class="row">
			<div class="col-md-8">
				<div id="alerta20" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		</br>
		</br>

		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="cantidad" name="cantidad" value="<?php if ($hogar["C3H35_NRO_FALL"]==-1){echo "0";}else {echo $hogar["C3H35_NRO_FALL"];} ?>"  />
				<input type="hidden" id="total" name="total" value=""  />
			</div>	
		</div>
	
		<div class="row">
			<div class="col-md-8">&nbsp;
			</div>
			<div class="col-md-4">
				<div class="radio">
					<button type="button" id="btnSiguiente7" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
	
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="6"  />
			</div>	
		</div>	
	
		</form>
</div>


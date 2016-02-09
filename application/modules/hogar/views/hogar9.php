
<!-- ojo estilo para ajustar el alto del header de la grilla -->
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

<script type="text/javascript">
//var base_url = "http://192.168.1.200/dimpe/cnpv/";

	$(function(){
			//Configuracion de JQGrid
			$.jgrid.defaults.width = 'auto';
			$.jgrid.defaults.styleUI = 'Bootstrap';
			$.jgrid.defaults.responsive = true;
			var valjef=0;
			$("#jqGridP").jqGrid({		
				url: base_url + "hogar/hogar/jsonQueryper",		
				editurl: 'hogar/hogar/jsonQueryEditper',							
				datatype: "json",
				colModel: [
					{ label: 'EXISTE', name: 'EXISTE', width: 55,  sortable:false, editable:true, hidden: true, 
						edittype:'text',editoptions:{size:20,  maxlength: 20} },
					{ label: 'ID', name: 'C4P41_NRO_PER', width: 55, editable:true, hidden: true, key: true},
					{ label: 'Primer Nombre', name: 'C4P42A_1ER_NOMBRE', width: 130, editable:true, 
				 	 	edittype:'text',editoptions:{size:20,  maxlength: 30, onblur:'Mayu(this.value, id);'}, 
						editrules: {edithidden: true} },
						
				    { label: 'Segundo Nombre', name: 'C3R38B2_2NOMBRE', width: 130, sortable:false,editable:true , 
					 	edittype:'text',editoptions:{size:20,  maxlength: 30, onblur:'Mayu(this.value, id);'}, 
						editrules: {edithidden: true } },
						
				    { label: 'Primer Apellido', name: 'C4P42B_1ER_APELLIDO', width: 130, sortable:false,editable:true , 
						edittype:'text',editoptions:{size:20,  maxlength: 20, onblur:'Mayu(this.value, id);' }, 
						editrules: {edithidden: true} },
						
				    { label: 'Segundo Apellido', name: 'C3R38C2_2APELLIDO', width: 130, sortable:false,editable:true , 
						edittype:'text',editoptions:{size:20,  maxlength: 20, onblur:'Mayu(this.value, id);'}, 
						editrules: {edithidden: true } },

				    { label: 'Jefe', name: 'C4P49_PARENTESCO', width: 10, editable:true,   hidden: true, 
						edittype:'select',editoptions:{size:20,  maxlength: 20}, 
						editrules: {edithidden: true} ,
						editoptions: { value: "Seleccione ..." }},

						{ label: 'Jefe(a)', name: 'C4P49_PARENTESCO_DES', width: 80, sortable:false, 
							edittype:'select',editoptions:{size:20,  maxlength: 20}, 
							editrules: {edithidden: true} ,
							editoptions: { value: "Seleccione ..." }},
						
				    { label: 'Tipo Doc.', name: 'C4P43_TIPO_DOC', width: 10, editable:true, hidden: true, 
						edittype: 'select', editoptions:{size:20}, 
						editrules: {edithidden: true},
						editoptions: { value: "Seleccione ..." } },

					{ label: 'Tip Doc.', name: 'C4P43_TIPO_DOC_DES', width: 60, sortable:false,  
							edittype: 'select', editoptions:{size:20}, 
							editrules: {edithidden: true},
							editoptions: { value: "Seleccione ..." } },
						
				    { label: 'N\u00famero Documento', name: 'C4P44_NRO_DOC', width: 120, sortable:false,editable:true , 
					 	edittype:'text',editoptions:{size:20,  maxlength: 11, onblur:'Mayu(this.value, id);'}, 
						editrules: {edithidden: true} },
						
				    { label: 'A\u00f1os Cumplidos', name: 'C4P47_EDAD', width: 100, sortable:false,editable:true , 
					 	edittype:'text', editoptions:{title: "Para menores de 1 (un) a\u00f1o digite 0.", size:20,  maxlength: 20}, 
						editrules: {edithidden: true } },
						
				    { label: 'Sexo', name: 'C4P45_SEXO', width: 10, editable:true , hidden: true, 
					 	edittype:'select',editoptions:{size:20,  maxlength: 20}, 
						editrules: {edithidden: true},
						editoptions: { value: "Seleccione ..." } },

					{ label: ' Sexo', name: 'C4P45_SEXO_DES', width: 80,  sortable:false, 
					 	edittype:'select',editoptions:{size:20,  maxlength: 20}, 
						editrules: {edithidden: true},
						editoptions: { value: "Seleccione ..." } }
				],
				viewrecords: true,  //show the current page, data rang and total records on the toolbar
				shrinkToFit: false, //Muestra la barra de desplazamiento horizontal
				width: 'auto',
				height: 'auto',
				rowNum: 20,
				rownumbers:true,
				resizable: false, 
				loadonce: true, // this is just for the demo
				ignoreCase: true,				
				caption: 'PERSONAS RESIDENTES DEL HOGAR',
				loadComplete: function() {

					var ids = $(this).jqGrid('getDataIDs'); // cuenta el numero de registros de la grilla
				    var len = ids.length; 
				    if (len==0)
					{
				    	  var existejefe = 0;
					}
				    else
				    {
					 var total_haber=0,total_debe=0;
					 var rows= jQuery("#jqGridP").jqGrid('getRowData');
                     var row=rows[0];
                     var existejefe = row['EXISTE'];
				    }
                    // alert ("aqui="+existejefe);
                     $("#jef").val(existejefe);
				},
				 //reloadAfterEdit: true, //seems to have no effect
		         //reloadAfterSubmit: true, //seems to have no effect
				
				pager: "#jqGridPagerP"
			
			});

			jQuery("#jqGridP").navGrid('#jqGridPagerP',
					{ edit:false,add:false,del:false,search:false, refresh:false })
					.navButtonAdd('#jqGridPagerP',
						{ 
							caption:"Agregar", 
							//buttonimg:"../../../images/row_add.png",
							buttonimg: base_url + "images/row_add.png", 
							position:"last",				
							onClickButton: 
							function()
							{ 
								jQuery("#jqGridP").jqGrid('editGridRow',"new",{
									closeAfterAdd: true, 
									dataheight:500,
									afterShowForm:  funcionesCargar, 
									beforeSubmit: function(postdata, formid) {
										//alert ("yooo");
							            //alert(postdata);
							            var val= funcionesValidar(postdata)
							           // alert ("esteeee="+val);
							            
							            if (val=="")
							            {
								            //alert ("por si ");
							            	 return[true,"ajkdfjalkd"]; 
							            }
							            else 
							            {
							            	//alert ("por no");
							            	return[false, val]; 
							            }
							         },
									afterSubmit: function (response, postdata)
									{
										var respuesta=response.responseText;
										//var respu=respuesta.indexOf("false");
								        if (respuesta == 1) 
								        {
								         	alert("Error al guardar el registro, este documento ya esta en nuestra base de datos");
								         	return [false, "Error al guardar el registro"]//Captures and displays the response text on th Edit window
			                             }
								        else if (respuesta == 2)
								        {
								        	alert("Por favor contacte al admin no se pudo guardar en la  base de datos");
								         	return [false, "Error al guardar el registro, Por favor contacte al admin no se pudo guardar en la  base de datos"]//Captures and displays the response text on th Edit window
								        }
			                            else 
								        {
			                                $(this).jqGrid('setGridParam', { datatype: 'json' }).trigger('reloadGrid'); //Reloads the grid after edit
											alert("Registro Guardado Correctamente");
											return [true, 'Registro Guardado Correctamente']
										}
								      }, 
								     reloadAfterSubmit:true,
								     modal: true,
								});
								
							}
					 })
					 
					.navButtonAdd('#jqGridPagerP',
						{ 
							caption:"Modificar", 
							buttonimg: base_url +"images/row_edit.png", position:"last",
							onClickButton:
							function()
							{
									var grid = $("#jqGridP");
									var rowKey = grid.getGridParam("selrow");
									if (rowKey) {
											grid.editGridRow(rowKey, {
												closeAfterEdit: true, 
												dataheight:500 
												, afterShowForm:  funcionesCargar, 
												beforeSubmit: function(postdata, formid) {
													//alert ("yooo");
										            //alert(postdata);
										            var val= funcionesValidar(postdata)
										           // alert ("esteeee="+val);
										            
										            if (val=="")
										            {
											            //alert ("por si ");
										            	 return[true,"ajkdfjalkd"]; 
										            }
										            else 
										            {
										            	//alert ("por no");
										            	return[false, val]; 
										            }
										         },
												afterSubmit: function (response, postdata)
												{
													var respuesta=response.responseText;
													//var respu=respuesta.indexOf("false");
											        if (respuesta == 1) 
											        {
											         	alert("Error al guardar el registro, este documento ya esta en nuestra base de datos");
											         	return [false, "Error al guardar el registro"]//Captures and displays the response text on th Edit window
						                             }
											        else if (respuesta == 2)
											        {
											        	alert("Por favor contacte al admin no se pudo actualizar en la  base de datos");
											         	return [false, "Error al guardar el registro, Por favor contacte al admin no se pudo guardar en la  base de datos"]//Captures and displays the response text on th Edit window
											        }
						                            else 
											        {
						                                $(this).jqGrid('setGridParam', { datatype: 'json' }).trigger('reloadGrid'); //Reloads the grid after edit
														alert("Registro actualizado correctamente");
														return [true, 'Registro actualizado correctamente']
													}
											      }, 
											     reloadAfterSubmit:true,
											     modal: true,
											});
									}
									else {
											alert("Por favor seleccione una fila");
									}
									
							}
					 })
					.navButtonAdd('#jqGridPagerP',
						{ 
							height: 'auto',
							caption:"Borrar", buttonimg:base_url + "images/row_del.png", position:"last",
							onClickButton:
								 
							function()
							{ 
									var grid = $("#jqGridP");
									var sr = jQuery("#jqGridP").getGridParam('selrow'); 
									
									if (sr) 
									{
									     grid.delGridRow(sr);
										 //alert("Selected row primary key is: " + sr);
									}
									else 
									{
										alert("Por favor seleccione una fila");
									}
							}
					})
		});  
	</script>

<div id="page9" class="row col-md-12">
	<form id="frmPantalla9" name="frmPantalla9" method="post" action="">
		<h4>LISTADO DE RESIDENTES HABITUALES DEL HOGAR</h4>
		<h5 align="justify"> Verifique en la lista que se muestra en esta pantalla, si las personas que usted ingres&oacute; 
		en la inscripci&oacute;n son los residentes habituales que conforman actualmente su 
		<span title="Tenga en cuenta que hogar es una persona o grupo de personas que: &#10; - Pueden ser parientes o no, &#10; - ocupan la totalidad o parte de la vivienda, &#10; - atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n y &#013; - generalmente, comparten las comidas."><u>hogar</u></span>. Si necesita agregar <span title='Las personas que componen un hogar deben ser residentes habituales, es decir, que habitan la mayor parte del tiempo en la vivienda, aunque en el momento del diligenciamiento se encuentran ausentes temporales	'><u>residentes habituales </u></span>adicionales a los que se encuentran en la lista, por favor ingrese la informaci&oacute;n y d&eacute; clic en el bot&oacute;n Agregar.</h5>
		<!-- GRilla de personas fallecidas -->
	
		<div class="row" align ="center">
			<div id="resultAAdminP" class="col-md-10">
				<div class="centergrid">
					<table id="jqGridP"></table>
					  <div id="jqGridPagerP"></div>
				</div>
			</div>
		</div>
		<br/>
		
		<div class="row">
				<div class="col-md-8">
					<div id="alerta33" class="alert alert-warning" role="alert">
	        			<strong></strong>
	      			</div>	
				</div>
			</div>
			</br>
		 <div class ="row">
			<div class="col-md-8">
				<input type=hidden id="jef" name="jef" value="8"  />
			</div>	
		</div>

		<div class="row">
			<div class="col-md-8">&nbsp;
			</div>
			<div class="col-md-4">
				<div class="radio">
					<button type="button" id="btnFinalizaHog" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="9"  />
			</div>	
		</div>
  </form>		
</div>
	

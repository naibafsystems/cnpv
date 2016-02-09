/**
 * Funciones JavaScript para modulo de Busqueda de personas
 * @author hhchavezv	
 * @since  2016ene15
 */
 
	$(function(){
		
				
		//Configuracion de JQGrid
		$.jgrid.defaults.width = 1100;
		$.jgrid.defaults.styleUI = 'Bootstrap';
		$.jgrid.defaults.responsive = true;
		
		//Ejecuta Ajax JSON para llenar los datos del grid jquery por primera vez
		
		var txtNroId = $("#txtNroId").val();   
		var txtNombre1 = $("#txtNombre1").val();   
		var txtNombre2 = $("#txtNombre2").val();    
		var txtApellido1 = $("#txtApellido1").val();
		var txtApellido2 = $("#txtApellido2").val();
		
		var data = new Array(txtNroId,txtNombre1,txtNombre2,txtApellido1,txtApellido2);
		
		$("#jqGrid").jqGrid({
			
			url: generateGetURL("admin/busquedaPersonasAJAX/", data),						
			datatype: "json",
			colModel: [
			    
				{ label: 'Nro. Identificaci&oacute;n', name: 'txtNroId', width: 200, sorttype: 'number' },
				{ label: 'Primer Nombre', name: 'txtNombre1', width: 150 },
				{ label: 'Segundo Nombre', name: 'txtNombre2', width: 150 },
				{ label: 'Primer Apellido', name: 'txtApellido1', width: 150 },
				{ label: 'Segundo Apellido', name: 'txtApellido2', width: 150 },
				{ label: 'Estado Formulario', name: 'txtEstado', width: 200 },	
				{ label: 'Opciones', name: 'opc', width: 100 }								
			],
			
			viewrecords: true,  //show the current page, data rang and total records on the toolbar
			shrinkToFit: false, //Muestra la barra de desplazamiento horizontal
			width: 1100,
			height: 400,
			rowNum: 10,
			loadonce: true, // this is just for the demo
			pager: "#jqGridPager"
		});
		
		
		
		//Función que se ejecuta al hacer click sobre el botón de busqueda de usuarios
		//@author: hhchavezv
		//@since: 2016ene12
		$("#btnBuscarPersonas").bind("click",function(){	
			
			$.ajax({ // verifica si hay sesion
					type: "POST",
					url: base_url + "admin/validaSesion",										
					dataType: "html",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					
					success: function(data){
					
						if( resultadoValido(data) )
						{	
							var txtNroId = $("#txtNroId").val();   
							var txtNombre1 = $("#txtNombre1").val();   
							var txtNombre2 = $("#txtNombre2").val();    
							var txtApellido1 = $("#txtApellido1").val();
							var txtApellido2 = $("#txtApellido2").val();					
							var data = new Array(txtNroId,txtNombre1,txtNombre2,txtApellido1,txtApellido2);
							$("#jqGrid").setGridParam({
								url: generateGetURL("admin/busquedaPersonasAJAX/", data), 
								datatype:'json'
							}).trigger('reloadGrid',[{page:1}]);
						}
						else{
							alert ('La sesi\u00f3n termin\u00f3. Vuelva a ingresar por favor.');
							location.reload();
							
						}
						
						
					},
					error: function(result) {
						alert('Error al buscar. Intente nuevamente o actualice la p\u00e1gina.');
						
					}
					
		
				});
		
												
		});
		
		
		
	}); //EOC
	


function resultadoValido(data)
{
	if( (!/ERROR/.test(data)) && (!/Error/.test(data)) && (!/error/.test(data)) && (/-ok-/.test(data)) )
		return true;
	else
		return false;
}

//*************************************************************************************************
//* Genera una direccion URL para paso de parametros por GET, para el envio de AJAX en JavaScript
//*************************************************************************************************
function generateGetURL(path, data){
	var i = 0;
	var url = base_url + path;
	for (i=0; i<data.length; i++){
		if (isNaN(data[i]) && data[i].indexOf("/") > 0){
			step1 = data[i].replace('/','-');
			step2 = step1.replace('/','-');
			data[i] = step2;			
		}
		else if (data[i]==""){
			data[i] = '-';
		}
		url = url + encodeURIComponent(data[i]) + "/";		
	}
	url = url.substring(0, url.length -1);
	return decodeURIComponent(url);
}
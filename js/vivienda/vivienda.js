/**
 * Funciones JavaScript Para el Módulo de Vivienda
 * @author Daniel M. Díaz
 * @since  23/09/2015
 */

$(function(){
	
	redirectBrowser();
	
	$("#alerta1").hide(); //Ocultar div para mensaje de errores de la pregunta 1
	$("#alerta2").hide(); //Ocultar div para mensaje de errores de la pregunta 2
	$("#alerta3").hide(); //Ocultar div para mensaje de errores de la pregunta 3
	$("#alerta4").hide(); //Ocultar div para mensaje de errores de la pregunta 4
	$("#alerta5").hide(); //Ocultar div para mensaje de errores de la pregunta 5
	$("#alerta6").hide(); //Ocultar div para mensaje de errores de la pregunta 6
	$("#alerta7").hide(); //Ocultar div para mensaje de errores de la pregunta 7
	$("#alerta8").hide(); //Ocultar div para mensaje de errores de la pregunta 8
	$("#alerta9").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta10").hide(); //Ocultar div para mensaje de errores de la pregunta 10
	$("#alerta11").hide(); //Ocultar div para mensaje de errores de la pregunta 11
	
	$("#page2").hide();  
	$("#page3").hide();
	$("#page4").hide();
	$("#page5").hide();
	
	if ($("#c2v21a_ee:checked").val()==1){
		$("#cmbEstrato").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	else if ($("#c2v21a_ee:checked").val()==2){
		$("#cmbEstrato").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	
	
	//Validaciones de la pagina vivienda1
	$("#frmPregunta1").validate({
		rules: {
			pregunta1: { required: true }
		},
		messages: {
			pregunta1: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) {			
			$("#alerta1").show();	
			$("#alerta1").html(error);
		},
		submitHandler: function(form) {			
			if ($("#frmPregunta1").valid()){
				$("#page2").show();
				$("#page3").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Validaciones de la pagina vivienda2
	$("#frmPregunta2").validate({
		rules: {
			pregunta2: { required: true },
			pregunta3: { required: true },
			pregunta4: { required: true }
		},
		messages: {
			pregunta2: { required: "Debe seleccionar una de las opciones." },
			pregunta3: { required: "Debe seleccionar una de las opciones." },
			pregunta4: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element){
			//Mostrar el error en la parte de abajo de la caja de texto.
			switch(element.attr("id")){
				case "c2v17_mat_pared": $("#alerta2").show();	
										$("#alerta2").html(error);
										break;	
										
				case "c2v18_mat_piso":  $("#alerta3").show();	
										$("#alerta3").html(error);
										break;						
										
				case "c2v19_mat_techo": $("#alerta4").show();	
										$("#alerta4").html(error);
										break;						
			}
		},
		submitHandler: function(form){
			if ($("#frmPregunta2").valid()){
				$("#page4").show();
				$("#page3").toggle("slide");
				$("#hint8").hintOpen("","Para calcular el tiempo, puede apoyarse en: - Certificado de tradici\u00f3n y libertad de la vivienda.<br/> - Escrituras de la vivienda.<br/> - Consultar con el due&ntilde;o de la vivienda <br/> - Revosar el a&ntilde;o de fundaci&oacute;n del barrio.");
				$("html, body").scrollTop(0);			
			}
			else{
				alert("error");
			}
		}
	});
	
	//Validaciones de la pagina vivienda3
	$("#frmPregunta3").validate({
		rules: {
			pregunta5: { required: true }
		},
		messages: {
			pregunta5: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) {	
			$("#alerta5").show();	
			$("#alerta5").html(error);		
		},
		submitHandler: function(form){
			$("#page5").show();
			$("#page4").toggle("slide");
			$("#hint9").hint("","Hace referencia a la disponibilidad en la vivienda de los servicios b\u00e1sicos que sean prestados a trav\u00e9s de redes p\u00fablicas administradas por empresas p\u00fablicas, privadas o comunitarias");			
			$("#hint10").hint("Pozo S\u00e9ptico","Es un pozo subterr\u00e1neo al que est\u00e1n conectados uno o varios sanitarios y en el cual quedan depositados los excrementos o aguas negras. Funciona mediante un sistema de agua corriente.");
			$("#hint11").hint("Letrina","Es un pozo o hueco subterr\u00e1neo para la acumulaci\u00f3n y eliminaci\u00f3n de excrementos en el cual no interviene un sistema de agua corriente.");
			$("html, body").scrollTop(0);
		}
	});
	
	//Validaciones de la pagina vivienda4
	$("#frmPregunta4").validate({
		rules: {
			pregunta6:  { required: true },
			pregunta7:  { required: true },
			pregunta8:  { required: true },
			pregunta9:  { required: true },
			pregunta10: { required: true },
			pregunta11: { required: true }
		},
		messages: {
			pregunta6:  { required: "Debe seleccionar SI ó NO." },
			pregunta7:  { required: "Debe seleccionar SI ó NO." },
			pregunta8:  { required: "Debe seleccionar SI ó NO." },
			pregunta9:  { required: "Debe seleccionar SI ó NO." },
			pregunta10: { required: "Debe seleccionar una de las opciones." },
			pregunta11: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) {
			switch(element.attr("id")){
				case "c2v21a_ee": 			$("#alerta6").show();
											$("#alerta6").html(error);
											break;	
										
				case "c2v21b_alc": 			$("#alerta7").show();
											$("#alerta7").html(error);
											break;
				
				case "c2v21c_acu": 			$("#alerta8").show();
											$("#alerta8").html(error);
											break;
				
				case "c2v21d_gas": 			$("#alerta9").show();
											$("#alerta9").html(error);
											break;
										
				case "c2v22_tipo_sersa":	$("#alerta10").show();	
											$("#alerta10").html(error);  
											break;
										
				case "c2v23_eli_bas":		$("#alerta11").show();	
											$("#alerta11").html(error);
											break;
			}
		},
		submitHandler: function(form){
			var url = base_url + "inicio";   
			$(location).attr("href",url);
		}
	});
	
	
	//Botón de envío del formulario de vivienda 0.	
	$("#btnSiguiente").bind("click",function(){		
		marcarCrono(2);		
		$("#page2").show();
		$("#page1").toggle("slide");		
		$("#hint1").hintOpen("Casa","Edificaci\u00f3n formada por una sola vivienda con acceso directo desde la v\u00eda p\u00fablica, camino o campo.");
		$("#hint2").hintOpen("Apartamento","Vivienda independiente que hace parte de una edificaci\u00f3n mayor. En la cual hay generalmente otras viviendas y dispone de ba\u00f1o y cocina en su interior. Tiene acceso desde la v\u00eda p\u00fablica o a trav\u00e9s de pasillos, corredores, escaleras o ascensores.");
		$("#hint3").hintOpen("Tipo Cuarto","Vivienda independiente que hace parte de una edificaci\u00f3n mayor. Generalmente hay otras viviendas, carece de servicio sanitario y de cocina en su interior o dispone de uno de \u00e9stos. Tiene acceso desde \u00e1reas de circulaci\u00f3n com\u00fan. Ejemplo: En un inquilinato, las viviendas son tipo cuarto.");
		$("#hint4").hintOpen("Vivienda \u00c9tnica","Ind\u00edgena, Isle\u00f1a, Carpa Rrom");
		$("#hint5").hintOpen("Otro Tipo","Contenedor, carpa, embarcaci\u00f3n, vag\u00f3n, cueva, refugio natural, puente, etc.");
		$("html, body").scrollTop(0);
	});
	
	//Funcion a todos los radiobuttons de vivienda1 para que oculten el div que despliega los errores
	$("#frmPregunta1 input[name='pregunta1']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta1").hide();
		}
	});
	
	//Botón de envío del formulario de vivienda 1.
	$("#btnPregunta1").bind("click",function(){
		marcarCrono(2);
		if ($("#frmPregunta1").valid()){
			//Guardar el formulario con las preguntas diligenciadas
			ajaxGuardarVivienda(1);			
		}		
	});
	
	
	//Funcion a todos los radiobuttons de vivienda2 para ocultar el div que despliega errores.
	$("#frmPregunta2 input[name='pregunta2']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta2").hide();
		}
	});
	
	$("#frmPregunta2 input[name='pregunta3']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta3").hide();
		}
	});
	
	$("#frmPregunta2 input[name='pregunta4']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta4").hide();
		}
	});
	
	
	//Botón de envío del formulario de vivienda 2.
	$("#btnPregunta2").bind("click",function(){		
		marcarCrono(2);
		if ($("#frmPregunta2").valid()){
			//Guardar el formulario con las preguntas diligenciadas
			ajaxGuardarVivienda(2);						
		}		
	});
	
	//Funcion a todos los radiobuttons de vivienda3 para ocultar el div que despliega errores.
	$("#frmPregunta3 input[name='pregunta5']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta5").hide();
		}
	});
	
	//Botón de envío del formulario de vivienda 3.
	$("#btnPregunta3").bind("click",function(){		
		marcarCrono(2);
		//Guardar el formulario con las preguntas diligenciadas. Deja pasar la pregunta vacia (No se pregunta por el validador), pero debe ser verificada cuando se envía el formulario.
		ajaxGuardarVivienda(3);		
	});
	
	//Funcion a los radiobuttons de vivienda4 con valores SI/NO para mostrar/ocultar el div que contiene el control select con el listado de estratos.
	$("#frmPregunta4 input[name='pregunta6']:radio").bind("click",function(){
		if ($(this).val()=='1'){
			$('#cmbEstrato  option[value="-"]').attr("selected",true);
			$("#encEstrato").show();
			$("#cmbEstrato").show();
		}
		else if ($(this).val()=='2'){
			$('#cmbEstrato  option[value="-"]').attr("selected",true);
			$("#encEstrato").hide();
			$("#cmbEstrato").hide();
		}
	});
	
	//Funcion a los radiobuttons de vivienda4 con valores de SI/NO para que oculten el div que despliega los errores de las preguntas 6 a la 9
	$("#frmPregunta4 input[name='pregunta6']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta6").hide();
		}
	});
	
	$("#frmPregunta4 input[name='pregunta7']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta7").hide();
		}
	});
	
	$("#frmPregunta4 input[name='pregunta8']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta8").hide();
		}
	});
	
	$("#frmPregunta4 input[name='pregunta9']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta9").hide();
		}
	});
	
	
	//Funcion a todos los radiobuttons de vivienda4 para que oculten el div que despliega los errores en las preguntas 10 y 11
	$("#frmPregunta4 input[name='pregunta10']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta10").hide();
		}
	});
	
	$("#frmPregunta4 input[name='pregunta11']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta11").hide();
		}
	});
	
	//Funciones para el combo de estrato de la pagina 4
	$("#cmbEstr").bind("change",function(){
		if ($("#cmbEstr").val()=='-'){
			$("#alerta6").html("<b>Debe seleccionar el estrato.</b>");
			$("#alerta6").show();
		}
		else if ($(this).val()!='-'){
			$("#alerta6").html("");
			$("#alerta6").hide();
		}
	});
	
	
	//Botón de envío del formulario de vivienda 4.
	$("#btnPregunta4").bind("click",function(){		
		marcarCrono(2);		
		if ($("#c2v21a_ee:checked").val()==1 && $("#cmbEstr").val()=='-'){
			$("#alerta6").html("<b>Debe seleccionar el estrato.</b>");
			$("#alerta6").show();
		}
		else if ($("#frmPregunta4").valid()){
			
			//Valido que la pregunta de vivienda ya haya sido respondida
			$.ajax({
				type: "POST",
				url: base_url + "inicio/inicio/validarPreguntaVivienda",
				data: {},					
				dataType: "json",
				contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				cache: false,
				success: function(data){			
					if(data.valida){
						//La pregunta es valida
						ajaxGuardarVivienda(4);
					}		
					else{
						alert("Debe responder a la pregunta acerca de cu\u00e1ntos a\u00f1os de construida tiene la vivienda en la que usted reside.");
						return false;
					}
				},
				error: function(data){
					if (data!=""){
						alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
					}
				}
			});
		}
		
	});
	

});


function ajaxGuardarVivienda(index){
	$.ajax({
		type: "POST",
		url: base_url + "vivienda/vivienda/guardarvivienda",
		data: {
			'index': index,
			'c2v14_tipo_viv': $("#c2v14_tipo_viv:checked").val(),
			'c2v17_mat_pared': $("#c2v17_mat_pared:checked").val(),
			'c2v18_mat_piso': $("#c2v18_mat_piso:checked").val(),
			'c2v19_mat_techo': $("#c2v19_mat_techo:checked").val(),	
			'c2v20_anos_viv': $("#c2v20_anos_viv:checked").val(),
			'c2v21a_ee': $("#c2v21a_ee:checked").val(),
			'c2v21a1_estrato': ($("#cmbEstr").val()!='-'?$("#cmbEstr").val():null),
			'c2v21b_alc': $("#c2v21b_alc:checked").val(),
			'c2v21c_acu': $("#c2v21c_acu:checked").val(),
			'c2v21d_gas': $("#c2v21d_gas:checked").val(),
			'c2v22_tipo_sersa': $("#c2v22_tipo_sersa:checked").val(),
			'c2v23_eli_bas': $("#c2v23_eli_bas:checked").val()
		},					
		dataType: "html",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			switch(index){
				case 1: //Guardar preguntas formulario 1
						$("#page3").show();
						$("#page2").toggle("slide");
						$("#hint6").hint("Paredes Exteriores","Son las paredes que conforman el per\u00edmetro o encierran la vivienda y la separan de otras viviendas o de otros espacios habitacionales.");
						$("#hint12").hint("Alfombra","Se refiere a que la vivienda tenga, predominantemente, alfombra pegada al piso.");
						$("#hint7").hint("Techo o Cubierta","Se define como la estructura externa que separa y cubre la vivienda en forma permanente por la parte superior de la misma.<br/>NOTA: En todo caso, el techo no corresponde a los cielorrasos o cubrimientos que ADORNAN la parte interna de dichas estructuras.");
						$("html, body").scrollTop(0);
						break;
				case 2: //Guardar preguntas formulario 2
						$("#page4").show();
						$("#page3").toggle("slide");
						$("#hint8").hintOpen("","Para calcular el tiempo, puede apoyarse en: - Certificado de tradici\u00f3n y libertad de la vivienda.<br/> - Escrituras de la vivienda.<br/> - Consultar con el due&ntilde;o de la vivienda <br/> - Revisar el a&ntilde;o de fundaci&oacute;n del barrio.");
						$("html, body").scrollTop(0);		
						break;
				case 3: //Guardar preguntas formulario 3
						$("#page5").show();
						$("#page4").toggle("slide");
						$("#hint9").hint("","Hace referencia a la disponibilidad en la vivienda de los servicios b\u00e1sicos que sean prestados a trav\u00e9s de redes p\u00fablicas administradas por empresas p\u00fablicas, privadas o comunitarias");			
						$("#hint10").hint("Pozo S\u00e9ptico","Es un pozo subterr\u00e1neo al que est\u00e1n conectados uno o varios sanitarios y en el cual quedan depositados los excrementos o aguas negras. Funciona mediante un sistema de agua corriente.");
						$("#hint11").hint("Letrina","Es un pozo o hueco subterr\u00e1neo para la acumulaci\u00f3n y eliminaci\u00f3n de excrementos en el cual no interviene un sistema de agua corriente.");
						$("html, body").scrollTop(0);
						break;
				case 4: //Guardar preguntas formulario 4						
					    $("#btnPregunta4").attr("disabled",false);	
						var url = base_url + "inicio";    
						$(location).attr("href",url);
						break;
			}					
		},
		error: function(data){
			if (data!=""){
				alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
			}
		}				
	});		
}

function ajaxValidarPreguntaVivienda(){
	$.ajax({
		type: "POST",
		url: base_url + "inicio/inicio/validarPreguntaVivienda",
		data: {},					
		dataType: "json",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){			
			return data.valida;
		},
		error: function(data){
			if (data!=""){
				alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
			}
		}
	});
}
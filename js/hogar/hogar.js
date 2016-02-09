/**
 * Funciones JavaScript Para el Modulo de Hogar
 * @author Lramirezp
 * @since  28/09/2015
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
	$("#alerta10").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta11").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta12").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta13").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta14").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta15").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta16").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta17").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta18").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta19").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta20").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta21").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta22").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta23").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta24").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta25").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta26").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta27").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta28").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta29").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta30").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta31").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta32").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	$("#alerta33").hide(); //Ocultar div para mensaje de errores de la pregunta 9
	
		
		
		
	$("#page2").hide();
	$("#page3").hide();
	
	
	if ($("#C3H29_COCINAN_CON:checked").val()==7){
		$("#otroCombustible").hide(); //Ocultar div con el control de estratos en vivienda4.
		
	}
	else{
		$("#otroCombustible").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	if ($("#C3H30_OTRO_COMB:checked").val()==2){
		$("#resno").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#resno").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	if ($("#C3H34_EMIGRA:checked").val()==2){
		$("#viveactual").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#viveactual").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	if ($("#C3H36_AE_HOG:checked").val()==2){
		$("#actividades").hide(); //Ocultar div con el control de estratos en vivienda4.
		$("#espacios").html("<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>"); 
	}
	else{
		$("#actividades").show(); //Mostrar div con el control de estratos en vivienda4.
		$("#espacios").html(""); 
	}
	if ($("#C3H37A_DESPLAFORZ:checked").val()!=1){
		$("#desplazado").hide(); //Ocultar div con el control de estratos en vivienda4.
		$("#desplazado1").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#desplazado").show(); //Mostrar div con el control de estratos en vivienda4.
		$("#desplazado1").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	if ($("#C3H37B_DESPLAFORZ:checked").val()!=1){
		$("#abandono").hide(); //Ocultar div con el control de estratos en vivienda4.
		$("#abandono1").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#abandono").show(); //Mostrar div con el control de estratos en vivienda4.
		$("#abandono1").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	if ($("#C3H37C_DESPLAFORZ:checked").val()!=1){
		$("#despojo").hide(); //Ocultar div con el control de estratos en vivienda4.
		$("#despojo1").hide(); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#despojo").show(); //Mostrar div con el control de estratos en vivienda4.
		$("#despojo1").show(); //Mostrar div con el control de estratos en vivienda4.
	}
	
	
	
	
	$("#page4").hide();
	if ($("#C3H34G_OTRO_PAIS:checked").is(':checked')){
		$("#C3H34G1_OTRO_CUAL").removeAttr("disabled"); //Ocultar div con el control de estratos en vivienda4.
	}
	else{
		$("#C3H34G1_OTRO_CUAL").attr("disabled", "disabled"); //Mostrar div con el control de estratos en vivienda4.
		$("#C3H34G1_OTRO_CUAL").val("");
	}
	
	
	$("#page5").hide();
	$("#page6").hide();
	$("#page7").hide();
	$("#page8").hide();
	$("#page9").hide();
	
	//alert ($("#C3H36B_AE_REALIZA:checked").val());
	var ckequeado=$("#C3H36B_AE_REALIZA:checked").val();
	var c = ckequeado;
	var fields = c.split(/-/);
	var masabrir = fields[0];
	var actividad = fields[1];
	if (masabrir==1)
	{
		$("#desactviva").show();
	}
	else 
	{
		$("#desactviva").hide();
	}
	
	if (masabrir==2)
	{
		$("#desactvivb").show();
	}
	else
	{
		$("#desactvivb").hide();
	}
	
	if (masabrir==3)
	{
		$("#desactvivc").show();
	}
	else 
	{
		$("#desactvivc").hide();
	}
	
	if (masabrir==4)
	{
		$("#desactvivd").show();
	}
	else 
	{
		$("#desactvivd").hide();
	}
	
	if (masabrir==5)
	{
		$("#desactvive").show();
	}
	else 
	{
		$("#desactvive").hide();
	}
	
	if (masabrir==6)
	{
		$("#desactvivf").show();
	}
	else 
	{
		$("#desactvivf").hide();
	}
	
	if (masabrir==7)
	{
		$("#desactvivg").show();
	}
	else 
	{
		$("#desactvivg").hide();
	}
	
	if (masabrir==8)
	{
		$("#desactvivh").show();
	}
	else 
	{
		$("#desactvivh").hide();
	}
	
	if (masabrir==9)
	{
		$("#desactvivi").show();
	}
	else 
	{
		$("#desactvivi").hide();
	}
	
	if (masabrir==10)
	{
		$("#desactvivj").show();
	}
	else 
	{
		$("#desactvivj").hide();
	}
	
	if (masabrir==11)
	{
		$("#desactvivk").show();
	}
	else 
	{
		$("#desactvivk").hide();
	}
	
	$("#inicial").hide();
	
	
	
	$("#hint1").hintOpen("","Tenga en cuenta calcular este valor, as&iacute; usted sea el due&ntilde;o(a) de la vivienda.");
	
	$("#C3H27_NRO_CUARTOS").bloquearTextoSinGuiones().largo(2);
	$("#C3H28_NRO_DORMIT").bloquearTextoSinGuiones().largo(2);
	$("#C3F35C_EDAD_FALL").bloquearTextoSinGuiones().largo(3);
	$("#C3H36C_AE_QPER").bloquearTextoSinGuiones().largo(2);
	$("#C4P42A_1ER_NOMBRE").Mayusculas();
	
	
	
	/*
	 * PANTALLA 1
	 */
	//Validaciones de la pagina hogar1
	$("#frmPantalla1").validate({
		rules: {
			C3H25_VIVE_EN:  { required: true },
			C3H26_VR_ARRDO: { required: true }
		},
		messages: {
			C3H25_VIVE_EN: { required: "Debe seleccionar una de las opciones." },
			C3H26_VR_ARRDO: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H25_VIVE_EN":  $("#alerta1").show();	
											$("#alerta1").html(error);
											break;	
												
					case "C3H26_VR_ARRDO":  $("#alerta2").show();	
											$("#alerta2").html(error);
											break;						
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla1").valid()){
				$("#page1").show();
				$("#page2").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla1 input[name='C3H25_VIVE_EN']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta1").hide();
		}
	});
	
	$("#frmPantalla1 input[name='C3H26_VR_ARRDO']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta2").hide();
		}
	});
	
	//Botón de envío del formulario de Hogar 1.
		
	$("#btnSiguiente2").bind("click",function(){
		if ($("#frmPantalla1").valid()){
			ajaxGuardarHogar(1);
			/*$("#page2").show();
			$("#page1").toggle("slide");
						
			$("#hint2").hintOpen("","Incluya aquellos cuartos de los cuales	dispone, aunque sean compartidos con otros hogares.");	
			$("#hint3").hintOpen("","Incluya los cuartos que usa para dormir (descanso nocturno) aunque sean compartidos con otros hogares.");
			//$("html, body").animate({ scrollTop: 0 }, "slow");
			$("html, body").scrollTop(0);*/
		}
	});

	
	/*
	 * PANTALLA 2
	 */
	
	//Validaciones de la pagina hogar2 
	$("#frmPantalla2").validate({
		rules: 
		{
			C3H27_NRO_CUARTOS: { required: true,
								 expresion      :   '(parseInt($("#C3H27_NRO_CUARTOS").val()) == 0)   ||    (parseInt($("#C3H27_NRO_CUARTOS").val()) > 20)'},
					
			C3H28_NRO_DORMIT:   { required: true,
								  expresion      :   '(parseInt($("#C3H28_NRO_DORMIT").val()) == 0)   ||     (parseInt($("#C3H28_NRO_DORMIT").val()) > parseInt($("#C3H27_NRO_CUARTOS").val()))'
								  },
								
		},
		messages: {
												
			C3H27_NRO_CUARTOS	: { required	: "Debe diligenciar el n&uacute;mero de cuartos que dispone su hogar",
									expresion	: "Este valor debe ser m&iacute;nimo 1 y m&aacute;ximo 20 "},
												
			C3H28_NRO_DORMIT	: { required	: "Debe diligenciar el n&uacute;mero de cuartos que usan para dormir", 
									expresion	: "Este valor debe ser mayor a cero y menor o igual a la pregunta anterior"},
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H27_NRO_CUARTOS":  $("#alerta3").show();	
											   $("#alerta3").html(error);
											   break;	
												
					case "C3H28_NRO_DORMIT":  $("#alerta4").show();	
											  $("#alerta4").html(error);
											  break;						
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla2").valid()){
				$("#page3").show();
				$("#page2").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
		
	$("#frmPantalla2 input:text[name=C3H27_NRO_CUARTOS]").bind("keyup",function(){
		var valorcuartos=$('#C3H27_NRO_CUARTOS').val();
		if (valorcuartos != 0  && (parseInt(valorcuartos))<=20 ){
			$("#alerta3").hide();
		}
		else 
		{
			$("#alerta3").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=C3H28_NRO_DORMIT]").bind("keyup",function(){
		var valorcuartosdor=$('#C3H28_NRO_DORMIT').val();
		var valorcuartos=$('#C3H27_NRO_CUARTOS').val();
		if (valorcuartosdor != (0)  && ((parseInt(valorcuartosdor))<=parseInt(valorcuartos ))){
			$("#alerta4").hide();
		}
		else 
		{
			$("#alerta4").show();
		}
	});
	
	
	
	//Botón de envío del formulario de Hogar2.
	$("#btnSiguiente3").bind("click",function(){
		if ($("#frmPantalla2").valid()){
			ajaxGuardarHogar(2);
			/*$("#page3").show();
			$("#page2").toggle("slide");	
			$("#hint5").hint("ALJIBE -  JAG&Uuml;EY O BARRENO","Aljibe es un hoyo profundo en la tierra que sirve como dep&oacute;sito de agua lluvia o de nacimiento y que tiene una  protecci&oacute;n.                                                                                                              <br> <br>Jag&uuml;ey o barreno es un hoyo superficial excavado para almacenar agua lluvia, donde el agua recolectada no circula. Es frecuente encontrarlo en la Costa Atl&aacute;ntica y en los Llanos Orientales.");
			$("#hint6").hint("","Esta pregunta se refiere a la separaci&oacute;n de los residuos s&oacute;lidos del hogar, m&aacute;s no al reciclaje de estos.<br>Residuos Recicables - Reutilizables (Cart&oacute;n, papel, botellas, telas entre otros)<br>Residuos Ordinarios - (Restos de comida. Residuos sanitarios, entre otros).");
			//$("html, body").animate({ scrollTop: 0 }, "slow");
		$("html, body").scrollTop(0);*/
	}
	});
	
	
	/*
	 * PANTALLA 3
	 */
	
	
	//Validaciones de la pagina hogar3
	$("#frmPantalla3").validate({
		rules: {
			C3H29_COCINAN_CON:  { required: true },
			C3H30_OTRO_COMB: 	{ required: true },
			C3H30A_CUAL_OTRO: 	{ required: true },
			C3H31_AGUA_COCIN:	{ required: true },
			C3H32_RECICLAN:		{ required: true }
		},
		messages: {
			C3H29_COCINAN_CON: { required: "Debe seleccionar una de las opciones." },
			C3H30_OTRO_COMB:   { required: "Debe seleccionar una de las opciones." },
			C3H30A_CUAL_OTRO:   { required: "Debe seleccionar una de las opciones." },
			C3H31_AGUA_COCIN:  { required: "Debe seleccionar una de las opciones." },
			C3H32_RECICLAN:	   { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H29_COCINAN_CON":  $("#alerta5").show();	
											   $("#alerta5").html(error);
											   break;	
												
					case "C3H30_OTRO_COMB":  $("#alerta6").show();	
											 $("#alerta6").html(error);
											 break;		

					case "C3H30A_CUAL_OTRO":  $("#alerta7").show();	
											  $("#alerta7").html(error);
											  break;	
											  
					case "C3H31_AGUA_COCIN":  $("#alerta8").show();	
											$("#alerta8").html(error);
											break;
					case "C3H32_RECICLAN":  $("#alerta9").show();	
											$("#alerta9").html(error);
											break;	
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla3").valid()){
				$("#page4").show();
				$("#page3").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar3 para que oculten el div que despliega los errores
	$("#frmPantalla3 input[name='C3H29_COCINAN_CON']:radio").bind("click",function(){
		var verific=$(this).val();
		if (verific==7)
		{
			$("#frmPantalla3 input[name='C3H30_OTRO_COMB']").removeAttr("checked");
			$("#frmPantalla3 input[name='C3H30A_CUAL_OTRO']").removeAttr("checked");
			$("#otroCombustible").hide();
			
			
		}
		else 
		{
			$("#otroCombustible").show();
		}
		if ($(this).is(':checked')){
			$("#alerta5").hide();
		}
	});
	
	
	$("#frmPantalla3 input[name='C3H30_OTRO_COMB']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#resno").hide();
			$("#frmPantalla3 input[name='C3H30A_CUAL_OTRO']").removeAttr("checked");
		}
		else 
		{
			$("#resno").show();
		}
		if ($(this).is(':checked')){
			$("#alerta6").hide();
		}
	});
	$("#frmPantalla3 input[name='C3H30A_CUAL_OTRO']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta7").hide();
		}
	});
	$("#frmPantalla3 input[name='C3H31_AGUA_COCIN']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta8").hide();
		}
	});
	
	$("#frmPantalla3 input[name='C3H32_RECICLAN']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta9").hide();
		}
	});
	
	//Botón de envío del formulario de Hogar4.
	$("#btnSiguiente4").bind("click",function(){
		if ($("#frmPantalla3").valid()){
			ajaxGuardarHogar(3);
			/*$("#page4").show();
			$("#page3").toggle("slide");
			$("#hint7").hintOpen("","Esta pregunta hace referencia al ACCESO de las tecnolog&iacute;as en su vivienda, es decir, que tenga la posibilidad de utilizarlos.");
			$("#hint8").hint("Se&ntilde;al de radio","Hace referencia a la posibilidad de escuchar la señal de radio en su vivienda de manera autónoma y por cualquier medio.");
			$("#hint9").hint("Se&ntilde;al de televisi&oacute;n abierta","Es la se&ntilde;al de televisi&oacute;n gratuira, por ejemplo, la del canal Caracol, RCN, Canal uno, Telecaribe, Telepacifico, Teleantioquia, Canal Tro, Teleislas.");
			$("#hint10").hint("Se&ntilde;al de televisi&oacute;n por suscripci&oacute;n"," Es aquel servicio que se recibe a trav&eacute;s de la suscripci&oacute;n de un contrato con alguna empresa que suministra se&ntilde;ales de canales no visibles a trav&eacute;s de antenas convencionales.");
			$("#hint11").hint("Internet fijo","Es el acceso a Internet a trav&eacute;s de un cable.");
			$("#hint12").hint("Internet m&oacute;vil","Es el acceso a Internet a trav&eacute;s de wifi, planes de datos y m&oacute;dem inal&aacute;mbrico.");
			$("html, body").scrollTop(0);*/
		}
	});
	
	
	/*
	 * PANTALLA 4
	 *
	 */
	//Validaciones de la pagina hogar4
	$("#frmPantalla4").validate({
		rules: {
			C3H33A_RADIO		:  	{ required: true },
			C3H33B_TVABIE		:  	{ required: true },
			C3H33C_TVSUSC		:  	{ required: true },
			C3H33D_TEL_FIJO		:	{ required: true },
			C3H33E_INT_FIJO		:	{ required: true },
			C3H33F_INT_MOVIL	:	{ required: true },
			C3H33G_PC			: 	{ required: true }
		},
		messages: {
			C3H33A_RADIO		: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33B_TVABIE		: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33C_TVSUSC		: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33D_TEL_FIJO		: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33E_INT_FIJO		: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33F_INT_MOVIL	: 	{ required: "Debe seleccionar una de las opciones." },
			C3H33G_PC			:	{ required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H33A_RADIO"		:	$("#alerta10").show();	
												$("#alerta10").html(error);
												break;	
					case "C3H33B_TVABIE"	:	$("#alerta11").show();	
												$("#alerta11").html(error);
												break;	
					case "C3H33C_TVSUSC"	:	$("#alerta12").show();	
												$("#alerta12").html(error);
												break;	
					case "C3H33D_TEL_FIJO"	:	$("#alerta13").show();	
												$("#alerta13").html(error);
												break;	
					case "C3H33E_INT_FIJO"	:	$("#alerta14").show();	
												$("#alerta14").html(error);
												break;	
					case "C3H33F_INT_MOVIL"	:	$("#alerta15").show();	
												$("#alerta15").html(error);
												break;	
					case "C3H33G_PC"		:	$("#alerta16").show();	
												$("#alerta16").html(error);
												break;	
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla4").valid()){
				$("#page5").show();
				$("#page4").toggle("slide");	
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla4 input[name='C3H33A_RADIO']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta10").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33B_TVABIE']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta11").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33C_TVSUSC']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta12").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33D_TEL_FIJO']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta13").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33E_INT_FIJO']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta14").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33F_INT_MOVIL']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta15").hide();
		}
	});
	
	$("#frmPantalla4 input[name='C3H33G_PC']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta16").hide();
		}
	});
	
	$("#btnSiguiente5").bind("click",function(){
		if ($("#frmPantalla4").valid()){
			ajaxGuardarHogar(4);
			/*$("#page5").show();
			$("#page4").toggle("slide");		
			$("#hint13").hintOpen("IMPORTANTE","Tenga en cuenta: <br> * Al momento de  irse, la persona ten&iacute;a que hacer parte del <span title='Tenga en cuenta que hogar es una persona o grupo de personas que: \n- pueden ser parientes o no, \n- ocupan la totalidad o parte de la vivienda \n- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n y, \n- generalmente, comparten las comidas.'><u> hogar</u></span>, es decir, que en este momento era <span title='Las personas que componen un hogar deben ser residentes habituales, es decir, que habitan la mayor parte del tiempo en la vivienda, aunque en el momento del diligenciamiento se encuentran ausentes temporales	'><u>residente habitual</u></span>. * Hoy debe residir en el exterior.");			
			$("#hint14").hint("HOGAR","Tenga en cuenta que hogar es una persona o grupo de personas que: <br> - Pueden ser parientes o no, <br> - ocupan la totalidad o parte de la vivienda, <br>- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;muny <br> - generalmente, comparten las comidas.");
			$("#hint10").hint("Letrina","Es un pozo o hueco subterr\u00e1neo para la acumulaci\u00f3n y eliminaci\u00f3n de excrementos en el cual no interviene un sistema de agua corriente.");
			//$("html, body").animate({ scrollTop: 0 }, "slow");
			$("html, body").scrollTop(0);*/
		}
	});
	
	
	
	/*
	 * PANTALLA 5
	 * 
	 */
	
	$("#frmPantalla5").validate({
		rules: {
			C3H34_EMIGRA		: { required: true }
		},
		messages: {
			C3H34_EMIGRA		: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H34_EMIGRA"		:	$("#alerta17").show();	
												$("#alerta17").html(error);
												break;	
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla5").valid()){
				$("#page6").show();
				$("#page5").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla5 input[name='C3H34_EMIGRA']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#viveactual").hide();
			$("#C3H34A_VENEZUELA").removeAttr("checked");
			$("#C3H34B_USA").removeAttr("checked");
			$("#C3H34C_ESPANA").removeAttr("checked");
			$("#C3H34D_ECUADOR").removeAttr("checked");
			$("#C3H34E_PANAMA").removeAttr("checked");
			$("#C3H34F_CANADA").removeAttr("checked");
			$("#C3H34G_OTRO_PAIS").removeAttr("checked");
			$("#C3H34G1_OTRO_CUAL").val("");
		}
		else 
		{
			$("#viveactual").show();
			$("#alerta17").hide();
		}
			
	});
	
	$("#btnSiguiente6").bind("click",function(){
		if ($("#frmPantalla5").valid()){
			if ($("#C3H34_EMIGRA:checked").val()=='2'){
				ajaxGuardarHogar(5);
			}
			else 
			{
				var controlpais = false ;
				
				if ($('#C3H34A_VENEZUELA').is(':checked') || $('#C3H34B_USA').is(':checked') || $('#C3H34C_ESPANA').is(':checked') || $('#C3H34D_ECUADOR').is(':checked') || $('#C3H34E_PANAMA').is(':checked') || $('#C3H34F_CANADA').is(':checked') || $('#C3H34G_OTRO_PAIS').is(':checked'))
				{
					if($('#C3H34G_OTRO_PAIS').is(':checked') && $("#C3H34G1_OTRO_CUAL").val()=='')
					{
						$("#alerta18").html("<b>Debe especificar el otro pa&iacute;s.</b>");
						$("#alerta18").show();
						controlpais = false;
					}
					else if ($("#C3H34G1_OTRO_CUAL").val()!='' && (!$('#C3H34G_OTRO_PAIS').is(':checked')))
					{
						$("#alerta18").html("<b>Debe seleccionar la opcion otro pa&iacute;s.</b>");
						$("#alerta18").show();
						controlpais = false;
					}
					else 
					{
						controlpais = true;
					}
				}
				else 
				{
					if ($("#C3H34G1_OTRO_CUAL").val()!='')
					{
						$("#alerta18").html("<b>Debe seleccionar la opcion otro pa&iacute;s.</b>");
						$("#alerta18").show();
						controlpais = false;
					}
					$("#alerta18").html("<b>Debe seleccionar m&iacute;nimo un pa&iacute;s.</b>");
					$("#alerta18").show();
					controlpais = false;
						
				}
				
				
				
				if(controlpais == true)
				{
					ajaxGuardarHogar(5);
				}
			}
		}
		
	});
	
	
	$("#C3H34G_OTRO_PAIS").click(function(){
		if ($("#C3H34G_OTRO_PAIS:checked").is(':checked')){
			$("#C3H34G1_OTRO_CUAL").removeAttr("disabled"); //Ocultar div con el control de estratos en vivienda4.
		}
		else{
			$("#C3H34G1_OTRO_CUAL").attr("disabled", "disabled"); //Mostrar div con el control de estratos en vivienda4.
			$("#C3H34G1_OTRO_CUAL").val("");
		}
		});
	
	
	/*
	 * PANTALLA 6
	 * 
	 */
	
	//Validaciones de la pagina hogar6
	$("#frmPantalla6").validate({
		rules: {
			C3H35_NRO_FALL	:	{ comboBox: '-' }
		},
		messages: {
			C3H35_NRO_FALL	: { comboBox: "Debe indicar la cantidad de personas fallecidas." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H35_NRO_FALL"	:	$("#alerta19").show();	
												$("#alerta19").html(error);
												break;	
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla6").valid()){
				$("#page7").show();
				$("#page6").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla6 select[name=C3H35_NRO_FALL]").bind("change",function(){
		var valordia=$('#C3H35_NRO_FALL').val();
		if (valordia!='-'){
			$("#alerta19").hide();
		}
		var respuesta=$(this).val();
		var ingresos=$("#total").val();
		//alert ("seleccione ="+respuesta+" campo oculto="+ingresos+" valor dia="+valordia);

		if (parseInt(respuesta) > parseInt(ingresos) && parseInt(valordia) != '-' && parseInt(valordia) !=0)
		{
			//alert ("aqui");
			$("#datosFallecido").show();
		}
		else
		{
			if (parseInt(respuesta) < parseInt(ingresos) && parseInt(respuesta) != '-')
			{
				alert ("Usted ya ingreso "+ingresos+" personas fallecidas, si desea disminuir este valor debe borrar los registros ingresados por error");
			}
			if (ingresos != '-1')
			{
				$("#C3H35_NRO_FALL").val(ingresos);
			}
			$("#datosFallecido").hide();
		}
	});
	
	$("#btnSiguiente7").bind("click",function(){
		if ($("#frmPantalla6").valid()){
			var respuesta=$("#C3H35_NRO_FALL").val();
			var ingresos=$("#total").val();
			//alert ("uno ="+respuesta+" dos="+ingresos);
			if (respuesta!=ingresos && ingresos!="-1")
			{
				$("#alerta20").html("<b>La cantidad de personas fallecidas no es igual a los registrados");
				$("#alerta20").show();
			}
			else 
			{
				ajaxGuardarHogar(6);
				/*$("#page7").show();
				$("#page6").toggle("slide");		
				$("#hint16").hintOpen("ACTIVIDAD ECON&Oacute;MICA ASOCIADA A LOS HOGARES","Es la actividad comercial, de servicios, industrial o agropecuaria, desarrollada con regularidad bajo la responsabilidad de alg&uacute;n miembro del hogar, que les genere ingresos y que es realizada dentro de la vivienda, en donde se comparten o se destienen algunos 'espacios propios del hogar' con dicha actividad econ&oacute;mica. Los espacios pueden estar o no separados pero no independientes.");			
				$("#hint17").hint("","Las personas que trabajaron en la actividad econ&oacute;mica declarada, pueden pertenecer o no al hogar.");
				//$("html, body").animate({ scrollTop: 0 }, "slow");
				$("html, body").scrollTop(0);*/
			}
		}
	});
	
	
	/* carga la gerilla de fallecidos*/
	$("#agregaFallecidos").bind("click",function(){
		$("#alerta20").hide();
		var sexo=$("#C3F35B_SEXO_FALL").val();
		var edad=$("#C3F35C_EDAD_FALL").val();
		var certificado=$("#C3F35D_CERT_DEFUN").val();
		var combocantidad=$("#C3H35_NRO_FALL").val();
		var error=0;
		var text="";
		var numfallecido=parseInt($("#cantidad").val())+parseInt(1);
		
		if (sexo == "-")
		{
			text =text+"\n - Debe diligenciar el sexo";
			error=1;
		}
		if (edad == "")
		{
			text =text+"\n - Debe diligenciar la edad";
			error=1;
		}
		if (edad > 120)
		{
			text =text+"\n - La edad m\u00e1xima admitida es 120 a\u00f1os";
			$("#C3F35C_EDAD_FALL").val("");
			error=1;
		}
		if (certificado == "-")
		{
			text =text+"\n - Debe indicar si se expidio un certificado de defunci\u00f3n";
			error=1;
		}
		if (error==1)
		{
			alert ("Por favor verifique debe completar la informaci\u00F3n de:\n"+text);
			//return false;
		}
		else
		{
			$.ajax({
				type: "POST",
				url: base_url +"hogar/agregarfallecido",
				data:{'sexo' : sexo,
				'edad' : edad,
				'certificado' : certificado,
				'combocantidad' : combocantidad
				},	
				cache: false,
				success: function(data)
				{
					//alert("yo");
					$("#cantidad").val(numfallecido);
					$("#C3F35B_SEXO_FALL").val("-");
					$("#C3F35C_EDAD_FALL").val("");
					$("#C3F35D_CERT_DEFUN").val("-");
					$("#resultAAdmin").show();
					$("#jqGrid").setGridParam({
						url: base_url +("hogar/busquedaFallecidos"), 
						datatype:'json'
					}).trigger('reloadGrid',[{page:1}]);
					if ($("#cantidad").val() == $("#C3H35_NRO_FALL").val())
					{
						$("#datosFallecido").hide();
					}
					else
					{
						$("#datosFallecido").show();
					}
				},
				error: function(data){
					alert(data);
				}
			});
		}
		
	});
	
	
	
	/*
	 * PANTALLA 7
	 * 
	 */
	
	//Validaciones de la pagina hogar7
	$("#frmPantalla7").validate({
		rules: {
			C3H36_AE_HOG		:	{ required: true },
			C3H36B_AE_REALIZA	:	{ required: true }, 
			C3H36C_AE_QPER		:	{ required: true, 
									  expresion:'(parseInt($("#C3H36C_AE_QPER").val()) == 0)   ||    (parseInt($("#C3H36C_AE_QPER").val()) > 99)'}
			
		},
		messages: {
			C3H36_AE_HOG		:	{ required: "Debe seleccionar una opci&oacute;n" },
			C3H36B_AE_REALIZA	:	{ required: "Debe seleccionar una opci&oacute;n" },
			C3H36C_AE_QPER		:	{ required: "Debe digitar una cantidad", 
										expresion: "Este valor debe ser mayor a cero</b>"}
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
			{		
				case "C3H36_AE_HOG"			:	$("#alerta21").show();	
												$("#alerta21").html(error);
												break;
				case "C3H36B_AE_REALIZA"	:	$("#alerta22").show();	
												$("#alerta22").html(error);
												break;
				case "C3H36C_AE_QPER"	:	$("#alerta23").show();	
												$("#alerta23").html(error);
												break;	
			}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla7").valid()){
				$("#page8").show();
				$("#page7").toggle("slide");	
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla7 input[name='C3H36_AE_HOG']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#actividades").hide();
			$("#espacios").html("<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>"); 
			$("#frmPantalla7 input[name='C3H36B_AE_REALIZA']").removeAttr("checked");
			$("#C3H36C_AE_QPER").val("");
		}
		else 
		{
			$("#actividades").show();
			$("#espacios").html(""); 
			$("#alerta21").hide();
		}
			
	});
	
	$("#frmPantalla7 input[name='C3H36C_AE_QPER']:text").bind("blur",function(){
		var respuesta=$(this).val();
		//alert ("respuesta="+respuesta);
		if (respuesta != "")
		{
			if (respuesta > 0)
			{
				$("#alerta23").hide();
			}
			else 
			{
				$("#alerta23").html("<b>Este valor debe ser mayor a cero</b>");
				$("#alerta23").show();
			}
		}
		else
		{
			$("#alerta23").show();
		}
	});
	
	$("#frmPantalla7 input[name='C3H36B_AE_REALIZA']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta22").hide();
		}
	});
	
		
	
	$("#btnSiguiente8").bind("click",function(){	
		if ($("#frmPantalla7").valid()){
			var opcion = $("#C3H36_AE_HOG:checked").val();
			//var cantidad = $("#C3H36C_AE_QPER").val();
			var error = 0;
			if (opcion==1)
			{
				var seleccion=$("#C3H36B_AE_REALIZA:checked").val();
				var control=$("#C3H36_AE_HOG:checked").val();
				var s = seleccion;
				var fields = s.split(/-/);
				var grupo = fields[0];
				$("#grupo").val(grupo);
				var actividad = fields[1];
				$("#actividad").val(actividad);
				if (seleccion=="0-0" && control==1)
				{
					$("#alerta22").html("<b>Debe seleccionar una actividad");
					$("#alerta22").show();
				}
				else 
				{
					ajaxGuardarHogar(7);
					/*$("#page8").show();
					$("#page7").toggle("slide");		
					$("#hint18").hint("DESPLAZAMIENTO FORZADO","Situaci&oacute;n presentada por toda persona que se ha visto obligada a abandonar su localidad de residencia o actividades econ&oacute;micas habituales. Pues su integridad fisica se ha visto vulnerada como consecuencia del transtorno  dr&aacute;stico del orden p&uacute;blico.");
					$("#hint19").hint("ABANDONO FORZADO DE TIERRAS","Situaci&oacute;n temporal o permanente en la que una persona se ve forzada  a desplazarse y a abandonar sus tierras como consecuencia del transtorno dr&aacute;stico del orden p&uacute;blico.");
					$("#hint20").hint("DESPOJO DE TIERRAS","Acci&oacute;n por medio del cual, aprovech&aacute;ndose de la  situaci&oacute;n de violencia, se priva arbitrariamente de su propiedad a una persona. Para lo cual, se utilizan medios jur&iacute;dicos de forma ilegal u otros delitos. ");
					//$("html, body").animate({ scrollTop: 0 }, "slow");
					$("html, body").scrollTop(0);*/
				}
			}
			else 
			{
				ajaxGuardarHogar(7);
				/*$("#page8").show();
				$("#page7").toggle("slide");		
				$("#hint18").hint("DESPLAZAMIENTO FORZADO","Situaci&oacute;n presentada por toda persona que se ha visto obligada a abandonar su localidad de residencia o actividades econ&oacute;micas habituales. Pues su integridad fisica se ha visto vulnerada como consecuencia del transtorno  dr&aacute;stico del orden p&uacute;blico.");
				$("#hint19").hint("ABANDONO FORZADO DE TIERRAS","Situaci&oacute;n temporal o permanente en la que una persona se ve forzada  a desplazarse y a abandonar sus tierras como consecuencia del transtorno dr&aacute;stico del orden p&uacute;blico.");
				$("#hint20").hint("DESPOJO DE TIERRAS","Acci&oacute;n por medio del cual, aprovech&aacute;ndose de la  situaci&oacute;n de violencia, se priva arbitrariamente de su propiedad a una persona. Para lo cual, se utilizan medios jur&iacute;dicos de forma ilegal u otros delitos. ");
				//$("html, body").animate({ scrollTop: 0 }, "slow");
				$("html, body").scrollTop(0);*/
			}
		}
	});
	
	
	/*
	 * PANTALLA 8
	 * 
	 */
	
	//Validaciones de la pagina hogar8
	$("#frmPantalla8").validate({
		rules: {
			C3H37A_DESPLAFORZ	:	{ required: true },
			C3H37A1_ANIODESPLA  :	{ required: true },
			C3H37A2_RETORNO		:	{ required: true },
			
			C3H37B_DESPLAFORZ	:	{ required: true },
			C3H37B1_ANIODESPLA	:	{ required: true },
			C3H37B2_RETORNO		:	{ required: true },

			C3H37C_DESPLAFORZ	:	{ required: true },
			C3H37C1_ANIODESPLA	:	{ required: true },
			C3H37C2_RETORNO		:	{ required: true },

			
		},
		messages: {
			C3H37A_DESPLAFORZ	: { required: "Debe seleccionar una opci&oacute;n." },
			C3H37A1_ANIODESPLA	: { required: "Debe seleccionar un a&ntilde;o" },
			C3H37A2_RETORNO		: { required: "Debe seleccionar si han retornado a la residencia." },
			C3H37B_DESPLAFORZ	: { required: "Debe seleccionar una opci&oacute;n." },
			C3H37B1_ANIODESPLA	: { required: "Debe seleccionar un a&ntilde;o" },
			C3H37B2_RETORNO		: { required: "Debe seleccionar si han retornado a la residencia." },
			C3H37C_DESPLAFORZ	: { required: "Debe seleccionar una opci&oacute;n." },
			C3H37C1_ANIODESPLA	: { required: "Debe seleccionar un a&ntilde;o" },
			C3H37C2_RETORNO		: { required: "Debe seleccionar si han retornado a la residencia." },
			
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "C3H37A_DESPLAFORZ":	$("#alerta24").show();	
												$("#alerta24").html(error);
												break;
												
					case "C3H37A1_ANIODESPLA":	$("#alerta25").show();	
												$("#alerta25").html(error);
												break;	
												
					case "C3H37A2_RETORNO"	:	$("#alerta26").show();	
												$("#alerta26").html(error);
												break;
												
					case "C3H37B_DESPLAFORZ":	$("#alerta27").show();	
												$("#alerta27").html(error);
												break;
												
					case "C3H37B1_ANIODESPLA":	$("#alerta28").show();	
												$("#alerta28").html(error);
												break;
					
					case "C3H37B2_RETORNO"	:	$("#alerta29").show();	
												$("#alerta29").html(error);
												break;
											
					case "C3H37C_DESPLAFORZ":	$("#alerta30").show();	
												$("#alerta30").html(error);
												break;	
												
					case "C3H37C1_ANIODESPLA":	$("#alerta31").show();	
												$("#alerta31").html(error);
												break;
												
					
					case "C3H37C2_RETORNO"	:	$("#alerta32").show();	
												$("#alerta32").html(error);
												break;
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla8").valid()){
				$("#page1").show();
				$("#page2").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar8 para que oculten el div que despliega los errores

	$("#frmPantalla8 input[name='C3H37A_DESPLAFORZ']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#C3H37A1_ANIODESPLA").val("");
			$("#frmPantalla8 input[name='C3H37A2_RETORNO']").removeAttr("checked");
			$("#desplazado").hide();
			$("#desplazado1").hide();
			$("#alerta25").hide();
			$("#alerta26").hide();
		}
		else 
		{
			$("#desplazado").show();
			$("#desplazado1").show();
			$("#alerta24").hide();
		}
	});
	
	$("#frmPantalla8 select[name=C3H37A1_ANIODESPLA]").bind("change",function(){
		var aniodes=$('#C3H37A1_ANIODESPLA').val();
	
		if (aniodes != "-")
		{
			$("#alerta25").hide();
		}
		else 
		{
			$("#alerta25").show();
		}
	});
	
	$("#frmPantalla8 input[name='C3H37A2_RETORNO']:radio").bind("click",function(){
		
			$("#alerta26").hide();
		
	});
	
	
	$("#frmPantalla8 input[name='C3H37B_DESPLAFORZ']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#C3H37B1_ANIODESPLA").val("");
			$("#frmPantalla8 input[name='C3H37B2_RETORNO']").removeAttr("checked");
			$("#abandono").hide();
			$("#abandono1").hide();
			$("#alerta28").hide();
			$("#alerta29").hide();
		}
		else 
		{
			$("#abandono").show();
			$("#abandono1").show();
			$("#alerta27").hide();
		}
			
	});
	
	$("#frmPantalla8 select[name=C3H37B1_ANIODESPLA]").bind("change",function(){
		var aniobdes=$('#C3H37B1_ANIODESPLA').val();
	
		if (aniobdes != "-")
		{
			$("#alerta28").hide();
		}
		else 
		{
			$("#alerta28").show();
		}
	});
	
	$("#frmPantalla8 input[name='C3H37B2_RETORNO']:radio").bind("click",function(){
		
			$("#alerta29").hide();
		
	});
	
	$("#frmPantalla8 input[name='C3H37C_DESPLAFORZ']:radio").bind("click",function(){
		var respuesta=$(this).val();
		if (respuesta==2)
		{
			$("#C3H37C1_ANIODESPLA").val("");
			$("#frmPantalla8 input[name='C3H37C2_RETORNO']").removeAttr("checked");
			$("#despojo").hide();
			$("#despojo1").hide();
			$("#alerta31").hide();
			$("#alerta32").hide();
		}
		else 
		{
			$("#despojo").show();
			$("#despojo1").show();
			$("#alerta30").hide();
		}
			
	});
	
	$("#frmPantalla8 select[name=C3H37C1_ANIODESPLA]").bind("change",function(){
		var aniocdes=$('#C3H37C1_ANIODESPLA').val();
	
		if (aniocdes != "-")
		{
			$("#alerta31").hide();
		}
		else 
		{
			$("#alerta31").show();
		}
	});
	
	$("#frmPantalla8 input[name='C3H37C2_RETORNO']:radio").bind("click",function(){
		
			$("#alerta32").hide();
		
	});
	
	//Botón de envío del formulario de Hogar 8.
		
	$("#btnSiguiente9").bind("click",function()
	{

		if ($("#frmPantalla8").valid()){
				ajaxGuardarHogar(8);
				/*$("#page9").show();
				$("#page8").toggle("slide");
				$("#hint2").hintOpen("","Incluya aquellos cuartos de los cuales	dispone, aunque sean compartidos con otros hogares.");	
				$("#hint3").hintOpen("","Incluya los cuartos que usa para dormir (descanso nocturno) aunque sean compartidos con otros hogares.");
				//$("html, body").animate({ scrollTop: 0 }, "slow");
				$("html, body").scrollTop(0);*/
			}
	});

	/*
	 * PANTALLA 9
	 * 
	 */
	$("#btnFinalizaHog").bind("click",function(){
		//alert ("esa alerta"+$("#jef").val());
		if (parseInt($("#jef").val()) != 1)
		{
			//alert ("aquiiii");
			$("#alerta33").html("<b>Debe existir un jefe de hogar");
			$("#alerta33").show();
		}
		else {
			ajaxGuardarHogar(9);
		}
	});
	
	$("#masactviva").bind("click",function(){
		var contiene=$("#masactviva").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactviva").show();
			$("#masactviva").val("-");
		}
		else 
		{
			$("#desactviva").hide();
			$("#masactviva").val("+");
		}
	});
	
	$("#masactvivb").bind("click",function(){
		var contiene=$("#masactvivb").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivb").show();
			$("#masactvivb").val("-");
		}
		else 
		{
			$("#desactvivb").hide();
			$("#masactvivb").val("+");
		}
	});
	
	$("#masactvivc").bind("click",function(){
		var contiene=$("#masactvivc").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivc").show();
			$("#masactvivc").val("-");
		}
		else 
		{
			$("#desactvivc").hide();
			$("#masactvivc").val("+");
		}
	});
	
	$("#masactvivd").bind("click",function(){
		var contiene=$("#masactvivd").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivd").show();
			$("#masactvivd").val("-");
		}
		else 
		{
			$("#desactvivd").hide();
			$("#masactvivd").val("+");
		}
	});
	
	$("#masactvive").bind("click",function(){
		var contiene=$("#masactvive").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvive").show();
			$("#masactvive").val("-");
		}
		else 
		{
			$("#desactvive").hide();
			$("#masactvive").val("+");
		}
	});
	
	$("#masactvivf").bind("click",function(){
		var contiene=$("#masactvivf").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivf").show();
			$("#masactvivf").val("-");
		}
		else 
		{
			$("#desactvivf").hide();
			$("#masactvivf").val("+");
		}
	});
	
	$("#masactvivg").bind("click",function(){
		var contiene=$("#masactvivg").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivg").show();
			$("#masactvivg").val("-");
		}
		else 
		{
			$("#desactvivg").hide();
			$("#masactvivg").val("+");
		}
	});
	
	$("#masactvivh").bind("click",function(){
		var contiene=$("#masactvivh").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivh").show();
			$("#masactvivh").val("-");
		}
		else 
		{
			$("#desactvivh").hide();
			$("#masactvivh").val("+");
		}
	});
	
	$("#masactvivi").bind("click",function(){
		var contiene=$("#masactvivi").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivi").show();
			$("#masactvivi").val("-");
		}
		else 
		{
			$("#desactvivi").hide();
			$("#masactvivi").val("+");
		}
	});
	
	$("#masactvivj").bind("click",function(){
		var contiene=$("#masactvivj").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivj").show();
			$("#masactvivj").val("-");
		}
		else 
		{
			$("#desactvivj").hide();
			$("#masactvivj").val("+");
		}
	});
	
	$("#masactvivk").bind("click",function(){
		var contiene=$("#masactvivk").val();
		//alert (contiene);
		if (contiene=="+")
		{
			$("#desactvivk").show();
			$("#masactvivk").val("-");
		}
		else 
		{
			$("#desactvivk").hide();
			$("#masactvivk").val("+");
		}
	});
	
	$("#btnSiguiente10").bind("click",function(){		
		var url = "http://192.168.1.200/dimpe/cnpv";    
		$(location).attr("href",url);
	});

	
});


function validaTexto (valor)
{
	var error= false;
	var texto = /^[a-zA-Z ÁÉÍÓÚÑ," "]+$/.test(valor);
	if (texto == false )
		error= true;	
	return error;	
}

function validaNumeros (valor)
{
	var error= false;
	var texto = /^[0-9]+$/.test(valor);
	if (texto == false )
		error= true;	
	return error;	
}

function funcionesCargar()
{
	//alert ("aaaa");
	cargarCombos($("#C4P43_TIPO_DOC").val(), "C4P43_TIPO_DOC", false);
	cargarCombos($("#C4P45_SEXO").val(), "C4P45_SEXO", false);
	cargarCombos($("#C4P49_PARENTESCO").val(), "C4P49_PARENTESCO", false);
	/*DeshabLimpiar (new Array('H31_PEREXT_OT','H31_PEREXT_CANADA','H31_PEREXT_ECUADOR','H31_PEREXT_ESPANA','H31_PEREXT_EEUU','H31_PEREXT_VEN','H31_PEREXT_OTCUAL') , 'D'); 	
	changeFHogar();*/		
	
	}

function funcionesValidar(datos, nombres)
{
	var Existej=$("#jef").val();
	var texto ="";
	var errorRequerido = errorTexto = errorRequerido = errorCE = false;
	/*var dato=datos.ID;
	alert ("")*/
	if (datos.C4P42A_1ER_NOMBRE!="")
	{	
		/*var dato = Mayuscula(datos.C4P42A_1ER_NOMBRE);
		alert ("retornado"+dato);
		$("#C4P42A_1ER_NOMBRE").val(dato);*/
		value = datos.C4P42A_1ER_NOMBRE;
		errorTexto = validaTexto (value);
		if (errorTexto == true)
		{
			texto =texto+"<br> - En el primer nombre por favor digite solo texto";
		}
	}
	else 
	{
		texto =texto+"<br> - El primer nombre: Campo obligatorio";
	}
	
	if (datos.C3R38B2_2NOMBRE!="")
	{
		value = datos.C3R38B2_2NOMBRE;
		errorTexto = validaTexto (value);
		if (errorTexto == true)
		{
			texto =texto+"<br> - En el segundo nombre por favor digite solo texto";
		}
	}
	if (datos.C4P42B_1ER_APELLIDO!="")
	{
		value = datos.C4P42B_1ER_APELLIDO;
		errorTexto = validaTexto (value);
		if (errorTexto == true)
		{
			texto =texto+"<br> - En el primer apellido por favor digite solo texto";
		}
	}
	else 
	{
		texto =texto+"<br> - El primer apellido: Campo obligatorio";
	}
	
	if (datos.C3R38C2_2APELLIDO!="")
	{
		value = datos.C3R38C2_2APELLIDO;
		errorTexto = validaTexto (value);
		if (errorTexto == true)
		{
			texto =texto+"<br> - En el segundo apellido por favor digite solo texto";
		}
	}
	
	if (Existej==1 && datos.C4P49_PARENTESCO!=1)
	{
		value = datos.C4P49_PARENTESCO;
		
		if (value == 1)
		{
			texto =texto+"<br> - No puede tener dos jefes de hogar";
		}
		
	}
	
	if (datos.C4P49_PARENTESCO==1 && datos.C4P47_EDAD<10)
	{
		texto =texto+"<br> - Por favor verifique dado que no puede ser jefe(a) de hogar si es menor de 10 a&ntilde;os";
	}
	
	if (datos.C4P49_PARENTESCO=="")
	{
		texto =texto+"<br> - El Jefe: Campo obligatorio";
	}	
	if (datos.C4P43_TIPO_DOC=="")
	{
		texto =texto+"<br> - El Tipo Doc: Campo obligatorio";
	}	
	if (datos.C4P43_TIPO_DOC!=5)
	{
		value = datos.C4P44_NRO_DOC;
		longitud = datos.C4P44_NRO_DOC.length;
		//alert ("lon="+longitud);
		errorTexto = validaTexto (value);
		errorCE = validaCE (value);
		if (value == "")
		{
			texto =texto+"<br> - N&uacute;mero Documento: Campo obligatorio";
		}
		else if (datos.C4P43_TIPO_DOC == 4 && errorCE != 0)
		{
			
			if (errorCE == 2)
			{
				texto =texto + "<br> - Su n&uacute;mero de documento debe tener al menos un n&uacute;mero";;
			}
			else 
			{
				texto=texto+"<br> - Su n&uacute;mero de documento debe tener al menos una letra";
			}
		}
		else if (datos.C4P43_TIPO_DOC == 4 && errorCE == 1)
		{
			
			texto =texto + "<br> - Su n&uacute;mero de documento debe tener al menos un n&uacute;mero";;
		}
		else if (datos.C4P43_TIPO_DOC != 4 && (validaNumeros(datos.C4P44_NRO_DOC) == true))
		{
			texto =texto+"<br> - El n&uacute;mero de documento debe contener solo n&uacute;meros";
		}
		
		//VALIDACION DE EDAD CON RESPECTO A TIPO DOCUMENTO
		
		if (datos.C4P43_TIPO_DOC==1 && datos.C4P47_EDAD>6)
		{
			texto =texto+"<br> - No puede seleccionar registro civil porque es mayor de 6 a&ntilde;os";
		}
		
		if (datos.C4P43_TIPO_DOC==2 && (datos.C4P47_EDAD<6 || datos.C4P47_EDAD>19))
		{
			texto =texto+"<br> - No puede seleccionar tarjeta de identidad porque su edad no es acorde";
		}
		
		if ((datos.C4P43_TIPO_DOC==3 || datos.C4P43_TIPO_DOC==4) && (datos.C4P47_EDAD<18))
		{
			texto =texto+"<br> - No puede seleccionar este tipo de documento porque su edad no es acorde";
		}
		// HASTA AQUI 
		
		if (datos.C4P43_TIPO_DOC==1 && (longitud<10 || longitud>11))
		{
			texto =texto+"<br> - El registro civil esta incompleto, el rango es de 10 a 11 digitos";
		}
		if (datos.C4P43_TIPO_DOC==2 && (longitud<5 || longitud>11))
		{
			texto =texto+"<br> - La tarjeta de identidad esta incompleta, el rango es de 5 a 11 digitos";
		}
		if ((datos.C4P43_TIPO_DOC==3 || datos.C4P43_TIPO_DOC==4)  && (longitud < 5  || longitud > 11))
		{
			texto =texto+"<br> - El n&uacute;mero de documento esta incompleto, el rango es de 5 a 11 digitos";
		}
			
	}
	
	
	if (datos.C4P47_EDAD=="")
	{
		texto =texto+"<br> - Los a&ntilde;os cumplidos: Campo obligatorio";
	}
	else if (validaNumeros(datos.C4P47_EDAD) == true)
	{
		texto =texto+"<br> - Los a&ntilde;os cumplidos deben contener solo n&uacute;meros";
	}

	if (datos.C4P45_SEXO=="")
	{
		texto =texto+"<br> - El sexo: Campo obligatorio";
	}
	
	
	if (datos.C4P47_EDAD < 0 || datos.C4P47_EDAD > 120)
	{
		texto =texto+"<br> - Verifique el rango de edad es de 0 a 120 a&ntilde;os";
		
	}
	
	return texto;
}


function validaCE (valor)
{
	var error= false;	
	var pswd = valor;
	var texto="";
	var cuenta=0;

	//validamos la letra mayuscula
	if ( pswd.match(/[A-Z]/) ) {
	}
	else
	{
	  cuenta=1;
	} 
	//validamos el numero
	if ( pswd.match(/\d/) ) {
	}
	else
	{
	  cuenta=2;
	}
	return cuenta;
	
}

function Mayu (valor, nombre)
{
	//alert ("aaaaa"+valor);
	var inicial = valor;	
	var enmayus = inicial.toUpperCase();
	$("#"+nombre).val(enmayus);
	//"#"+nombre.val(enmayus);
	//alert ("en la funcion may="+enmayus);
	
	
	
	//return true;
	
}



function htmlObj( cadena ){
	return document.getElementById( cadena );
}
//========================================  Funcion para cargar combos ==============================

function cargarCombos(padre, hijo, setselected) 
{
	//
	var current = $("#jqGridP").jqGrid('getRowData',$("#jqGridP")[0].p.selrow)[hijo];
	var jefextiste= $("#jef").val();
	//alert ("bbb"+current);
	var aCrear = "#"+hijo;	
	var estado = $(aCrear).attr("disabled");
	if (estado===undefined)
			estado=false;
	$(aCrear).html("<option value=''>Cargando...</option>")
					 .attr("disabled", "disabled");
	
	var ruta = base_url +"hogar/cargatipodoc?padre="+padre+"&aCrear="+hijo;	

	$.ajax({
			url: ruta,
			type: "GET",
			async: true,
			success: function (respCombo)
			 {
				 /*alert("respuestacombo="+respCombo);
				 alert(aCrear);*/
				if (estado==false)
					$(aCrear).removeAttr("disabled");
			
				/*alert ("hijo="+hijo);
				alert ("jefextiste="+jefextiste);
				alert ("current="+current);*/
				
				$(aCrear).html(respCombo);	
				$(aCrear).val(current);
				
				if (current)
				{
					if (hijo=="C4P49_PARENTESCO" && jefextiste>=1 && current==99)
					{
						 $(aCrear).attr("disabled", "disabled");
					}
				}
				else 
				{
					if (hijo=="C4P49_PARENTESCO" && jefextiste>=1 )
					{
						$(aCrear).val('99'); 
						$(aCrear).attr("disabled", "disabled");
					}
				}
			}
	});
}



function ajaxGuardarHogar(index){
	//alert ("entro");
	$.ajax({
		type: "POST",
		url: base_url + "hogar/hogar/guardarHogar",
		
		data: $("#frmPantalla"+index).serialize(),			
		dataType: "html",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			switch(index){
				case 1: //Guardar preguntas formulario 1
						$("#page2").show();
						$("#page1").toggle("slide");
									
						$("#hint2").hintOpen("","Incluya aquellos cuartos de los cuales	dispone, aunque sean compartidos con otros hogares.");	
						$("#hint3").hintOpen("","Incluya los cuartos que usa para dormir (descanso nocturno) aunque sean compartidos con otros hogares.");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);
						break;
				case 2: //Guardar preguntas formulario 2
						$("#page3").show();
						$("#page2").toggle("slide");	
						$("#hint5").hint("ALJIBE -  JAG&Uuml;EY O BARRENO","Aljibe es un hoyo profundo en la tierra que sirve como dep&oacute;sito de agua lluvia o de nacimiento y que tiene una  protecci&oacute;n.                                                                                                              <br> <br>Jag&uuml;ey o barreno es un hoyo superficial excavado para almacenar agua lluvia, donde el agua recolectada no circula. Es frecuente encontrarlo en la Costa Atl&aacute;ntica y en los Llanos Orientales.");
						$("#hint6").hint("","Esta pregunta se refiere a la separaci&oacute;n de los residuos s&oacute;lidos del hogar, m&aacute;s no al reciclaje de estos.<br><b>Residuos Recicables</b> - Reutilizables (Cart&oacute;n, papel, botellas, telas entre otros)<br><b>Residuos Ordinarios</b> - (Restos de comida. Residuos sanitarios, entre otros).");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);	
						break;
				case 3: //Guardar preguntas formulario 3
						$("#page4").show();
						$("#page3").toggle("slide");
						$("#hint7").hintOpen("","Esta pregunta hace referencia al ACCESO de las tecnolog&iacute;as en su vivienda, es decir, que tenga la posibilidad de utilizarlos.");
						$("#hint8").hint("Se&ntilde;al de radio","Hace referencia a la posibilidad de escuchar la señal de radio en su vivienda de manera autónoma y por cualquier medio.");
						$("#hint9").hint("Se&ntilde;al de televisi&oacute;n abierta","Es la se&ntilde;al de televisi&oacute;n gratuira, por ejemplo, la del canal Caracol, RCN, Canal uno, Telecaribe, Telepacifico, Teleantioquia, Canal Tro, Teleislas.");
						$("#hint10").hint("Se&ntilde;al de televisi&oacute;n por suscripci&oacute;n"," Es aquel servicio que se recibe a trav&eacute;s de la suscripci&oacute;n de un contrato con alguna empresa que suministra se&ntilde;ales de canales no visibles a trav&eacute;s de antenas convencionales.");
						$("#hint11").hint("Internet fijo","Es el acceso a Internet a trav&eacute;s de un cable.");
						$("#hint12").hint("Internet m&oacute;vil","Es el acceso a Internet a trav&eacute;s de wifi, planes de datos y m&oacute;dem inal&aacute;mbrico.");
						$("html, body").scrollTop(0);
						break;
				case 4: //Guardar preguntas formulario 4
						$("#page5").show();
						$("#page4").toggle("slide");		
						$("#hint13").hintOpen("IMPORTANTE","Tenga en cuenta: <br> * Al momento de  irse, la persona ten&iacute;a que hacer parte del <span title='Tenga en cuenta que hogar es una persona o grupo de personas que: \n- pueden ser parientes o no, \n- ocupan la totalidad o parte de la vivienda \n- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n y, \n- generalmente, comparten las comidas.'><u> hogar</u></span>, es decir, que en este momento era <span title='Las personas que componen un hogar deben ser residentes habituales, es decir, que habitan la mayor parte del tiempo en la vivienda, aunque en el momento del diligenciamiento se encuentran ausentes temporales	'><u>residente habitual</u></span>. * Hoy debe residir en el exterior.");			
						$("#hint14").hint("HOGAR","Tenga en cuenta que hogar es una persona o grupo de personas que: <br> - Pueden ser parientes o no, <br> - ocupan la totalidad o parte de la vivienda, <br>- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;muny <br> - generalmente, comparten las comidas.");
						$("#hint10").hint("Letrina","Es un pozo o hueco subterr\u00e1neo para la acumulaci\u00f3n y eliminaci\u00f3n de excrementos en el cual no interviene un sistema de agua corriente.");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);
						break;
				case 5: //Guardar preguntas formulario 5
						$("#page6").show();
						$("#page5").toggle("slide");		
						$("#hint13").hintOpen("IMPORTANTE","Tenga en cuenta: <br> * Al momento de  irse, la persona ten&iacute;a que hacer parte del hogar.<br> * Hoy debe residir en el exterior.");			
						$("#hint14").hint("HOGAR","Tenga en cuenta que hogar es una persona o grupo de personas que: <br> - Pueden ser parientes o no, <br> - ocupan la totalidad o parte de la vivienda, <br>- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n y <br> - generalmente, comparten las comidas.");
						$("#hint15").hintOpen("IMPORTANTE","Al momento de fallecer, esta(s) personas ten&iacute;an que hacer parte de su <span title='Tenga en cuenta que hogar es una persona o grupo de personas que: \n- Pueden ser parientes o no, \n- ocupan la totalidad o parte de la vivienda, \n- atienden necesidades b&aacute;sicas con cargo a un presupuesto com&uacute;n y \n- generalmente, comparten las comidas.'><u>hogar</u></span>.");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);	
						break;
				case 6: //Guardar preguntas formulario 6
						$("#page7").show();
						$("#page6").toggle("slide");		
						$("#hint16").hintOpen("ACTIVIDAD ECON&Oacute;MICA ASOCIADA A LOS HOGARES","Es la actividad comercial, de servicios, industrial o agropecuaria, desarrollada con regularidad bajo la responsabilidad de alg&uacute;n miembro del hogar, que les genere ingresos y que es realizada dentro de la vivienda, en donde se comparten o se destinen algunos 'espacios propios del hogar' con dicha actividad econ&oacute;mica. Los espacios pueden estar o no separados pero no independientes.");			
						$("#hint17").hint("","Las personas que trabajaron en la actividad econ&oacute;mica declarada, pueden pertenecer o no al hogar.");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);
						break;
				case 7: //Guardar preguntas formulario 7
						$("#page8").show();
						$("#page7").toggle("slide");		
						$("#hint18").hint("DESPLAZAMIENTO FORZADO","Situaci&oacute;n presentada por toda persona que se ha visto obligada a abandonar su localidad de residencia o actividades econ&oacute;micas habituales. Pues su integridad fisica se ha visto vulnerada como consecuencia del transtorno  dr&aacute;stico del orden p&uacute;blico.");
						$("#hint19").hint("ABANDONO FORZADO DE TIERRAS","Situaci&oacute;n temporal o permanente en la que una persona se ve forzada  a desplazarse y a abandonar sus tierras como consecuencia del transtorno dr&aacute;stico del orden p&uacute;blico.");
						$("#hint20").hint("DESPOJO DE TIERRAS","Acci&oacute;n por medio del cual, aprovech&aacute;ndose de la  situaci&oacute;n de violencia, se priva arbitrariamente de su propiedad a una persona. Para lo cual, se utilizan medios jur&iacute;dicos de forma ilegal u otros delitos. ");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);
						break;
				case 8: //Guardar preguntas formulario 8
						$("#page9").show();
						$("#page8").toggle("slide");
						//$("html, body").animate({ scrollTop: 0 }, "slow");
						$("html, body").scrollTop(0);
						break;
				case 9: //Guardar preguntas formulario 9
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
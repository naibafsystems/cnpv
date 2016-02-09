$(function(){
	
	//Si el navegador es Internet Explorer, se redirecciona al módulo de Internet Explorer
	redirectBrowser();
	
	$('[data-toggle="tabajax"]').click(function(e) {
        var $this = $(this),
        loadurl = $this.attr('href'),
        targ = $this.attr('data-target');
        $.get(loadurl, function(data) {
                 $(targ).html(data);
        });
        $this.tab('show');
        return false;
	});
	
	
	
	$(document).ready(function(){
	      $('#txtcorreo1').bind("cut copy paste",function(e) {
	          e.preventDefault();
	      });
	      $('#txtcorreo').bind("cut copy paste",function(e) {
	          e.preventDefault();
	      });
	    });
	
	//Esconder el div que muestra los errores del login.
	$("#page1").hide();
	$("#pageno1").hide();
	$("#txtnumdocumentoce").hide();
	$("#txtnumdocumentoreg").hide();
	$("#txtnumdocumentotar").hide();
	$("#txtnumdocumentocc").bloquearTexto().maxlength(11).minlength(5);
	$("#txtnumdocumentoce").maxlength(11).convertirMayuscula().minlength(5);
	$("#txtnumdocumentoreg").bloquearTexto().maxlength(11).minlength(11);
	$("#txtnumdocumentotar").bloquearTexto().maxlength(11).minlength(11);
	$("#txtnombreuno").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios();
	$("#txtnombredos").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios();
	$("#txtapellidouno").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios();
	$("#txtapellidodos").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios();
	$("#txtTelF").bloquearTexto().maxlength(7).minlength(7);
	$("#txtTelM").bloquearTexto().maxlength(10).minlength(10);
	$("#acepto1a").hide();
	$("#divtxttipodto").hide();
	
	$("#alerta1").hide();
	$("#alerta2").hide();
	$("#alerta3").hide();
	$("#alerta4").hide();
	$("#alerta5").hide();
	$("#alerta6").hide();
	$("#alerta7").hide();
	$("#alerta8").hide();
	$("#alerta9").hide();
	$("#alerta10").hide();
	$("#alerta11").hide();
	$("#alerta12").hide();
	$("#alerta13").hide();
	$("#alerta14").hide();
	$("#alerta15").hide();
	$("#alerta16").hide();
	$("#alerta17").hide();
	$("#alerta18").hide();
	$("#alerta19").hide();
	$("#alerta20").hide();
	$("#alerta33").hide();
	
	
	$("#pes2").addClass('disabledTab');
	$("#pes3").addClass('disabledTab');
	$("#pes4").addClass('disabledTab');
	
	$("#local").hide();
	$("#poblado").hide();
	$("#etnica").hide();
	$("#resguardo").hide();
	$("#comunidadnegra").hide();
	$("#resgterri").hide();
	$("#nombrevere").hide();

	/**
    * MUESTRA DOCUMENTO DE IDENTIDAD 
    * @author Angela Liliana Rodriguez Mahecha
    * @since  Julio 09 / 2015
    */
	$("#txttipodto").change(function()
	{
		var documento= $("#txttipodto").val();
		//alert ("aqui"+documento);
		
		if (documento==3){
			$("#txtnumdocumentocc").show();
			$("#txtnumdocumentoce").hide();
			$("#txtnumdocumentotar").hide();
			$("#txtnumdocumentoreg").hide();
			
			$("#txtnumdocumentoce").val("");
			$("#txtnumdocumentotar").val("");
			$("#txtnumdocumentoreg").val("");
			
			$("#txtnumdocumentoce").removeAttr("required");
			$("#txtnumdocumentotar").removeAttr("required");
			$("#txtnumdocumentoreg").removeAttr("required");
			
			$("#divtxttipodto").hide();
			$("#txttipodto2").val("-");
		}
		else if (documento==4)
		{
			$("#txtnumdocumentoce").show();
			$("#txtnumdocumentocc").hide();
			$("#txtnumdocumentotar").hide();
			$("#txtnumdocumentoreg").hide();
			
			
			$("#txtnumdocumentocc").removeAttr("required");
			$("#txtnumdocumentotar").removeAttr("required");
			$("#txtnumdocumentoreg").removeAttr("required");
			
			$("#txtnumdocumentocc").val("");
			$("#txtnumdocumentotar").val("");
			$("#txtnumdocumentoreg").val("");
			
			$("#divtxttipodto").hide();
			$("#txttipodto2").val("-");
		}
		else if (documento==99)
		{
			$("#txtnumdocumentocc").hide();
			$("#txtnumdocumentoce").hide();
			$("#txtnumdocumentocc").val("");
			$("#txtnumdocumentoce").val("");
			$("#divtxttipodto").show();
		}
	});
	
	/**
	    * MUESTRA DOCUMENTO DE IDENTIDAD 
	    * @author Angela Liliana Rodriguez Mahecha
	    * @since  Julio 09 / 2015
	    */
		$("#txttipodto2").change(function()
		{
			var documento2= $("#txttipodto2").val();
			//alert ("aqui"+documento);
			
			if (documento2==1){
				$("#txtnumdocumentoreg").show();
				$("#txtnumdocumentocc").hide();
				$("#txtnumdocumentoce").hide();
				$("#txtnumdocumentotar").hide();
				
				$("#txtnumdocumentoce").val("");
				$("#txtnumdocumentocc").val("");
				$("#txtnumdocumentotar").val("");
				
				$("#txtnumdocumentoce").removeAttr("required");
				$("#txtnumdocumentocc").removeAttr("required");
				$("#txtnumdocumentotar").removeAttr("required");
				
			}
			else if (documento2==2)
			{
				$("#txtnumdocumentotar").show();
				$("#txtnumdocumentoreg").hide();
				$("#txtnumdocumentocc").hide();
				$("#txtnumdocumentoce").hide();
				
				
				$("#txtnumdocumentoce").val("");
				$("#txtnumdocumentocc").val("");
				$("#txtnumdocumentoreg").val("");
				
				$("#txtnumdocumentoce").removeAttr("required");
				$("#txtnumdocumentocc").removeAttr("required");
				$("#txtnumdocumentoreg").removeAttr("required");
			}
		});
	
	$("#Acepto").bind("click",function(){
		$("#page1").show();
		$("#pageter").hide();
		$("#txtnombreuno").focus();
	});
	
	$("#noacepta").bind("click",function(){
		$("#pageno1").show();
		$("#pageter").hide();
		$("html, body").scrollTop(0);
	});
	
	$("#btnCrearCancelar, #btnCrearCancelar1").bind("click",function(){
		$(location).attr("href",base_url+"registrese");
	});
	
	
	/**
	    * COMBO ANIDADO DEL MUNICIPIO.
	    * @author Angela Liliana Rodriguez Mahecha
	    * @since  Julio 09 / 2015
	    */
		$("#Departamento").change(function()
		{
			var coddepto= $("#Departamento").val();
			//alert ("aqui"+base_url);
			if (coddepto>0 && coddepto!="")
			{
				$.ajax
				({
					type: "POST",
					//url: "http://localhost/plantillaCI/demo/login/busca",
					url: base_url +"registrese/registrese/busca",
					//url: "http://localhost/plantillaCI/demo/index.php/login/busca",
					data:{'coddepto' : coddepto},
					cache: false,
					success: function(data)
					{
						//alert("yo");
						$("#munic").html(data);
					}
				});
			}
		});
	
	/*
	 * NO ACEPTA
	 * 
	 * 
	 * 
	 * 
	 */
	$("#frmPantalla1").validate({
		rules: {
			radioOpcion:  { required: true }
		},
		messages: {
			radioOpcion: { required: "Debe seleccionar una de las opciones." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "radioOpcion":	$("#alerta1").show();	
										$("#alerta1").html(error);
										break;	
				}
		},
		
		submitHandler: function(form) {			
			if ($("#frmPantalla1").valid()){
				$("#pageter").show();
				$("#pageno1").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	$("#frmPantalla1 input[name='radioOpcion']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta1").hide();
		}
	});
	
	
	$("#guardanoacepto").bind("click",function(){
		//alert ("daniel");
		var verifica=0;
		if ($("#frmPantalla1").valid()){
			//alert ("okiii");
			if($("#radioOpcion:checked").val()=='5' && $("#txtObs").val()=='')
			{
				$("#alerta1").html("Debe digitar cual otra raz&oacute;n.");
				$("#alerta1").show();
				verifica=1;
				
			}
			if (verifica==0)
			{
				ajaxGuardarRegistrese(1);
			}	
		}
	});
	
	
	/*
	 * PANTALLA PESTAÑA 1
	 */
	$("#frmPantalla2").validate({
		
		rules: {
			txtnombreuno		:	{	required	:	true },
			txtapellidouno		:	{	required	:	true },
			dia_nac				:	{	comboBox	:	'-' },
			mes_nac				:	{	comboBox	:	'-' },
			ano_nac				:	{	comboBox	:	'-' },
			txtsexo				:	{	comboBox	:	'-' },
			txttipodto			:	{	comboBox	:	'-' },
			txtnumdocumentocc	:	{	required	:	true },
			txtnumdocumentoce	:	{	required	:	true },
			txtnumdocumentotar	:	{	required	:	true },
			txtnumdocumentoreg	:	{	required	:	true },
			txtcorreo			:	{	required	:	true ,
										email		:	true},
			txtcorreo1			:	{	required	:	true,
				 						email		:	true},
			txtcontras			:	{	required	:	true },
			txtcontras2			:	{	required	:	true }
			
		},
		messages: {
			txtnombreuno		: 	{	required	:	"Debe digitar su primer nombre." },
			txtapellidouno		:	{	required	:	"Debe digitar su primer apellido." },
			dia_nac				:	{	comboBox	:	"Debe especificar el d\u00eda de nacimiento." },
			mes_nac				:	{	comboBox	:	"Debe especificar el mes de nacimiento." },
			ano_nac				:	{	comboBox	:	"Debe especificar el a\u00f1o de nacimiento." },
			txtsexo				:	{	comboBox	:	"Debe especificar el sexo." },
			txttipodto			:	{	comboBox	:	"Debe seleccionar su tipo de documento." },
			txtnumdocumentocc	:	{	required	:	"Debe digitar su n&uacute;mero de documento." },
			txtnumdocumentoce	:	{	required	:	"Debe digitar su n&uacute;mero de documento." },
			txtnumdocumentotar	:	{	required	:	"Debe digitar su n&uacute;mero de documento." },
			txtnumdocumentoreg	:	{	required	:	"Debe digitar su n&uacute;mero de documento." },
			txtcorreo			:	{	required	:	"Debe digitar su correo electr&oacute;nico.", 
										email		:	"No es una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida"},
			txtcorreo1			:	{	required	:	"Debe confirmar su correo electronico." , 
										email		:	"No es una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida"},
			txtcontras			:	{	required	:	"Debe digitar su contraseña." },
			txtcontras2			:	{	required	:	"Debe confirmar su contraseña." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "txtnombreuno"		:	$("#alerta2").show();	
												$("#alerta2").html(error);
												break;	
					
					case "txtapellidouno"	:	$("#alerta3").show();	
												$("#alerta3").html(error);
												break;	
					case "dia_nac"			:	$("#alerta17").show();	
												$("#alerta17").html(error);
												break;
					case "mes_nac"			:	$("#alerta18").show();	
												$("#alerta18").html(error);
												break;
					case "ano_nac"			:	$("#alerta19").show();	
												$("#alerta19").html(error);
												break;
					case "txtsexo"			:	$("#alerta20").show();	
												$("#alerta20").html(error);
												break;
					case "txttipodto"		:	$("#alerta4").show();	
												$("#alerta4").html(error);
												break;	

					case "txtnumdocumentocc":	$("#alerta5").show();	
												$("#alerta5").html(error);
												break;
					case "txtnumdocumentoce":	$("#alerta5").show();	
												$("#alerta5").html(error);
												break;
					case "txtnumdocumentotar":	$("#alerta5").show();	
												$("#alerta5").html(error);
												break;
					case "txtnumdocumentoreg":	$("#alerta5").show();	
												$("#alerta5").html(error);
												break;
												
					case "txtcorreo"		:	$("#alerta6").show();	
												$("#alerta6").html(error);
												break;	

					case "txtcorreo1"		:	$("#alerta7").show();	
												$("#alerta7").html(error);
												break;
					case "txtcontras"		:	$("#alerta8").show();	
												$("#alerta8").html(error);
												break;	

					case "txtcontras2"		:	$("#alerta9").show();	
												$("#alerta9").html(error);
												break;
				
				}
		},
		
		submitHandler: function(form) {
			if ($("#frmPantalla2").valid()){
				$("#pageter").show();
				$("#pageno1").toggle("slide");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de hogar1 para que oculten el div que despliega los errores
	/*$("#frmPantalla2 input[name='radioOpcion']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta1").hide();
		}
	});*/
	
	$("#frmPantalla2 input:text[name=txtnombreuno]").bind("keyup",function(){
		var valorcampo=$('#txtnombreuno').val();
		if (valorcampo != "" ){
			$("#alerta2").hide();
		}
		else 
		{
			$("#alerta2").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtapellidouno]").bind("keyup",function(){
		var valorcampo=$('#txtapellidouno').val();
		if (valorcampo != "" ){
			$("#alerta3").hide();
		}
		else 
		{
			$("#alerta3").show();
		}
	});
	
	$("#frmPantalla2 select[name=dia_nac]").bind("change",function(){
		var valordia=$('#dia_nac').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta17").hide();
		}
		else 
		{
			$("#alerta17").show();
		}
	});
	
	$("#frmPantalla2 select[name=mes_nac]").bind("change",function(){
		var valordia=$('#mes_nac').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta18").hide();
		}
		else 
		{
			$("#alerta18").show();
		}
	});
	
	$("#frmPantalla2 select[name=ano_nac]").bind("change",function(){
		var valordia=$('#ano_nac').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta19").hide();
		}
		else 
		{
			$("#alerta19").show();
		}
	});
	
	$("#frmPantalla2 select[name=txtsexo]").bind("change",function(){
		var valordia=$('#txtsexo').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta20").hide();
		}
		else 
		{
			$("#alerta20").show();
		}
	});
	
	$("#frmPantalla2 select[name=txttipodto]").bind("change",function(){
		var valordia=$('#txttipodto').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta4").hide();
		}
		else 
		{
			$("#alerta4").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtnumdocumentocc]").bind("keyup",function(){
		var valorcampo=$('#txtnumdocumentocc').val();
		if (valorcampo != "" ){
			$("#alerta5").hide();
		}
		else 
		{
			$("#alerta5").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtnumdocumentoce]").bind("keyup",function(){
		var valorcampo=$('#txtnumdocumentoce').val();
		if (valorcampo != "" ){
			$("#alerta5").hide();
		}
		else 
		{
			$("#alerta5").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtnumdocumentoreg]").bind("keyup",function(){
		var valorcampo=$('#txtnumdocumentoreg').val();
		if (valorcampo != "" ){
			$("#alerta5").hide();
		}
		else 
		{
			$("#alerta5").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtnumdocumentotar]").bind("keyup",function(){
		var valorcampo=$('#txtnumdocumentotar').val();
		if (valorcampo != "" ){
			$("#alerta5").hide();
		}
		else 
		{
			$("#alerta5").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtcorreo]").bind("keyup",function(){
		var valorcampo=$('#txtcorreo').val();
		if (valorcampo != "" ){
			$("#alerta6").hide();
		}
		else 
		{
			$("#alerta6").html("Debe digitar su correo electr&oacute;nico");
			$("#alerta6").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtcorreo1]").bind("keyup",function(){
		var valorcampo=$('#txtcorreo1').val();
		if (valorcampo != "" ){
			$("#alerta7").hide();
		}
		else 
		{
			$("#alerta7").show();
		}
	});
	
	
	$("#txtcorreo").blur(function(){
		var email=$("#txtcorreo").val();
		$.ajax({
			type: "POST",
			url: base_url +"registrese/registrese/buscamail",
			data:{'email' : email},
			cache: false,
			success: function(data)
			{
				//alert ("respuesta"+data);
				if (data=="siexiste")
				{
					alert("Este correo ya se encuentra almacenado en nuestra base de datos, por favor ingrese otro.");
					$("#txtcorreo").val("");
				}
				
			},
			error: function(data){
				alert("Falla en el sistema, comuniquese con el administrador");
			}
		});
	});
	
	
	
	
	$("#txtcontras2").keyup(function(){
		var txtcontras2=$("#txtcontras2").val();
		if (txtcontras2!="")
		{
			$("#alerta9").hide();
		}
		else
		{
			$("#alerta9").show();
		}
	});
	$("#txtcontras").keyup(function(){
		var txtcontras=$("#txtcontras").val();
		if (txtcontras!="")
		{
			$("#alerta8").hide();
		}
		else
		{
			$("#alerta8").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtTelM]").bind("blur",function(){
		
		var telmovil=$("#txtTelM").val();
		var primero = telmovil.substring(0,1);
		//alert ("telmovil="+telmovil+"primero="+primero+"---");
		if ((telmovil>0 ||telmovil!="") && (primero==3))
		{
			$("#alerta11").hide();
		}
		else 
		{
			$("#alerta11").show();
		}
	});
	
	$("#frmPantalla2 input:text[name=txtTelF]").bind("blur",function(){
		
		var telfijo=$("#txtTelF").val();
		var telmovil=$("#txtTelM").val();
		//alert ("telmovil="+telmovil+"telfijo="+telfijo+"---");
		if ((telmovil>0 ||telmovil!="") || (telfijo>0 ||telfijo!="" ) )
		{
			$("#alerta10").hide();
		}
		else 
		{
			$("#alerta10").show();
		}
	});
	
	$("#frmPantalla2 select[name=txtindicativo]").bind("change",function(){
		var valordia=$('#txtindicativo').val();
		//alert("valordia"+valordia);
		if (valordia > 0){
			$("#alerta12").hide();
		}
		else 
		{
			$("#alerta12").show();
		}
	});
	
	$("#acepto1").bind("click",function(){
		if ($("#frmPantalla2").valid()){
			var ver=0;
			var coo1=$("#txtcorreo").val();
			var coo2=$("#txtcorreo1").val();
			var numeroF= $("#txtTelF").val();
			var indicativo = $("#txtindicativo").val();
			var numeroM= $("#txtTelM").val();
			var primero = numeroM.substring(0,1);
			var cc=$("#txtnumdocumentocc").val();
			var ce=$("#txtnumdocumentoce").val();
			var reg=$("#txtnumdocumentoreg").val();
			var tar=$("#txtnumdocumentotar").val();
			
			var tipo=$("#txttipodto").val();
			var diferenciaAnos = calculaEdad($("#dia_nac").val(), $("#mes_nac").val(), $("#ano_nac").val())
			$("#edad").val(diferenciaAnos);
			//alert ("diferenciaAnos="+diferenciaAnos);
			
			if (tipo==99)
			{
				
				tipo=$("#txttipodto2").val();
				//alert ("si entro "+tipo);
				if (reg==0)
				{
					cc=$("#txtnumdocumentotar").val();
				}
				else 
				{
					cc=$("#txtnumdocumentoreg").val();
				}
			}
			if (cc==0)
			{
				cc=$("#txtnumdocumentoce").val();
			}
			
			//alert ("primera"+numeroF);
			//alert ("segunda"+indicativo);
			if ( (coo1 != "") && (coo2 != "") && (coo1 != coo2))
			{
				$("#alerta6").html("Por favor verifique el correo electr&oacute;nico, debe ser igual en los dos campos.");
				$("#alerta6").show();
				ver=1;
			}
			
			
			var pas1=$("#txtcontras").val();
			var pas2=$("#txtcontras2").val();
			//alert ("primera"+pas1);
			//alert ("segunda"+pas2);
			if ( (pas1 != "") && (pas2 != "") && (pas1 != pas2))
			{
				$("#alerta8").html("Por favor verifique la contrase\u00f1a, debe ser igual en los dos campos.");
				$("#alerta8").show();
				ver=1;
			}
			if ((numeroF=="" || numeroF==0 ) && (numeroM=="" || numeroM==0 ))
			{
				$("#alerta10").html("Debe diligenciar un n&uacute;mero telef&oacute;nico.");
				$("#alerta10").show();
				ver=1;
			}
			
			if ((numeroF>0 && indicativo==0))
			{
				$("#alerta12").html("Debe seleccionar un indicativo.");
				$("#alerta12").show();
				ver=1;
			}
			
			if ((numeroM>0) && (numeroM!="") && (primero!=3))
			{
				$("#alerta11").html("El tel&eacute;fono celular debe iniciar por 3");
				$("#alerta11").show();
				ver=1;
			}
			if ((numeroF=="" || numeroF==0 ) && ( indicativo > 0 ))
			{
				//alert ("primera"+numeroF+"-");
				//alert ("segunda"+indicativo+"-");
				//alert ("ingresa??");
				$("#alerta10").html("Debe diligenciar un n&uacute;mero telef&oacute;nico si selecciona un indicativo.");
				$("#alerta10").show();
				ver=1;
			}
			
			//alert ("cc="+cc);
			$.ajax({
				type: "POST",
				url: base_url +"registrese/registrese/verificarcc",
				data:{'cc' : cc,
				'tipo' : tipo, 
				'coo1' : coo1
				
				},
				cache: false,
				success: function(data)
				{
					if (data=="existe")
					{
						alert ("ya existe, ingerese con su usuario y contraseña.");
						$(location).attr("href",base_url);
						ver=1;
					}
					else if (diferenciaAnos<18)
					{
						alert ("Usted es menor de edad y no esta habilitado para realizar la inscripción al eCenso.");
						$(location).attr("href",base_url);
						ver=1;
					}
					else 
					{
						if (ver==0)
						{
							ajaxGuardarRegistrese(2);
							$("#acepto1").hide(); 
							$("#acepto1a").show();
							$("#txtcorreo").attr("disabled","disabled"); 
							$("#txtcorreo1").attr("disabled","disabled");
							$("#txttipodto").attr("disabled","disabled");
							$("#txtnumdocumentocc").attr("disabled","disabled");
							$("#txtnumdocumentoce").attr("disabled","disabled");
							
						}
					}
				},
				error: function(data){
					alert(data);
				}
			});
			
			
		}
	});
	
	
	
	/* validador de la contraseña*/

	$("#txtcontras").blur(function(){
		
		// declaramos la variable
		 var pswd = $("#txtcontras").val();
		 var texto="";
		  //alert ("entro"+pswd);
		 var cuenta=0;
		 // validamos la longitud de carateres
		if ( pswd.length < 6 ) {
			texto=texto+"\n -Debe tener al menos 6 car\u00e1cteres";
			cuenta=1;
		} 
		// validamos la letra
		if ( pswd.match(/[A-z]/) ) {	
		}
		else
		{
			//$('#letter').removeClass('invalid').addClass('valid');
			texto=texto+"\n -Debe tener al menos una letra";
			cuenta=1;
		}
		//validamos la letra mayuscula
		if ( pswd.match(/[A-Z]/) ) {
		}
		else
		{
		  texto=texto+"\n -Debe tener al menos una letra may\u00fascula";
		  cuenta=1;
		} 
		//validamos el numero
		if ( pswd.match(/\d/) ) {
		}
		else
		{
		  texto=texto+"\n -Debe tener al menos un n\u00famero";
		  cuenta=1;
		}
		
		if (cuenta==1)
		{
			alert ("Por favor tenga en cuenta que:\n"+texto);
			$("#txtcontras").val("");
			$("#alerta8").html("Debe digitar su contrase&ntilde;a.");
			$("#alerta8").show();
		}
		else 
		{
			$("#alerta8").hide();
		}
		
		
	});

	
	/*
	 * PANTALLA PESTAÑA 2
	 */
	$("#frmPantalla4").validate({
		
		rules: {
			Departamento	:	{	comboBox	: '-' },
			Municipio		:	{	comboBox	: '-' },
			txtdireccion	:	{	required	:	true },
			txtbarrio		:	{	required	:	true }
		},
		messages: {
			Departamento	:	{	comboBox	:	"Debe seleccionar el departamento." },
			Municipio		:	{	comboBox	:	"Debe seleccionar el municipio." },
			txtdireccion	:	{	required	:	"Debe digitar su direcci&oacute;n." },
			txtbarrio		:	{	required	:	"Debe digitar su barrio / corregimiento o vereda."}
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "Departamento"	:	$("#alerta13").show();	
											$("#alerta13").html(error);
											break;	
					
					case "Municipio"	:	$("#alerta14").show();	
											$("#alerta14").html(error);
											break;
											
					case "txtdireccion"	:	$("#alerta15").show();	
											$("#alerta15").html(error);
											break;	

					case "txtbarrio"	:	$("#alerta16").show();	
											$("#alerta16").html(error);
											break;
				}
		},
		
		submitHandler: function(form) {
			if ($("#frmPantalla4").valid()){
				$("#pes3").show();
				$("#pes2").addClass('disabledTab');
				$("#tab2").removeClass("active");
				$("#tab3").addClass("active");
				
				$("#pes2").removeClass("active");
				$("#pes3").addClass("active");
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	$("#frmPantalla4 select[name=Departamento]").bind("change",function(){
		var valordia=$('#Departamento').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta13").hide();
		}
		else 
		{
			$("#alerta13").show();
		}
	});
	
	
	cambiadepto = function()
	{
		var valordia=$('#Municipio').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#alerta14").hide();
		}
		else 
		{
			$("#alerta14").show();
		}
	}
	
	
	$("#frmPantalla4 input:text[name=txtdireccion]").bind("keyup",function(){
		var valorcampo=$('#txtdireccion').val();
		if (valorcampo != "" ){
			$("#alerta15").hide();
		}
		else 
		{
			$("#alerta15").show();
		}
	});
	
	$("#frmPantalla4 input:text[name=txtbarrio]").bind("keyup",function(){
		var valorcampo=$('#txtbarrio').val();
		if (valorcampo != "" ){
			$("#alerta16").hide();
		}
		else 
		{
			$("#alerta16").show();
		}
	});
	
	$("#frmPantalla4 input[name='clase']:radio").bind("click",function(){
		var valor=$(this).val();
		//alert ("valor"+valor);
		if (valor==1){
			$("#txtpoblado").val("");
			$("#local").show();
			$("#poblado").hide();
			$("#etnica").hide();
			$("#resguardo").hide();
			$("#txtnomcomu").val("");
			$("#txtresgu").val("");
			$("#resgterri").hide();
			$("#comunidadnegra").hide();
			$("#frmPantalla4 input[name='resgterrit']").removeAttr("checked");
			$("#frmPantalla4 input[name='territo']").removeAttr("checked");
			$("#txtnom").val("");
		}
		else if (valor==2){
			$("#txtlocalidad").val("");
			$("#poblado").show();
			$("#local").hide();
			$("#etnica").hide();
			$("#resguardo").hide();
			$("#txtnomcomu").val("");
			$("#txtresgu").val("");
			$("#resgterri").hide();
			$("#comunidadnegra").hide();
			$("#frmPantalla4 input[name='resgterrit']").removeAttr("checked");
			$("#frmPantalla4 input[name='territo']").removeAttr("checked");
			$("#txtnom").val("");
		}
		else if (valor==4){
			$("#etnica").show();
			$("#local").hide();
			$("#poblado").hide();
			$("#txtlocalidad").val("");
			$("#txtpoblado").val("");
		}
		else 
		{
			$("#local").hide();
			$("#poblado").hide();
			$("#etnica").hide();
			$("#txtlocalidad").val("");
			$("#txtpoblado").val("");
			$("#resguardo").hide();
			$("#txtnomcomu").val("");
			$("#txtresgu").val("");
			$("#resgterri").hide();
			$("#comunidadnegra").hide();
			$("#frmPantalla4 input[name='resgterrit']").removeAttr("checked");
			$("#frmPantalla4 input[name='territo']").removeAttr("checked");
			$("#txtnom").val("");
		}
	});
	
	$("#frmPantalla4 input[name='territo']:radio").bind("click",function(){
		var valor=$(this).val();
		//alert ("valor"+valor);
		if (valor==1){
			$("#resguardo").show();
			$("#resgterri").show();
			$("#comunidadnegra").hide();
			$("#txtnomcomu").val("");
			
			
		}
		else if (valor==2){
			$("#comunidadnegra").show();
			$("#resgterri").show();
			$("#resguardo").hide();
			$("#txtresgu").val("");
		}
		else 
		{
			$("#resguardo").hide();
			$("#txtnomcomu").val("");
			$("#txtresgu").val("");
			$("#resgterri").hide();
			$("#comunidadnegra").hide();
			$("#frmPantalla4 input[name='resgterrit']").removeAttr("checked");
			$("#txtnom").val("");
			
		}
	});
	
	$("#frmPantalla4 input[name='resgterrit']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			
			$("#nombrevere").show();
		}
	});
	
	

	$("#acepto2").bind("click",function(){
		if ($("#frmPantalla4").valid()){
			
			ajaxGuardarRegistrese(4);
			
		}
	});
	


	/*
	 * PANTALLA PESTAÑA 3
	 */
	$("#acepto3").bind("click",function(){
		
		var ver=0;		
		if (parseInt($("#canti").val()) != parseInt($("#txtotper").val()))
		{
			$("#alerta33").html("El total de personas seleccionadas no concuerda con las registradas, por favor verifique");
			$("#alerta33").show();
			ver=1;
		}
		else if (parseInt($("#jef").val()) != 1)
		{
			//alert ("aquiiii");
			$("#alerta33").html("Debe existir un jefe de hogar");
			$("#alerta33").show();
			ver=1;
		}
		else {
			infonomfinal();
			infocor();
			infoclave();
			var canti=$("#canti").val();
			$.ajax({
				type: "POST",
				url: base_url +"registrese/registrese/verificarcompletos",
				data:{'cc' : canti},
				cache: false,
				success: function(data)
				{
					/*alert ("devuelve="+data);
					alert ("cantidad="+canti)
					alert ("verificador"+ver);*/
					if (data != canti)
					{
						$("#alerta33").html("Debe completar el campo de sexo de la persona que esta llenando este registro");
						$("#alerta33").show();
						ver=1;
					}
					else 
					{
						if (ver==0)
						{
							//alert ("paso todo");
							$("#alerta33").hide();
							ajaxGuardarRegistrese(3);
						}
					}
				},
				error: function(data){
					alert(data);
				}
			});
			
		}
		/*$("#pes4").show();
		$("#tab3").removeClass("active");
		$("#tab4").addClass("active");
		
		$("#pes3").removeClass("active");
		$("#pes4").addClass("active");*/
	});
	
});



function infonomfinal(){
	$.ajax({
		type: "POST",
		url: base_url + "registrese/registrese/verifnom",
		data:{},
		cache: false,
		success: function(data)
		{
			$("#nombret").html(data);
		},
		error: function(data){
			alert(data);
		}
	});
	
}

function infocor(){
	
	$.ajax({
		type: "POST",
		url: base_url + "registrese/registrese/verifcorreo",
		data:{},
		cache: false,
		success: function(data)
		{
			$("#infcorreo").html(data);
		},
		error: function(data){
			alert(data);
		}
	});
}

function infoclave(){
	
	$.ajax({
		type: "POST",
		url: base_url + "registrese/registrese/verifclave",
		data:{},
		cache: false,
		success: function(data)
		{
			$("#infclave").html(data);
		},
		error: function(data){
			alert(data);
		}
	});
}

function cargagrilla(){
	
	
	//alert ("vuelve y carga aqui");
	$.jgrid.defaults.width = 'auto';
	$.jgrid.defaults.styleUI = 'Bootstrap';
	$.jgrid.defaults.responsive = true;
	var valjef=0;
	
	
	$("#jqGridP").jqGrid({		
		url: base_url + "registrese/registrese/jsonQueryper",		
		editurl: 'registrese/registrese/jsonQueryEditper',							
		datatype: "json",
		colModel: [
			{ label: 'EXISTE', name: 'EXISTE', width: 55,  sortable:false, editable:true, hidden: true, 
				edittype:'text',editoptions:{size:20,  maxlength: 20} },
			{ label: 'COMPLETO', name: 'COMPLETO', width: 55,  sortable:false, editable:true, hidden: true, 
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
             $("#cmpl").val(row['COMPLETO']);
             $("#canti").val(len);
		},
		 //reloadAfterEdit: true, //seems to have no effect
         //reloadAfterSubmit: true, //seems to have no effect
		
		pager: "#jqGridPagerP"
	
	});
	
	jQuery("#jqGridP").navGrid('#jqGridPagerP',
			{ edit:false,add:false,del:false,search:false, refresh:false })
			.navButtonAdd('#jqGridPagerP',
				{ 
				 	id: "btnIns_I",
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
							var borra = grid.jqGrid('getCell', sr, 'C4P41_NRO_PER');
							
							
							var rowId =$("#jqGridP").jqGrid('getGridParam','selrow');  
							var rowData = jQuery("#jqGridP").getRowData(rowId);
							var colData = rowData['C4P41_NRO_PER'];
							
							
							/*alert ("grid="+borra);
							
							alert ("otro="+colData);*/
							
							if (sr) 
							{
								if (borra==1)
								{
									alert ("No es posible eliminar la persona que realiz\u00f3 la inscripci\u00f3n.");
								}
								else
								{
								alert ("Borre solo SI, actualmente, esta persona \nes residente habitual de otro hogar  o si \nha fallecido.");
							     grid.delGridRow(sr);
								 //alert("Selected row primary key is: " + sr);
								}
							}
							else 
							{
								alert("Por favor seleccione una fila");
							}
					}
			}) 
	
}


/**
 * Funci&oacuten para validar la edad de la perosna
 * @author RFHuertasT - Roberto Fernando Huertas Torres
 * @since 08/11/2015
 * @param dia: d&iacute;a de nacimiento, mes: mes de nacimiento, ano: a&ntildeo;o de nacimiento
 * @return edad: Variable que almacena la edad calculada 
 */
function calculaEdad(dia, mes, ano)
{
    //tomar los valores actuales
    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getFullYear();
    var ahora_mes = fecha_hoy.getMonth()+1;
    var ahora_dia = fecha_hoy.getDate();
    
    // realizar el calculo
    var edad = (ahora_ano + 1895) - ano;
    if ( ahora_mes < mes )
    	edad--;
    
    if ((mes == ahora_mes) && (ahora_dia < dia))
    	edad--;

    if (edad > 1894)
        edad -= 1895;
    
    return edad;
}

function ajaxGuardarRegistrese(index){
	//alert ("entro");
	$.ajax({
		type: "POST",
		url: base_url + "registrese/registrese/guardarRegistrese",
		data: $("#frmPantalla"+index).serialize(),			
		dataType: "html",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			switch(index){
				case 1: //Guardar preguntas no acepta
						$("#pageter").show();
						$("#pageno1").toggle("slide");
						$("html, body").scrollTop(0);
						break;
				case 2: //Guardar  datos de acceso pestaña 1
						$("#pes2").show();
						$("#pes1").addClass('disabledTab');
						$("#tab1").removeClass("active");
						$("#tab2").addClass("active");
						
						$("#pes1").removeClass("active");
						$("#pes2").addClass("active");
						$("html, body").scrollTop(0);
						break;
				case 3: //Guardar datos de personas pestaña 3 
						$("#pes4").show();
						$("#pes3").addClass('disabledTab');
						$("#tab3").removeClass("active");
						$("#tab4").addClass("active");
						
						$("#pes3").removeClass("active");
						$("#pes4").addClass("active");
						$("html, body").scrollTop(0);
						break;
				case 4: //Guardar datos de ubicación pestaña 2
						$("#pes3").show();
						$("#pes2").addClass('disabledTab');
						$("#tab2").removeClass("active");
						$("#tab3").addClass("active");
						
						$("#pes2").removeClass("active");
						$("#pes3").addClass("active");
						$("html, body").scrollTop(0);
						cargagrilla();
			}					
		},
		error: function(data){
			if (data!=""){
				alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
			}
		}				
	});		
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
	
	var ruta = base_url +"registrese/cargatipodoc?padre="+padre+"&aCrear="+hijo;	

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

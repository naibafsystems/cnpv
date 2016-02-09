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
		$('#dtxtcorreo1').bind("cut copy paste",function(e) {
			e.preventDefault();
		});
	    $('#dtxtcorreo').bind("cut copy paste",function(e) {
	    	e.preventDefault();
	    });
    });
	
	$("#dtxtnumdocumentocc").bloquearTexto().maxlength(11).minlength(5).attr("disabled","disabled"); ;
	$("#dtxtnumdocumentoce").maxlength(11).convertirMayuscula().minlength(5).attr("disabled","disabled");
	$("#dtxtnumdocumentoreg").bloquearTexto().maxlength(11).minlength(11).attr("disabled","disabled");
	$("#dtxtnumdocumentotar").bloquearTexto().maxlength(11).minlength(11).attr("disabled","disabled");
	$("#dtxtnombreuno").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios().attr("disabled","disabled"); ;
	$("#dtxtnombredos").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios().attr("disabled","disabled"); ;
	$("#dtxtapellidouno").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios().attr("disabled","disabled"); ;
	$("#dtxtapellidodos").bloquearNumeros().maxlength(20).convertirMayuscula().verificaEspacios().attr("disabled","disabled"); ;
	$("#dtxtTelF").bloquearTexto().maxlength(7).minlength(7);
	$("#dtxtTelM").bloquearTexto().maxlength(10).minlength(10);
	$("#ddia_nac").attr("disabled", "disabled");
	$("#dmes_nac").attr("disabled", "disabled");
	$("#dano_nac").attr("disabled", "disabled");
	$("#dtxtsexo").attr("disabled", "disabled");
	$("#dtxttipodto").attr("disabled", "disabled");
	$("#dtxttipodto2").attr("disabled", "disabled");
	$("#dtxtcorreo1").attr("disabled", "disabled");
	$("#dtxtcorreo").attr("disabled", "disabled");
	
	
	//alert ("va en "+$('#dpestania').val());
	var pesta=$('#dpestania').val();
	if (pesta==1)
	{
		$("#tab1").removeClass("active");
		$("#pes1").removeClass("active");
		
		$("#tab2").addClass("active");
		$("#pes2").addClass("active");
		
		$("#pes3").addClass('disabledTab');
		$("#pes4").addClass('disabledTab');
	}
	else if (pesta==2)
	{
		$("#tab1").removeClass("active");
		$("#pes1").removeClass("active");
		
		$("#tab3").addClass("active");
		$("#pes3").addClass("active");
		
		$("#pes4").addClass('disabledTab');
	}
	
	cargagrilla();
	
	if ($("#dtxtnumdocumentocc").val()=="")
	{
		$("#dtxtnumdocumentocc").hide();
	}
	if ($("#dtxtnumdocumentoce").val()=="")
	{
		$("#dtxtnumdocumentoce").hide();
	}
	if ($("#dtxtnumdocumentotar").val()=="")
	{
		$("#dtxtnumdocumentotar").hide();
	}
	if ($("#dtxtnumdocumentoreg").val()=="")
	{
		$("#dtxtnumdocumentoreg").hide();
	}
	if ($("#dtxttipodto").val()==1 || $("#dtxttipodto").val()==2)
	{
		$("#ddivtxttipodto").show();
	}
	else 
	{
		$("#ddivtxttipodto").hide();
	}
	
	$("#dalerta1").hide();
	$("#dalerta2").hide();
	$("#dalerta3").hide();
	$("#dalerta4").hide();
	$("#dalerta5").hide();
	$("#dalerta6").hide();
	$("#dalerta7").hide();
	$("#dalerta8").hide();
	$("#dalerta9").hide();
	$("#dalerta10").hide();
	$("#dalerta11").hide();
	$("#dalerta12").hide();
	$("#dalerta13").hide();
	$("#dalerta14").hide();
	$("#dalerta15").hide();
	$("#dalerta16").hide();
	$("#dalerta33").hide();
	
	
	if ($("#dclase:checked").val()==1){
		$("#dpoblado").hide();
		$("#dlocal").show();
		$("#detnica").hide();
	}
	else if ($("#dclase:checked").val()==2){
		$("#dpoblado").show();
		$("#dlocal").hide();
		$("#detnica").hide();
	}
	else if ($("#dclase:checked").val()==3){
		$("#dpoblado").hide();
		$("#dlocal").hide();
		$("#detnica").hide();
	}
	else if ($("#dclase:checked").val()==4){
		$("#dpoblado").hide()
		$("#dlocal").hide();;
		$("#detnica").show();
		$("#dpoblado").hide();
		$("#dlocal").hide();
		if ($("#dterrito:checked").val()==1){
			$("#dresguardo").show();
			$("#dcomunidadnegra").hide();
			$("#dresgterri").show();
		}
		else if ($("#dterrito:checked").val()==2){
			$("#dresguardo").hide();
			$("#dcomunidadnegra").show();
			$("#dresgterri").show();
		}
		else 
		{
			$("#dresgterri").hide();
			$("#dresguardo").hide();
			$("#dcomunidadnegra").hide();
		}
	}
	else 
	{
		$("#dpoblado").hide();
		$("#dlocal").hide();
		$("#detnica").hide();
		
	}
	
	
	
	/*
	 * PANTALLA PESTAÑA 1 ACTUALIZACION
	 */
	$("#frmPantallas2").validate({
		
		rules: {
			dtxtcontras			:	{	required	:	true },
			dtxtcontras2		:	{	required	:	true }
			
		},
		messages: {
			dtxtcontras			:	{	required	:	"Debe digitar su contraseña." },
			dtxtcontras2			:	{	required	:	"Debe confirmar su contraseña." }
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "dtxtcontras"		:	$("#dalerta8").show();	
												$("#dalerta8").html(error);
												break;	

					case "dtxtcontras2"		:	$("#dalerta9").show();	
												$("#dalerta9").html(error);
												break;
				
				}
		},
		
		submitHandler: function(form) {
			if ($("#frmPantallas2").valid()){
				/*$("#pageter").show();
				$("#pageno1").toggle("slide");*/
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	$("#frmPantallas2 input:text[name=dtxtcontras]").bind("keypress",function(){
			$("#dalerta8").hide();

	});
	
	$("#frmPantallas2 input:text[name=dtxtcontras2]").bind("keyup",function(){
			$("#dalerta9").hide();
	});
	
	$("#frmPantallas2 input:text[name=dtxtTelM]").bind("blur",function(){
		
		var telmovil=$("#dtxtTelM").val();
		var primero = telmovil.substring(0,1);
		//alert ("telmovil="+telmovil+"primero="+primero+"---");
		if ((telmovil>0 ||telmovil!="") && (primero==3))
		{
			$("#dalerta11").hide();
		}
		else 
		{
			$("#dalerta11").show();
		}
	});
	
	$("#frmPantallas2 input:text[name=dtxtTelF]").bind("blur",function(){
		var telfijo=$("#dtxtTelF").val();
		var telmovil=$("#dtxtTelM").val();
		//alert ("telmovil="+telmovil+"telfijo="+telfijo+"---");
		if ((telmovil>0 ||telmovil!="") || (telfijo>0 ||telfijo!="" ) )
		{
			$("#dalerta10").hide();
		}
		else 
		{
			$("#dalerta10").show();
		}
	});
	
	$("#frmPantallas2 select[name=dtxtindicativo]").bind("change",function(){
		var valordia=$('#dtxtindicativo').val();
		//alert("valordia"+valordia);
		if (valordia > 0){
			$("#dalerta12").hide();
		}
		else 
		{
			$("#dalerta12").show();
		}
	});
	
	$("#dacepto1a").bind("click",function(){
		if ($("#frmPantallas2").valid()){
			var ver=0;
			var coo1=$("#dtxtcorreo").val();
			var coo2=$("#dtxtcorreo1").val();
			var numeroF= $("#dtxtTelF").val();
			var indicativo = $("#dtxtindicativo").val();
			var numeroM= $("#dtxtTelM").val();
			var primero = numeroM.substring(0,1);
			var cc=$("#dtxtnumdocumentocc").val();
			var tipo=$("#dtxttipodto").val();
			if (cc==0)
			{
				cc=$("#dtxtnumdocumentoce").val();
			}
			/*alert ("primera"+numeroF);
			alert ("segunda"+indicativo);*/
			if ( (coo1 != "") && (coo2 != "") && (coo1 != coo2))
			{
				$("#dalerta6").html("<b>Por favor verifique el correo electr&oacute;nico, debe ser igual en los dos campos.</b>");
				$("#dalerta6").show();
				ver=1;
			}
			
			var pas1=$("#dtxtcontras").val();
			var pas2=$("#dtxtcontras2").val();
			/*alert ("primera"+pas1);
			alert ("segunda"+pas2);*/
			if ( (pas1 != "") && (pas2 != "") && (pas1 != pas2))
			{
				$("#dalerta8").html("<b>Por favor verifique la contrase\u00f1a, debe ser igual en los dos campos.</b>");
				$("#dalerta8").show();
				ver=1;
			}
			if ((numeroF=="" || numeroF==0 ) && (numeroM=="" || numeroM==0 ))
			{
				$("#dalerta10").html("<b>Debe diligenciar un n&uacute;mero telef&oacute;nico.</b>");
				$("#dalerta10").show();
				ver=1;
			}
			
			if ((numeroF>0 && indicativo==0))
			{
				$("#dalerta12").html("<b>Debe seleccionar un indicativo.</b>");
				$("#dalerta12").show();
				ver=1;
			}
			
			if ((numeroM>0) && (numeroM!="") && (primero!=3))
			{
				$("#dalerta11").html("<b>El tel&eacute;fono celular debe iniciar por 3</b>");
				$("#dalerta11").show();
				ver=1;
			}
			if ((numeroF=="" || numeroF==0 ) && ( indicativo > 0 ))
			{
				/*alert ("primera"+numeroF+"-");
				alert ("segunda"+indicativo+"-");
				alert ("ingresa??");*/
				$("#dalerta10").html("<b>Debe diligenciar un n&uacute;mero telef&oacute;nico si selecciona un indicativo.</b>");
				$("#dalerta10").show();
				ver=1;
			}
			if (ver==0)
			{
				$("#dalerta6").hide();
				$("#dalerta8").hide();
				$("#dalerta10").hide();
				$("#dalerta11").hide();
				$("#dalerta12").hide();
				ajaxActualizaRegistrese(2);
			}
		}
	});
	
	/* validador de la contraseña*/

	$("#dtxtcontras").blur(function(){
		
		// declaramos la variable
		 var pswd = $("#dtxtcontras").val();
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
			$("#dtxtcontras").val("");
		}
		
		
	});
	
	
	/*
	 * PANTALLA PESTAÑA 2
	 */
	$("#frmPantallas4").validate({
		
		rules: {
			dDepartamento	:	{	comboBox	: '-' },
			dMunicipio		:	{	comboBox	: '-' },
			dtxtdireccion	:	{	required	:	true },
			dtxtbarrio		:	{	required	:	true }
		},
		messages: {
			dDepartamento	:	{	comboBox	:	"Debe seleccionar el departamento." },
			dMunicipio		:	{	comboBox	:	"Debe seleccionar el municipio." },
			dtxtdireccion	:	{	required	:	"Debe digitar su direcci&oacute;n." },
			dtxtbarrio		:	{	required	:	"Debe digitar su barrio / corregimiento o vereda."}
		},
		errorPlacement: function(error, element) 
		{
			switch(element.attr("id"))
				{		
					case "dDepartamento"	:	$("#dalerta13").show();	
												$("#dalerta13").html(error);
												break;	
					
					case "dMunicipio"		:	$("#dalerta14").show();	
												$("#dalerta14").html(error);
												break;
											
					case "dtxtdireccion"	:	$("#dalerta15").show();	
												$("#dalerta15").html(error);
												break;	

					case "dtxtbarrio"		:	$("#dalerta16").show();	
												$("#dalerta16").html(error);
												break;
				}
		},
		
		submitHandler: function(form) {
			if ($("#frmPantallas4").valid()){
				$("#pes3").show();
				$("#pes2").addClass('disabledTab');
				$("#tab2").removeClass("active");
				$("#tab3").addClass("active");
				
				$("#pes2").removeClass("active");
				$("#pes3").addClass("active");
			}						
		}
	});
	
	$("#frmPantallas4 select[name=dDepartamento]").bind("change",function(){
		var valordia=$('#dDepartamento').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#dalerta13").hide();
		}
		else 
		{
			$("#dalerta13").show();
		}
	});
	
	
	cambiadepto = function()
	{
		var valordia=$('#dMunicipio').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#dalerta14").hide();
		}
		else 
		{
			$("#dalerta14").show();
		}
	}
	
	
	$("#frmPantallas4 input:text[name=dtxtdireccion]").bind("keyup",function(){
		var valorcampo=$('#dtxtdireccion').val();
		if (valorcampo != "" ){
			$("#dalerta15").hide();
		}
		else 
		{
			$("#dalerta15").show();
		}
	});
	
	$("#frmPantallas4 input:text[name=dtxtbarrio]").bind("keyup",function(){
		var valorcampo=$('#dtxtbarrio').val();
		if (valorcampo != "" ){
			$("#dalerta16").hide();
		}
		else 
		{
			$("#dalerta16").show();
		}
	});
	
	$("#frmPantallas4 input[name='dclase']:radio").bind("click",function(){
		var valor=$(this).val();
		//alert ("valor"+valor);
		if (valor==1){
			$("#dtxtpoblado").val("");
			$("#dlocal").show();
			$("#dpoblado").hide();
			$("#detnica").hide();
			$("#dresguardo").hide();
			$("#dtxtnomcomu").val("");
			$("#dtxtresgu").val("");
			$("#dresgterri").hide();
			$("#dcomunidadnegra").hide();
			$("#frmPantallas4 input[name='dresgterrit']").removeAttr("checked");
			$("#frmPantallas4 input[name='dterrito']").removeAttr("checked");
			$("#dtxtnom").val("");
		}
		else if (valor==2){
			$("#dtxtlocalidad").val("");
			$("#dpoblado").show();
			$("#dlocal").hide();
			$("#detnica").hide();
			$("#dresguardo").hide();
			$("#dtxtnomcomu").val("");
			$("#dtxtresgu").val("");
			$("#dresgterri").hide();
			$("#dcomunidadnegra").hide();
			$("#frmPantallas4 input[name='dresgterrit']").removeAttr("checked");
			$("#frmPantallas4 input[name='dterrito']").removeAttr("checked");
			$("#dtxtnom").val("");
		}
		else if (valor==4){
			$("#detnica").show();
			$("#dlocal").hide();
			$("#dpoblado").hide();
			$("#dtxtlocalidad").val("");
			$("#dtxtpoblado").val("");
			$("#dcomunidadnegra").hide();
			$("#dresguardo").hide();
			$("#dresgterri").hide();
			
		}
		else 
		{
			$("#dlocal").hide();
			$("#dpoblado").hide();
			$("#detnica").hide();
			$("#dtxtlocalidad").val("");
			$("#dtxtpoblado").val("");
			$("#dresguardo").hide();
			$("#dtxtnomcomu").val("");
			$("#dtxtresgu").val("");
			$("#dresgterri").hide();
			$("#dcomunidadnegra").hide();
			$("#frmPantallas4 input[name='dresgterrit']").removeAttr("checked");
			$("#frmPantallas4 input[name='dterrito']").removeAttr("checked");
			$("#dtxtnom").val("");
		}
	});
	
	$("#frmPantallas4 input[name='dterrito']:radio").bind("click",function(){
		var valor=$(this).val();
		//alert ("valor"+valor);
		if (valor==1){
			$("#dresguardo").show();
			$("#dresgterri").show();
			$("#dcomunidadnegra").hide();
			$("#dtxtnomcomu").val("");
			
			
		}
		else if (valor==2){
			$("#dcomunidadnegra").show();
			$("#dresgterri").show();
			$("#dresguardo").hide();
			$("#dtxtresgu").val("");
		}
		else 
		{
			$("#dresguardo").hide();
			$("#dtxtnomcomu").val("");
			$("#dtxtresgu").val("");
			$("#dresgterri").hide();
			$("#dcomunidadnegra").hide();
			$("#frmPantallas4 input[name='dresgterrit']").removeAttr("checked");
			$("#dtxtnom").val("");
			
		}
	});
	
	$("#frmPantallas4 input[name='dresgterrit']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			
			$("#dnombrevere").show();
		}
	});
	
	

	$("#dacepto2").bind("click",function(){
		if ($("#frmPantallas4").valid()){
			ajaxActualizaRegistrese(4);
		}
	});
	
	
	/**
    * COMBO ANIDADO DEL MUNICIPIO.
    * @author Angela Liliana Rodriguez Mahecha
    * @since  Julio 09 / 2015
    */
	$("#dDepartamento").change(function()
	{
		var coddepto= $("#dDepartamento").val();
		//alert ("aqui"+base_url);
		if (coddepto>0 && coddepto!="")
		{
			$.ajax
			({
				type: "POST",
				//url: "http://localhost/plantillaCI/demo/login/busca",
				url: base_url +"registro/registro/busca",
				//url: "http://localhost/plantillaCI/demo/index.php/login/busca",
				data:{'coddepto' : coddepto},
				cache: false,
				success: function(data)
				{
					//alert("yo");
					$("#dmunic").html(data);
				}
			});
		}
	});
	
	
	/**
    * verifica que el departamento no lo seleccione en blanco.
    * @author Angela Liliana Rodriguez Mahecha
    * @since  Enero / 2016
    */
	
	dcambiadepto = function()
	{
		var valordia=$('#dMunicipio').val();
		//alert("valordia"+valordia);
		if (valordia != '-'){
			$("#dalerta14").hide();
		}
		else 
		{
			$("#dalerta14").show();
		}
	}
	
	
	/*
	 * PANTALLA PESTAÑA 3
	 */
	$("#dacepto3").bind("click",function(){
		var ver=0;		
		if (parseInt($("#dcanti").val()) != parseInt($("#dtxtotper").val()))
		{
			$("#dalerta33").html("El total de personas seleccionadas no concuerda con las registradas, por favor verifique");
			$("#dalerta33").show();
			ver=1;
		}
		else if (parseInt($("#djef").val()) != 1)
		{
			$("#dalerta33").html("<b>Debe existir un jefe de hogar");
			$("#dalerta33").show();
			ver=1;
		}
		else {
			/*infonomfinald();
			infocord();
			infoclaved();*/
			var canti=$("#dcanti").val();
			$.ajax({
				type: "POST",
				url: base_url +"registro/registro/verificarcompletosd",
				data:{'cc' : canti},
				cache: false,
				success: function(data)
				{
					/*alert ("devuelve="+data);
					alert ("cantidad="+canti)
					alert ("verificador"+ver);*/
					if (data != canti)
					{
						$("#dalerta33").html("<b>Debe completar los campos de a&ntilde;os cumplidos y sexo de todos los residentes del hogar");
						$("#dalerta33").show();
						ver=1;
					}
					else 
					{
						if (ver==0)
						{
							//alert ("paso todo");
							$("#dalerta33").hide();
							ajaxActualizaRegistrese(3);
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

	/*
	 * PANTALLA PESTAÑA 4
	 */
	$("#dbtnfinalreg").bind("click",function(){
		var url = base_url + "inicio";    
		$(location).attr("href",url);
	});
});


function ajaxActualizaRegistrese(index){
	$.ajax({
		type: "POST",
		url: base_url + "registro/registro/actualizaRegistrese",
		data: $("#frmPantallas"+index).serialize(),			
		dataType: "html",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			switch(index){
				case 2: //actualiza datos personales y de acceso pestaña 1
						$("#pes2").show();
						$("#tab1").removeClass("active");
						$("#tab2").addClass("active");
						
						$("#pes1").removeClass("active");
						$("#pes2").addClass("active");
						break;
				case 4: //actualiza datos de ubicacion pestaña 2
						
						$("#pes3").show();
						$("#tab2").removeClass("active");
						$("#tab3").addClass("active");
						
						$("#pes2").removeClass("active");
						$("#pes3").addClass("active");
						break;
				case 3: //Guardar datos de personas pestaña 3 
						//alert ("noooo");
						$("#pes4").show();
						$("#tab3").removeClass("active");
						$("#tab4").addClass("active");
						
						$("#pes3").removeClass("active");
						$("#pes4").addClass("active");
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

function cargagrilla(){
	
	
	//alert ("vuelve y carga aqui");
	$.jgrid.defaults.width = 'auto';
	$.jgrid.defaults.styleUI = 'Bootstrap';
	$.jgrid.defaults.responsive = true;
	var valjef=0;
	
	
	$("#djqGridP").jqGrid({		
		url: base_url + "registro/registro/jsonQueryperd",		
		editurl: 'registro/registro/jsonQueryEditperd',							
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
			 var rows= jQuery("#djqGridP").jqGrid('getRowData');
             var row=rows[0];
             var existejefe = row['EXISTE'];
		    }
            // alert ("aqui="+existejefe);
             $("#djef").val(existejefe);
             $("#dcmpl").val(row['COMPLETO']);
             $("#dcanti").val(len);
		},
		 //reloadAfterEdit: true, //seems to have no effect
         //reloadAfterSubmit: true, //seems to have no effect
		
		pager: "#djqGridPagerP"
	
	});
	
	jQuery("#djqGridP").navGrid('#djqGridPagerP',
			{ edit:false,add:false,del:false,search:false, refresh:false })
			.navButtonAdd('#djqGridPagerP',
				{ 
					caption:"Agregar", 
					//buttonimg:"../../../images/row_add.png",
					buttonimg: base_url + "images/row_add.png", 
					position:"last",				
					onClickButton: 
					function()
					{ 
						jQuery("#djqGridP").jqGrid('editGridRow',"new",{
							closeAfterAdd: true, 
							dataheight:500,
							afterShowForm:  funcionesCargard, 
							beforeSubmit: function(postdata, formid) {
								/*alert ("yooo"+formid);
					            alert("segundo"+postdata);*/
					            var val= funcionesValidard(postdata)
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
			 
			.navButtonAdd('#djqGridPagerP',
				{ 
					caption:"Modificar", 
					buttonimg: base_url +"images/row_edit.png", position:"last",
					onClickButton:
					function()
					{
							var grid = $("#djqGridP");
							var rowKey = grid.getGridParam("selrow");
							if (rowKey) {
									grid.editGridRow(rowKey, {
										closeAfterEdit: true, 
										dataheight:500 
										, afterShowForm:  funcionesCargard, 
										beforeSubmit: function(postdata, formid) {
											//alert ("yooo");
								            //alert(postdata);
								            var val= funcionesValidard(postdata)
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
			.navButtonAdd('#djqGridPagerP',
				{ 
					height: 'auto',
					caption:"Borrar", buttonimg:base_url + "images/row_del.png", position:"last",
					onClickButton:
						 
					function()
					{ 
						
							var grid = $("#djqGridP");
							var sr = jQuery("#djqGridP").getGridParam('selrow'); 
							var borra = grid.jqGrid('getCell', sr, 'C4P41_NRO_PER');
							
							
							var rowId =$("#djqGridP").jqGrid('getGridParam','selrow');  
							var rowData = jQuery("#djqGridP").getRowData(rowId);
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


function funcionesCargard()
{
	//alert ("aaaa");
	cargarCombosd($("#C4P43_TIPO_DOC").val(), "C4P43_TIPO_DOC", false);
	cargarCombosd($("#C4P45_SEXO").val(), "C4P45_SEXO", false);
	cargarCombosd($("#C4P49_PARENTESCO").val(), "C4P49_PARENTESCO", false);
	/*DeshabLimpiar (new Array('H31_PEREXT_OT','H31_PEREXT_CANADA','H31_PEREXT_ECUADOR','H31_PEREXT_ESPANA','H31_PEREXT_EEUU','H31_PEREXT_VEN','H31_PEREXT_OTCUAL') , 'D'); 	
	changeFHogar();*/		
	
}


//========================================  Funcion para cargar combos ==============================

function cargarCombosd(padre, hijo, setselected) 
{
	//
	var current = $("#djqGridP").jqGrid('getRowData',$("#djqGridP")[0].p.selrow)[hijo];
	var jefextiste= $("#djef").val();
	//alert ("bbb"+current);
	var aCrear = "#"+hijo;	
	var estado = $(aCrear).attr("disabled");
	if (estado===undefined)
			estado=false;
	$(aCrear).html("<option value=''>Cargando...</option>")
					 .attr("disabled", "disabled");
	
	var ruta = base_url +"registro/cargatipodocd?padre="+padre+"&aCrear="+hijo;	

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


function funcionesValidard(datos, nombres)
{
	var Existej=$("#djef").val();
	var texto ="";
	var errorRequerido = errorTexto = errorRequerido = errorCE = false;
	//var dato=datos.ID;
	var dato1=datos.C4P41_NRO_PER;
	/*alert ("datos="+dato);
	alert ("datos1="+dato1);*/
	if (datos.C4P42A_1ER_NOMBRE!="")
	{	
		/*var dato = Mayuscula(datos.C4P42A_1ER_NOMBRE);
		alert ("retornado"+dato);
		$("#C4P42A_1ER_NOMBRE").val(dato);*/
		value = datos.C4P42A_1ER_NOMBRE;
		errorTexto = validaTextod (value);
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
		errorTexto = validaTextod (value);
		if (errorTexto == true)
		{
			texto =texto+"<br> - En el segundo nombre por favor digite solo texto";
		}
	}
	if (datos.C4P42B_1ER_APELLIDO!="")
	{
		value = datos.C4P42B_1ER_APELLIDO;
		errorTexto = validaTextod (value);
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
		errorTexto = validaTextod (value);
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
		errorTexto = validaTextod (value);
		errorCE = validaCEd (value);
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
		else if (datos.C4P43_TIPO_DOC != 4 && (validaNumerosd(datos.C4P44_NRO_DOC) == true))
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
	else if (validaNumerosd(datos.C4P47_EDAD) == true)
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
	
	if (texto=="")
	{
		$("#dtxtnombreuno").val(datos.C4P42A_1ER_NOMBRE);
		$("#dtxtnombredos").val(datos.C3R38B2_2NOMBRE);
		$("#dtxtapellidouno").val(datos.C4P42B_1ER_APELLIDO);
		$("#dtxtapellidodos").val(datos.C3R38C2_2APELLIDO);
		$("#dtxttipodto").val(datos.C4P43_TIPO_DOC);
		$("#dtxtsexo").val(datos.C4P45_SEXO);
		if (datos.C4P43_TIPO_DOC==1)
		{
			$("#ddivtxttipodto").show();
			$("#dtxttipodto2").val(datos.C4P43_TIPO_DOC);
			$("#dtxtnumdocumentocc").hide();
			$("#dtxtnumdocumentoce").hide();
			$("#dtxtnumdocumentotar").hide();
			$("#dtxtnumdocumentoreg").show();
			
			$("#dtxtnumdocumentoreg").val(datos.C4P44_NRO_DOC);
			$("#dtxtnumdocumentocc").val("");
			$("#dtxtnumdocumentoce").val("");
			$("#dtxtnumdocumentotar").val("");
			
		}
		else if (datos.C4P43_TIPO_DOC==2)
		{
			$("#ddivtxttipodto").show();
			$("#dtxttipodto2").val(datos.C4P43_TIPO_DOC);
			$("#dtxtnumdocumentocc").hide();
			$("#dtxtnumdocumentoce").hide();
			$("#dtxtnumdocumentotar").show();
			$("#dtxtnumdocumentoreg").hide();
			
			$("#dtxtnumdocumentoreg").val("");
			$("#dtxtnumdocumentocc").val("");
			$("#dtxtnumdocumentoce").val("");
			$("#dtxtnumdocumentotar").val(datos.C4P44_NRO_DOC);
		}
		if (datos.C4P43_TIPO_DOC==3)
		{
			$("#ddivtxttipodto").hide();
			$("#dtxttipodto2").val("-");
			$("#dtxtnumdocumentocc").show();
			$("#dtxtnumdocumentoce").hide();
			$("#dtxtnumdocumentotar").hide();
			$("#dtxtnumdocumentoreg").hide();
			
			$("#dtxtnumdocumentoreg").val("");
			$("#dtxtnumdocumentocc").val(datos.C4P44_NRO_DOC);
			$("#dtxtnumdocumentoce").val("");
			$("#dtxtnumdocumentotar").val("");
		}
		else if (datos.C4P43_TIPO_DOC==4)
		{
			$("#ddivtxttipodto").hide();
			$("#dtxttipodto2").val("-");
			$("#dtxtnumdocumentocc").hide();
			$("#dtxtnumdocumentoce").show();
			$("#dtxtnumdocumentotar").hide();
			$("#dtxtnumdocumentoreg").hide();
			
			$("#dtxtnumdocumentoreg").val("");
			$("#dtxtnumdocumentocc").val("");
			$("#dtxtnumdocumentoce").val(datos.C4P44_NRO_DOC);
			$("#dtxtnumdocumentotar").val("");
		}
		
		
	}
	
	return texto;
}


function validaCEd (valor)
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

function validaTextod (valor)
{
	var error= false;
	var texto = /^[a-zA-Z ÁÉÍÓÚÑ," "]+$/.test(valor);
	if (texto == false )
		error= true;	
	return error;	
}

function validaNumerosd (valor)
{
	var error= false;
	var texto = /^[0-9]+$/.test(valor);
	if (texto == false )
		error= true;	
	return error;	
}


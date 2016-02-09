/**
 * Funciones JavaScript Para el Módulo de Encuesta de Envio
 * @author hhchavezv
 * @since  28/10/2015
 */

$(function(){
	
	redirectBrowser();
		
	//Validaciones 
	$("#form_encuesta").validate({
		rules: {
			inscrip_1: { required: true },
			inscrip_2: { required: true },
			inscrip_2_cual: { required: true ,maxlength:970 },
			inscrip_3: { maxlength:970 },
			dilig_1: { required: true },
			dilig_2: { required: true },
			dilig_3: { required: true },
			dilig_3_cual: { required: true ,maxlength:970 },
			dilig_4: { maxlength:970 },
			soport_1: { required: true },
			chat_1: { comboBox: "-" },
			chat_2: { comboBox: "-" },
			chat_3: { comboBox: "-" },
			chat_4: { comboBox: "-" },
			tel_1:  { comboBox: "-" },
			tel_2:  { comboBox: "-" },
			tel_3:  { comboBox: "-" },
			tel_4:  { comboBox: "-" },
			mail_1: { comboBox: "-" },
			mail_2: { comboBox: "-" },
			mail_3: { comboBox: "-" },
			mail_4: { comboBox: "-" },
			'tipo_soporte'    : {	required   :  true },
			soport_3: { maxlength:970 }
		},
		messages: {
			inscrip_1: { required: "Debe seleccionar una de las opciones.<br>" },
			inscrip_2: { required:"Debe seleccionar una de las opciones.<br>" },
			inscrip_2_cual: { required:"Escriba cu&aacute;l.", maxlength:"Por favor escriba m&aacute;ximo 970 caracteres." },
			inscrip_3: { maxlength:"Por favor escriba m&aacute;ximo 970 caracteres." },
			dilig_1: { required:"Debe seleccionar una de las opciones.<br>" },
			dilig_2: { required:"Debe seleccionar una de las opciones.<br>" },
			dilig_3: { required:"Debe seleccionar una de las opciones.<br>" },
			dilig_3_cual: { required:"Escriba cu&aacute;l.", maxlength:"Por favor escriba m&aacute;ximo 970 caracteres." },
			dilig_4: { maxlength:"Por favor escriba m&aacute;ximo 970 caracteres."  },
			soport_1: { required: "Debe seleccionar una de las opciones.<br>" },
			chat_1: { comboBox: "<br> Elija una opci&oacute;n." },
			chat_2: { comboBox: "<br> Elija una opci&oacute;n." },
			chat_3: { comboBox: "<br> Elija una opci&oacute;n." },
			chat_4: { comboBox: "<br> Elija una opci&oacute;n." },
			tel_1:  { comboBox: "<br> Elija una opci&oacute;n." },
			tel_2:  { comboBox: "<br> Elija una opci&oacute;n." },
			tel_3:  { comboBox: "<br> Elija una opci&oacute;n." },
			tel_4:  { comboBox: "<br> Elija una opci&oacute;n." },
			mail_1: { comboBox: "<br> Elija una opci&oacute;n." },
			mail_2: { comboBox: "<br> Elija una opci&oacute;n." },
			mail_3: { comboBox: "<br> Elija una opci&oacute;n." },
			mail_4: { comboBox: "<br> Elija una opci&oacute;n." },
			soport_3: { maxlength:"Por favor escriba m&aacute;ximo 970 caracteres." },
			'tipo_soporte'    : {	required   :  "Seleccione uno o m&aacute;s canales de soporte.<br> " }
		},
		//Mensajes de error
		errorPlacement: function(error, element) {
			element.after(error);		        
			error.css('display','inline');
			error.css('margin-left','10px');				
			error.css('color',"#FF0000");
		},
		submitHandler: function(form) {
			return true;
			
		}
	});
	
	

	$("#btnEncuesta").click(function(){		
		
		if ($("#form_encuesta").valid() == true){
			
			if(window.confirm('Haga clic en Aceptar para enviar'))
			{
			
			//Activa icono guardando
			$("#encuesta_error").css("display", "none");
			$("#encuesta_cargando").css("display", "inline");
			$('#btnEncuesta').attr('disabled','-1');
				      
				$.ajax({
					type: "POST",
					url: base_url + "encuesta/guardarEncuesta",
					data: $("#form_encuesta").serialize(),
				    cache: false,
					success: function(data){
						//alert(data);
						
						if(data ==="-ok-")
						{	
							$("#encuesta_cargando").css("display", "none");
							$('#btnEncuesta').removeAttr('disabled');
							alert("La encuesta se envi\u00f3 correctamente.");
							
							var url = base_url + "encuesta/msjEncuesta";    
							$(location).attr("href",url);
							
						}
						else
						{
							alert('Error al guardar. Intente nuevamente o actualice la página.');
							$("#encuesta_cargando").css("display", "none");
							$("#encuesta_error").css("display", "inline");
							$('#btnEncuesta').removeAttr('disabled');
						}	
					},
					error: function(result) {
		            alert("ERROR al guardar. Intente nuevamente o actualice la página.");
		            $("#encuesta_cargando").css("display", "none");
					$("#encuesta_error").css("display", "inline");
					$('#btnEncuesta').removeAttr('disabled');
					}
					
		
				});	
			}
					
		}//if
		else
			{
				alert("CORRIJA: La Encuesta Final que est\u00e1 diligenciando en este momento presenta inconsistencias. Por favor revise esta encuesta y diligencie correctamente los campos que presenten mensaje en rojo.");
			}
	});	
	
	$("#btnDescarga").click(function(){	
		var url = base_url + "inicio/generapdf";    
		$(location).attr("href",url);
						
	});	
		
	// Deshabilita campos 
		ocultaCual("inscrip_2_cual","inscrip_2");
		ocultaCual("dilig_3_cual","dilig_3");
			
	// Deshabilita canal soporte al cargar pagina
	ocultaSoporte();
	habilitaSoporte('tipoA');	
	habilitaSoporte('tipoB');	
	habilitaSoporte('tipoC');	
	
	// Habilita canal soporte con evento
	$('input[id="tipoA"]').change(function(){
		habilitaSoporte('tipoA');		
	});
	$('input[id="tipoB"]').change(function(){
		habilitaSoporte('tipoB');		
	});
	$('input[id="tipoC"]').change(function(){
		habilitaSoporte('tipoC');		
	});
		
});//EOC


function ocultaCual(id,depende)
{

	if($('input[name='+depende+']:checked').attr('value') == '1')
		{ 
		$("#"+id).attr("disabled",false);
		}
	else
		{
		$("#"+id).attr("disabled",true);		
		$("#"+id).val("");
		}
}


function ocultaSoporte()
{
	
	if($('input[name=soport_1]:checked').attr('value') == '1')
		{ 
		
		$('input[name=tipo_soporte]').attr("disabled",false);
		$('#div_soporte').show();
		/*		
		$("#chat_1").attr("disabled",false);
		$("#chat_2").attr("disabled",false);
		$("#chat_3").attr("disabled",false);
		$("#chat_4").attr("disabled",false);
		$("#tel_1").attr("disabled",false);
		$("#tel_2").attr("disabled",false);
		$("#tel_3").attr("disabled",false);
		$("#tel_4").attr("disabled",false);
		$("#mail_1").attr("disabled",false);
		$("#mail_2").attr("disabled",false);
		$("#mail_3").attr("disabled",false);
		$("#mail_4").attr("disabled",false);*/
		}
	else
		{
		$('input[name=tipo_soporte]').attr("disabled",true);
		$('input[name=tipo_soporte]').attr("checked",false);
		habilitaSoporte('tipoA');	
		habilitaSoporte('tipoB');	
		habilitaSoporte('tipoC');
		$('#div_soporte').hide();
		
		/*$("#chat_1").attr("disabled",true);		
		$("#chat_1").val("-");
		$("#chat_2").attr("disabled",true);		
		$("#chat_2").val("-");
		$("#chat_3").attr("disabled",true);		
		$("#chat_3").val("-");
		$("#chat_4").attr("disabled",true);		
		$("#chat_4").val("-");
		$("#tel_1").attr("disabled",true);		
		$("#tel_1").val("-");
		$("#tel_2").attr("disabled",true);		
		$("#tel_2").val("-");
		$("#tel_3").attr("disabled",true);		
		$("#tel_3").val("-");
		$("#tel_4").attr("disabled",true);		
		$("#tel_4").val("-");		
		$("#mail_1").attr("disabled",true);		
		$("#mail_1").val("-");
		$("#mail_2").attr("disabled",true);		
		$("#mail_2").val("-");
		$("#mail_3").attr("disabled",true);		
		$("#mail_3").val("-");
		$("#mail_4").attr("disabled",true);		
		$("#mail_4").val("-");*/
		}
	
	/*var validator = $( "#form_encuesta" ).validate();	
	validator.element( "#chat_1" );		
	//$("#form_encuesta").valid();*/
	
}

function habilitaSoporte(id)
{
	
	var elem="";
	switch (id){
		case 'tipoA':
			elem='chat_';
			break;
		case 'tipoB':
			elem='tel_';
			break;	
		case 'tipoC':
			elem='mail_';
			break;	
	}		
	
	if($("#"+id).is(':checked')){
		$("#"+elem+"1").attr("disabled",false);
		$("#"+elem+"2").attr("disabled",false);
		$("#"+elem+"3").attr("disabled",false);
		$("#"+elem+"4").attr("disabled",false);
	}	
	else{
		$("#"+elem+"1").attr("disabled",true);		
		$("#"+elem+"1").val("-");
		$("#"+elem+"2").attr("disabled",true);		
		$("#"+elem+"2").val("-");
		$("#"+elem+"3").attr("disabled",true);		
		$("#"+elem+"3").val("-");
		$("#"+elem+"4").attr("disabled",true);		
		$("#"+elem+"4").val("-");
	}
}
$(function(){
	
	//Si el navegador es Internet Explorer, se redirecciona al módulo de Internet Explorer
	redirectBrowser();
	
	
	//Esconder el div que muestra los errores del login.
	$("#reslogin").hide();
	
	
	//Validaciones de la pagina vivienda1
	$("#frmIngreso").validate({
		rules: {
			txtUsuario: { 
				required: true,
			    email: true
			},
			txtPassword: {
				required: true
			}
		},
		messages: {
			txtUsuario: { 
				required: "Digite su correo electr\u00f3nico.",
			    email: "No es una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida",
			},
			txtPassword: {
				required: "Debe digitar su contrase\u00f1a."
			}
		},
		errorPlacement: function(error, element) {			
			element.after(error);		        
			error.css('display','inline');
			error.css('margin-left','10px');			
			error.css('color',"#FF0000");					
		},
		submitHandler: function(form) {	
			if(grecaptcha.getResponse() == "")
			    alert("Por favor, verifica que no eres un robot.");
			else{
				//Lanzar AJAX validacion
				$.ajax({
					type: "POST",
					url: base_url + "admin/admin/userAuth",
					data: {						
						'txtUsuario': $("#txtUsuario").val(),
						'txtPassword': $("#txtPassword").val()
					},					
					dataType: "json",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					success: function(data){
						if (data.result){
							$("#reslogin").hide();
							window.location.replace(data.url);
							//location.redirect(data.url);
						}
						else{
							$("#reslogin").html(data.message);
							$("#reslogin").show();
						}						
					},
					error: function(data){
						if (data!=""){
							alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
						}
					}				
				});
			}					
		}
	});
	
	//Envia el usuario hacia el recordatorio de contraseña
	$("#btnReminder").bind("click",function(){
		var url = base_url + "admin/reminder";
		$(location).attr("href",url);
	});	
	
	
	//Envia el usuario hacia el recordatorio de contraseña
	$("#btnRegistra").bind("click",function(){
		var url = base_url + "registrese";
		$(location).attr("href",url);
	});	
	/**
	 * Se cambia el login, por un login AJAX para que pueda mostrar errores en el ingreso de usuario y contraseña
	 * @author Daniel M. Díaz
	 * @since  09/11/2015
	 */
	$("#btnIngresar").bind("click",function(){
		if ($("#frmIngreso").valid()){
			//Validar el captcha
			if(grecaptcha.getResponse() == "")
			    alert("Por favor, verifica que no eres un robot.");
			else{
				//Lanzar AJAX validacion.
				$.ajax({
					type: "POST",
					url: base_url + "admin/admin/userAuth",
					data: {						
						'txtUsuario': $("#txtUsuario").val(),
						'txtPassword': $("#txtPassword").val()
					},					
					dataType: "json",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					success: function(data){
						if (data.result){
							$("#reslogin").hide();
							window.location.replace(data.url);
							//location.redirect(data.url);
						}
						else{
							$("#reslogin").html(data.message);
							$("#reslogin").show();
						}						
					},
					error: function(data){
						if (data!=""){
							alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
						}
					}				
				});
			}
		}		
	});
	
	
});
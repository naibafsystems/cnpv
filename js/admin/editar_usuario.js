/**
 * Funciones JavaScript para editar usuario
 * @author hhchavezv	
 * @since  2016ene14
 */
 
$(function(){ 

	$("#txtClave").bloqueaEspacio();
	$("#txtClave2").bloqueaEspacio();
	
	
	/*	-- Se coloca en danevalidator.js
	
	$.validator.addMethod("emailValido",function (value, element){		
		
		if ( /^[a-zA-Z0-9_\-\.~]{2,}@[a-zA-Z0-9_\-\.~]{2,}\.[a-zA-Z]{2,3}$/.test(value)  )  {
				return true;
			}
			else{
				return false;		
			}
	},"");
	*/
	
	$("#formEditUsuario").validate({
		
		//Reglas de Validacion
		rules : {
			txtUsuario    : {	required	:	true , emailValido:true  
			},
			/*selEstado    : {	comboBox   :  '-'
			},*/
			txtClave    : {	  minlength:6 , maxlength:30 , 
							  //expresion : ' !($("#txtClave").val().match(/[A-Z]/))  || !($("#txtClave").val().match(/\d/))'
							  //expresion : ' !($("#txtClave").val().match(/[A-Z]/))'
							  
			},
			txtClave2    : {	expresion: '($("#txtClave").val() !="") && ($("#txtClave2").val()=="") ',
								expresion2: '$("#txtClave").val() != $("#txtClave2").val() '
			}					            
			
		},
		//Mensajes de validacion
		messages : {	
			txtUsuario    : {	required	:	"Diligencie el correo electr&oacute;nico con el que ingresar&aacute; el usuario.", 
								emailValido : 	"No es una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida"
			},
			/*selEstado    : {	comboBox   :  'Seleccione una opci&oacute;n'
			},*/
			txtClave :{ minlength:"Debe tener al menos seis (6) caracteres",
						maxlength:"M&aacute;ximo treinta (30) caracteres",
						//expresion:"Debe tener al menos: una letra may\u00fascula y un n\u00famero"
						
			},
			txtClave2 :{ expresion: "Repita la contrase&ntilde;a",
						 expresion2: "No coincide con la digitada en el campo anterior."
			}
			
		},
		//Mensajes de error
		errorPlacement: function(error, element) {
			element.after(error);		        
			error.css('display','inline');
			error.css('margin-left','10px');				
			error.css('color',"#FF0000");
			
		//	$(element).focus();
		},
		submitHandler: function(form) {
			return true;
			
		}
	});
	
	$("#btnEditarUsuario").click(function(){		
	
		if ($("#formEditUsuario").valid() == true){
		
				
			if(window.confirm('Haga clic en Aceptar para guardar'))
			{
			//Activa icono guardando
			$('#btnEditarUsuario').attr('disabled','-1');
			$("#div_guardado").css("display", "none");
			$("#div_error").css("display", "none");
			$("#div_msj").css("display", "none");
			$("#div_cargando").css("display", "inline");
			
				$.ajax({
					type: "POST",
					url: base_url + "admin/updateUsuario",					
					
					data: $("#formEditUsuario").serialize(),
					//dataType: "html",
					dataType: "json",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					
					success: function(data){
						if( data.result == "email" )// email ya existe
						{
							alert('El correo electr\xf3nico ya existe');
							$("#div_cargando").css("display", "none");
							$('#btnEditarUsuario').removeAttr('disabled');							
							
							$("#span_msj").html("El correo electr\xf3nico ya existe");
							$("#div_msj").css("display", "inline");
							return false;
						
						}
											
					  if( data.result )//true
						{	
							//Oculta icono guardando
							$("#div_cargando").css("display", "none");
							$("#div_guardado").css("display", "inline");
							
							alert('Se actualiz\xf3 correctamente.');
							var url = base_url + "admin/mostrarDetalleUsuario/"+data.formulario;    
							$(location).attr("href",url);
							
							$('#btnEditarUsuario').removeAttr('disabled');
							
						}
						else
						{
							alert('Error al guardar. Intente nuevamente o actualice la p\u00e1gina.');
							$("#div_cargando").css("display", "none");
							$("#div_error").css("display", "inline");
							$('#btnEditarUsuario').removeAttr('disabled');
						}	
					},
					error: function(result) {
						alert('Error al guardar. Intente nuevamente o actualice la p\u00e1gina.');
						$("#div_cargando").css("display", "none");
						$("#div_error").css("display", "inline");
						$('#btnEditarUsuario').removeAttr('disabled');
					}
					
		
				});	
			}
			
		}//if			
	});
	
	
	$("#txtClave").blur(function(){
		if( $("#txtClave").val() !="" )
			validaClave( $("#txtClave").val() );
	});
	
	
	
	
	
});//End	

/**
 * Valida que una clave tenga numeros y letras mayusculas
 * @author hhchavezv	
 * @since  2016ene14
 */
function validaClave(pswd)
{
	var texto="";
	var cuenta=0;
		
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
		texto=texto+"\n\n";
		if (cuenta==1)
		{
			alert ("Por favor tenga en cuenta que la contrase\xf1a:\n"+texto);
			$("#txtClave").val("");
		}
		

}


/**
 * Funcion para evitar caracter espacio en caja de texto
 * @author hhchavezv	
 * @since  2016ene27
 */
	$.fn.bloqueaEspacio = function() {
		
		return this.keypress(function(event)
		{
			if ( (event.which == 32) ) //espacio
				return false;
			else
				return true;
		});     
	};
	
	
	
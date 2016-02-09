/**
 * Funciones JavaScript Para el Módulo de Inicio
 * @author Daniel M. Díaz
 * @since  23/09/2015
 */


$(function(){
	
	//Si el navegador es Internet Explorer, se redirecciona al módulo de Internet Explorer
	redirectBrowser();
	
	//Lanzar AJAX para averiguar el estado de avance del formulario. Cada módulo da avance del 25%.
	actualizarAvance();
		
});



/**
 * Ejecuta una función AJAX que consulta el estado de avance del diligenciamiento del formulario y actualiza la barra de progreso
 * @author dmdiazf	
 * @since  21/10/2015  
 **/
function actualizarAvance(){	
	
	$.ajax({
		type: "POST",
		url: base_url + "inicio/inicio/actualizarAvance",
		data: {},					
		dataType: "json",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			
			var avance = data.avance;
			var porcent = data.avance.toString() + "%";
			$("#progressbar").css("width",porcent);
			
			//var hoy = obtenerFecha(); //obtener fecha actual con javascript			
			var hoy = new Date("2016-03-02"); //!!! ELIMINAR ESTA LINEA Y QUITAR EL COMENTARIO DE LA ANTERIOR !!! POR FAVOR !!!
			
			var ini = new Date(data.fec_ini); //fecha de inicio de la inscripcion
			var fin = new Date(data.fec_fin); //fecha de fin de la inscripcion
			var inid = new Date(data.fec_inid); //Fecha de inicio del diligenciamiento
			var find = new Date(data.fec_find); //Fecha de fin del diligenciamiento
			
			//Si la fecha actual se encuentra dentro del rango de inscripciones, habilito el registro y desahbilito los demás modulos
			if ((hoy >= ini)&&(hoy <= fin)){
				//Click del panel Registro
				$("#panelRegistro").removeClass("panel panel-disabled");
				$("#panelRegistro").addClass("panel panel-yellow");			
				$("#panelRegistro").bind("click",function(){
					var url = base_url + "registro";    
					$(location).attr("href",url);					
				});
				
				//Bloqueo panel de vivienda
				var img = base_url + "/images/blank.png";
				$("#imgmod1").attr("src",img);
				$("#panelVivienda").removeClass("panel panel-red");
				$("#panelVivienda").addClass("panel panel-disabled");
				$("#panelVivienda").bind("click",function(){
					return false;
				});
				
				//Bloqueo panel de hogar
				var img = base_url + "/images/blank.png";
				$("#imgmod2").attr("src",img);
				$("#panelHogar").removeClass("panel panel-green");
				$("#panelHogar").addClass("panel panel-disabled");
				$("#panelHogar").bind("click",function(){
					return false;
				});
				
				//Bloqueo panel de personas
				var img = base_url + "/images/blank.png";
				$("#imgmod3").attr("src",img);
				$("#panelHogar").removeClass("panel panel-blue");
				$("#panelHogar").addClass("panel panel-disabled");
				$("#panelHogar").bind("click",function(){
					return false;
				});
				
			}
			else{
				//Si la fecha actual se encuentra dentro del rango de diligenciamiento, debo preguntar si ya termino el registro. Si ya lo hizo, 
				//bloqueo el registro y habilito todos los demás paneles.
				if ((hoy >= inid)&&(hoy <= find)){
					if (data.campo0==2){
						var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
						$("#imgmod0").attr("src",img);
						
						if (data.campo1==2){
							var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
							$("#imgmod1").attr("src",img);
						}
						//Habilitar el modulo de vivienda				
						$("#panelVivienda").removeClass("panel panel-disabled");
						$("#panelVivienda").addClass("panel panel-red");				
						$("#panelVivienda").bind("click",function(){
							var url = base_url + "vivienda";    
							$(location).attr("href",url);					
						});
						
						if (data.campo2==2){
							var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
							$("#imgmod2").attr("src",img);
						}
						//Habilitar el modulo de hogar
						$("#panelHogar").removeClass("panel panel-disabled");
						$("#panelHogar").addClass("panel panel-green");
						$("#panelHogar").bind("click",function(){
							$("html, body").scrollTop(0);
							var url = base_url + "hogar";    
							$(location).attr("href",url);
						});
						
						if (data.campo3==2){
							var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
							$("#imgmod3").attr("src",img);
						}
						//Habilitar el modulo de personas
						$("#panelPersonas").removeClass("panel panel-disabled");
						$("#panelPersonas").addClass("panel panel-blue");
						$("#panelPersonas").bind("click",function(){
							var url = base_url + "persona";    
							$(location).attr("href",url);
						});
						
						
						//Mostrar ó esconder la barra de desplazamiento y el botón de envío del formulario (con base en los estados de los modulos y el estado general del formulario)
						//@author dmdiazf
						//@since  29/10/2015
						
						console.log(data);
						
						
						if ((data.campo0==2)&&(data.campo1==2)&&(data.campo2==2)&&(data.campo3==2)){ //Valida el estado de cada uno de los módulos
							if (data.campo4>=11){ //Valida el estado general del formulario
								mostrarEnvioFormulario();								
							}
					    }
						
						
					}
					else{
						//NO se ha terminado de completar el registro
						//Click del panel Registro
						$("#panelRegistro").removeClass("panel panel-disabled");
						$("#panelRegistro").addClass("panel panel-yellow");			
						$("#panelRegistro").bind("click",function(){
							var url = base_url + "registro";    
							$(location).attr("href",url);					
						});
						
						//Bloqueo panel de vivienda
						var img = base_url + "/images/blank.png";
						$("#imgmod1").attr("src",img);
						$("#panelVivienda").removeClass("panel panel-red");
						$("#panelVivienda").addClass("panel panel-disabled");
						$("#panelVivienda").bind("click",function(){
							return false;
						});
						
						//Bloqueo panel de hogar
						var img = base_url + "/images/blank.png";
						$("#imgmod2").attr("src",img);
						$("#panelHogar").removeClass("panel panel-green");
						$("#panelHogar").addClass("panel panel-disabled");
						$("#panelHogar").bind("click",function(){
							return false;
						});
						
						//Bloqueo panel de personas
						var img = base_url + "/images/blank.png";
						$("#imgmod3").attr("src",img);
						$("#panelHogar").removeClass("panel panel-blue");
						$("#panelHogar").addClass("panel panel-disabled");
						$("#panelHogar").bind("click",function(){
							return false;
						});
						
					}
				}
			}
			
			
			
		
			
			
			/*******
			var avance = data.avance;
			var porcent = data.avance.toString() + "%";
			$("#progressbar").css("width",porcent);
			
			//Click del panel Registro
			$("#panelRegistro").removeClass("panel panel-disabled");
			$("#panelRegistro").addClass("panel panel-yellow");			
			$("#panelRegistro").bind("click",function(){
				var url = base_url + "registro";    
				$(location).attr("href",url);					
			});			
			
			if (data.campo0==2){
				var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
				$("#imgmod0").attr("src",img);
				//Habilitar el modulo de vivienda				
				$("#panelVivienda").removeClass("panel panel-disabled");
				$("#panelVivienda").addClass("panel panel-red");				
				$("#panelVivienda").bind("click",function(){
					var url = base_url + "vivienda";    
					$(location).attr("href",url);					
				});
			}
			
			if (data.campo1==2){
				var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
				$("#imgmod1").attr("src",img);
				//Habilitar el modulo de hogar
				$("#panelHogar").removeClass("panel panel-disabled");
				$("#panelHogar").addClass("panel panel-green");
				$("#panelHogar").bind("click",function(){
					$("html, body").scrollTop(0);
					var url = base_url + "hogar";    
					$(location).attr("href",url);
				});
			}
			
			if (data.campo2==2){
				var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
				$("#imgmod2").attr("src",img);
				//Habilitar el modulo de personas
				$("#panelPersonas").removeClass("panel panel-disabled");
				$("#panelPersonas").addClass("panel panel-primary");
				$("#panelPersonas").bind("click",function(){
					var url = base_url + "persona";    
					$(location).attr("href",url);
				});
			}
			
			if (data.campo3==2){
				var img = base_url + "/images/tick.png"; //Ajustar imagenes de completado en cada modulo
				$("#imgmod3").attr("src",img);
			}
			
			//Mostrar ó esconder la barra de desplazamiento y el botón de envío del formulario (con base en los estados de los modulos y el estado general del formulario)
			//@author dmdiazf
			//@since  29/10/2015
			 
			if ((data.campo0==2)&&(data.campo1==2)&&(data.campo2==2)&&(data.campo3==2)){ //Valida el estado de cada uno de los módulos
				if (data.campo4>=11){ //Valida el estado general del formulario
					mostrarEnvioFormulario();
				}
		    }
		    *****/
			
		},
		error: function(data){
			if (data.status!=200){
				alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());
			}
		}		
	});
	
	
}


/**
 * Obtiene la fecha actual desde javascript en formato yyyy-mm-dd
 * @author dmdiazf
 * @since  20/01/2016
 */
function obtenerFecha(){
	var fecha = new Date();
	var ano = fecha.getFullYear();
	var mes = (parseInt(fecha.getMonth()+1) < 9)?"0"+parseInt(fecha.getMonth()+1):parseInt(fecha.getMonth()+1);
	var dia = fecha.getDate();
	var strFecha = ano + "-" + mes + "-" + dia;
	return new Date(strFecha);
}



/**
 * Muestra el boton de envio de formulario cuando el formulario ha sido diligenciado completamente
 * @author dmdiazf
 * @since  29/10/2015
 **/
function mostrarEnvioFormulario(){	
	$("#barfinal").html('<div style="text-align: center;"><button type="button" id="btnSatisfaccion" class="btn btn-lg btn-primary">Enviar Formulario</button></div>');
	$("#btnSatisfaccion").bind("click",function(){		
		var url = base_url + "encuesta/";
		$(location).attr("href",url);
	});
}




/**
 * Pruebas crono - Cronometrar el tiempo que demora cada usuario respondiendo una pregunta.
 * Cuando el usuario acceda al javascript de inicio se debe crear la primera entrada de hora de inicio del JS
 * @author dmdiazf
 * @since  14/01/2016
 **/
function marcaCrono(item){
	//Que pasa si dos usuarios distintos responden ???
	//Que pasa con el array crono ???
	//Se cruzan las respuestas ???
	var tiempo = new Date();
	crono.push(tiempo.getHours() + ":" + tiempo.getMinutes() + ":" + tiempo.getSeconds());
}
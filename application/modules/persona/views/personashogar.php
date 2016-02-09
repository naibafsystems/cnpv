<div id="c4p65_lim_ppal1">
	<script>
		function btnActualiza(nro_pers)
		{
			$.ajax({
				type: "GET",
				url: base_url + "persona/persona/iniciaActualiza",
				
				data: "nro_pers=" + nro_pers,
				dataType: "html",
				contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				cache: false,
				success: function(data){
					$("#c4p65_lim_ppal1").html(data);
				},
				error: function(data)
				{
					if (data!="")
					{
						alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
					}
				}				
			});	
		}
		function finalizaPersonas()
		{
			var url = base_url + "inicio";
			$(location).attr("href",url);
		}
	</script>
	<div class="col-md-2">
		<img src="<?php echo base_url("/images/personas.png"); ?>"/>
	</div>
	<div id="page0" class="row col-md-10">
		<form id="frmPage0" name="frmPage0" method="post" action="">
			<?php
				$personaHogar=$this->modpersona->consultarPersonasHogar();
			?>
			<h1>Persona(s) del hogar</h1>
			<br />
			<div class="row">
				<div class="col-md-5">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="text">
					  			<label>PERSONA(S)</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div>
						<div>
							<div >
					  			<label>&nbsp;</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			for($i=0;$i<count($personaHogar);$i++)
			{	
			?>
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
				  			<label><?php echo $personaHogar[$i]["C4P42A_1ER_NOMBRE"].' '.$personaHogar[$i]["C4P42B_1ER_APELLIDO"];?></label>
						</div>
					</div>
					<div class="col-md-5">
						
							<?php
								if($personaHogar[$i]["PERSONA_HOGAR_CCNTROL"]!='99')
								{
								?>
									<label><a class="btn btn-sm btn-warning" id="btnActualiza" name="btnActualiza" onclick="btnActualiza(<?php echo $personaHogar[$i]["C4P41_NRO_PER"];?>);">Registrar datos</a></label>
									
								<?php 
								}
								else
								{		if (isset($editar)){ 
											$idpersona = $personaHogar[$i]["C4P41_NRO_PER"]; ?>
											<p><a class="btn btn-sm btn-primary" style="color: #fff;" href="<?php echo site_url("/persona/editar/$idpersona"); ?>">Editar Registro</a>&nbsp; &nbsp;<img  src="<?php echo base_url("images/tick.png"); ?>" title="Registro Finalizado" width="20" height="20" > Registro Finalizado.</p>
								<?php 	}
								?>
									<!-- <label>Registro Actualizado.</label> -->
								<?php
								}
							?>
						
					</div>
				</div>
			<?php 
			}
			?>
			
			<?php if( $finaliza ) { ?>
			<br><br>
			<div class="row">
					<div class="col-md-12" align="center">
						<a class="btn btn-md btn-success" style= id="btnFinPersonas" name="btnFinPersonas" onClick="finalizaPersonas();" >&nbsp;&nbsp;&nbsp;Finaliza Personas&nbsp;&nbsp;&nbsp;</a></label>
					</div>
			</div>		
			<?php }?>
		</form>
	</div>
</div>

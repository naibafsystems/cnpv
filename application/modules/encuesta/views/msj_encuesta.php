<script src="<?php echo base_url("/js/encuesta/encuesta.js"); ?>" rel="stylesheet"></script>
<div class="page-header">
	<h1>e-censo / Finalizado</h1>
</div>

<div class="row">
	
	<div class="col-md-2" style="text-align: center;">
		<?php echo $qrcode; ?>
		<h4><?php echo $codigo; ?></h4>
	</div>
	
	<div class="col-md-10">
		<h4> Apreciado <?php echo $nombre; ?>, </h4>
		<br>
		<h5>Gracias por su participaci&oacute;n en la construcci&oacute;n del Primer Censo Electr&oacute;nico de Poblaci&oacute;n y Vivienda del Pa&iacute;s. Con ello ha contribuido en la construcci&oacute;n de un pa&iacute;s moderno e incluyente.</h5>

	</div>
	
</div>
<br>
<div class="row">
			<div class="col-md-12" align="center"> 
				<button type="button" id="btnDescarga" name="btnDescarga" class="btn btn-sm btn-primary">Descargar Certificado</button>
			</div>
</div>
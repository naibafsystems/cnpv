
<!-- incluir javascripts de vivienda -->
<script src="<?php echo base_url("/js/vivienda/vivienda.js"); ?>" rel="stylesheet"></script>
<div class="page-header">
	<h1>e-censo / vivienda</h1>
</div>

<div class="row">
	<div class="col-md-2">
		<img src="<?php echo base_url("/images/hogar.png"); ?>"/>
	</div>
	<div class="col-md-10">
		<?php $this->load->view("vivienda0"); ?>
		<?php $this->load->view("vivienda1"); ?>
		<?php $this->load->view("vivienda2"); ?>
		<?php $this->load->view("vivienda3"); ?>
		<?php $this->load->view("vivienda4"); ?>
	</div>
</div>
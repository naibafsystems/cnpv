<script src="<?php echo base_url("/js/persona/persona.js"); ?>" rel="stylesheet"></script>
<?php 
	if($UsuarioSession!="") echo $UsuarioSession;
?>
<div class="page-header">
	<h1>e-censo / personas</h1>
</div>

<div class="row">
	<div class="col-md-2">
		<img src="<?php echo base_url("/images/personas.png"); ?>"/>
	</div>
	<div class="col-md-10">
		<?php $this->load->view("persona1"); ?>
		<?php $this->load->view("persona2"); ?>
		<?php $this->load->view("persona3"); ?>
		<?php $this->load->view("persona4"); ?>
		<?php $this->load->view("persona5"); ?>
		<?php $this->load->view("persona6"); ?>
		<?php $this->load->view("persona7"); ?>
		<?php $this->load->view("persona8"); ?>
		<?php $this->load->view("persona9"); ?>
		<?php $this->load->view("persona10"); ?>
		<?php $this->load->view("persona11"); ?>
		<?php $this->load->view("persona11_1"); ?>
		<?php $this->load->view("persona12"); ?>
		<?php $this->load->view("persona13"); ?>
		<?php $this->load->view("persona14"); ?>
		<?php $this->load->view("persona15"); ?>
		<?php $this->load->view("persona16"); ?>
		<?php $this->load->view("persona17"); ?>
		<?php $this->load->view("persona18"); ?>
		<?php $this->load->view("persona19"); ?>
		<?php $this->load->view("persona20"); ?>
		<?php $this->load->view("persona21"); ?>
	</div>
</div>
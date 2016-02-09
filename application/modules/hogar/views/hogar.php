<script src="<?php echo base_url("/js/hogar/hogar.js"); ?>" rel="stylesheet"></script>
<div class="page-header">
	<h1>e-censo / hogar</h1>
</div>

<div class="row">
	<div class="col-md-2">
		<img src="<?php echo base_url("/images/hogar.png"); ?>"/>
	</div>
	<div class="col-md-10">
		<?php	$this->load->view("hogar1"); 
				$this->load->view("hogar2");
				$this->load->view("hogar3");
				$this->load->view("hogar4");
				$this->load->view("hogar5");
				$this->load->view("hogar6");
				$this->load->view("hogar7");
				$this->load->view("hogar8");
				$this->load->view("hogar9"); ?>
		
		
		
	</div>
</div>





<?php /****

<?php $this->load->view("vivienda1"); ?>

<?php $this->load->view("vivienda3"); ?>
<?php $this->load->view("vivienda4"); ?>
<?php $this->load->view("vivienda5"); ?>


	****/

?>
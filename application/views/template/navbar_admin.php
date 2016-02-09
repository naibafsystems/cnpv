<nav class="navbar navbar-default navbar-fixed-top" style="z-index: 20000">
	<div class="container-fluid">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="<?php echo site_url("/inicio"); ?>"> <img src="<?php echo base_url("images/logo-censo.png"); ?>"> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
        	<ul class="nav navbar-nav">
            	<li class="active"><a href="<?php echo site_url("admin/inicio"); ?>">Inicio</a></li>
				<li class="active"><a href="<?php echo site_url("admin/usuarios"); ?>">Usuarios Diligencian</a></li>
				<li class="active"><a href="<?php echo site_url("admin/personas"); ?>">Personas Hogar</a></li>
            	<!-- 
            	<li><a href="#about">About</a></li> 
            	<li><a href="#contact">Contact</a></li> 
            	<li class="dropdown">
              		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              		<ul class="dropdown-menu">
                		<li><a href="#">Action</a></li>
                		<li><a href="#">Another action</a></li>
                		<li><a href="#">Something else here</a></li>
                		<li role="separator" class="divider"></li>
                		<li class="dropdown-header">Nav header</li>
                		<li><a href="#">Separated link</a></li>
                		<li><a href="#">One more separated link</a></li>
              		</ul>
            	</li>
            	-->
            	<li><a href="<?php echo site_url("/admin/salir"); ?>">Salir</a></li>            	
          	</ul>
        </div><!--/.nav-collapse -->
        	
		<div class="clearfix"></div>
		
	</div>
</nav>
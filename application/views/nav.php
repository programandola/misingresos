<ul class="nav nav-tabs">
  <li><a href="<? echo base_url() ?>">Home</a></li>
  <?php
  if( $this->uri->segment(1) == "ingresos" ){
  	?>
  	<li class="active"><a href="<? echo base_url() ?>ingresos">Ingresos</a></li>
  	<?
  }else{
  	?>
  	<li><a href="<? echo base_url() ?>ingresos">Ingresos</a></li>
  	<?
  }
  if( $this->uri->segment(1) == "egresos" ){
  	?>
  	<li class="active"><a href="<? echo base_url() ?>egresos">Egresos</a></li>
  	<?
  }else{
  	?>
  	<li><a href="<? echo base_url() ?>egresos">Egresos</a></li>
  	<?
  }
  if( $this->uri->segment(1) == "ganancias" ){
  	?>
  	<li class="active"><a href="<? echo base_url() ?>ganancias">Ganancia Neta</a></li>
  	<?
  }else{
  	?>
  	<li><a href="<? echo base_url() ?>ganancias">Ganancia Neta</a></li>
  	<?
  }
  ?>
</ul>
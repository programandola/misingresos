<section class="section-main">
   <div class="container">
       <div class="row">
       		<div class="espacio"></div>
    		<div class="col-md-6">
    			<img src="<? echo base_url()?>public/images/logomisingresos.png">
    		</div>
    		<div class="col-md-6">
    			<h1>BIENVENIDO A</h1>
    			<p>MAS INGRESOS</p>
    		</div>
    		<div class="col-md-12">
    		<hr style=" height:8px; background-color:#bf1e2d">
    		</div> 

    		<div class="col-md-12">
    			<div class="espacio"></div>
    			<center>
    				<div class="login">
    					<h1>INGRESO AL SISTEMA</h1>
		    			<div id="divResultAjaxLogin" class="alert alert-danger" style="width:25%"></div>
		    			<table>
							<tr>
								<td valign="top"><img src="<? echo base_url()?>public/images/user-icon.png">&nbsp;</td>
								<td><input class="input-text" type="text" id="login" placeholder="Usuario"></td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr>
								<td valign="top"><img src="<? echo base_url()?>public/images/password.png">&nbsp;</td>
								<td><input class="input-text" type="password" id="pass" placeholder="Contraseña"></td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<? echo base_url()?>public/images/admiracion-icon.png" class="admiracion">&nbsp; <a title="Recupera tu Contraseña" href="javascript:void(0);" onclick="show_login_password();">He olvidado mi usuario y contraseña</a>
								<br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="login('<?php echo base_url()?>login/logea')" value="Ingresar"  class="btn btn-default">
								
								</td>
							</tr>
						</table>
    				</div>
    				<div class="login" id="recupera_password">
    					<h1>RECUPERAR PASSWORD</h1>
    					<div id="ajaxRecuperaPassword" class="alert alert-danger" style="width:25%"></div>
		    			<table>
							<tr>
								<td valign="top"><img src="<? echo base_url()?>public/images/user-icon.png">&nbsp;</td>
								<td><input class="input-text" type="text" id="correo" placeholder="Ingresa tu correo electrónico"></td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr>
								<td colspan="2">
								<input type="button" onclick="return recupera_password('<? echo base_url() ?>login/recupera_password')" value="Enviar"  class="btn btn-default">
								
								<input type="button" onclick="show_login_password()" value="<<Regresar"  class="btn btn-default">
								
								</td>
							</tr>
						</table>
    				</div>
	    			
				</center>
    		</div>
       	</div>
   </div>
</section>
<?php
	$this->load->view('footer.php');
?>
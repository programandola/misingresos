<?php
    $this->load->view('pop-ups.php');
?>
<section class="section-main">
    <center>
       <div class="container">
           <div class="row">
                <?php
                    $this->load->view('header.php');
                ?>
                <div class="col-md-12" style="margin-top:30px">
                    <?php $this->load->view('nav.php'); ?>
                    
                    <!--
                    begin GRILLA PARA AJAX
                    -->

                    <div id="ajaxGrilla">
                            <div class="div-add-cliente">
                                <h2>Datos de Perfil</h2>
                                <div id="ajaxFail" class="alert alert-danger"></div>
                                <form role="form">
                                  <table>
                                      <tr>
                                        <td>Nombre:<br>
                                        <input type="text" id="nombre" class="form-control" value="<? echo $user->nombre ?>"/></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>Correo Electrónico:<br>
                                            <input type="text" id="correoelectronico" class="form-control"  value="<? echo $user->correo ?>"/></td>
                                      </tr>
                                  </table>
                                  <hr>
                                  <input type="checkbox" id="checkpass"> <b>Cambiar Password</b>
                                  <div class="div-hide">
                                      <h2>Cambiar Password</h2>
                                      <table>
                                          <tr>
                                              <td>Password actual:<br>
                                                <input type="password" id="passactual" class="form-control" /></td>
                                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td>Password nuevo:<br>
                                                <input type="password" id="passnew" class="form-control" /></td>
                                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                              <td>Confirmar Password:<br>
                                                <input type="password" id="passnewc" class="form-control" /></td>
                                          </tr>
                                      </table>
                                  </div>
                                  
                                  <br><br><br>
                                  <input type="button" value="Actualizar" class="btn btn-success" onclick="update_user('<? echo base_url() ?>miperfil/update_user');">
                                  <button type="button" class="btn btn-warning" onclick="redirect('<? echo base_url() ?>home')">Cancelar</button>
                                </form>
                            </div>
                            <div class="div-success">
                                <p><img src="<? echo base_url() ?>public/images/Palomita.png"> Se actualizo el usuario correctamente</p>
                                <center><input type="button" value="Ir a Home" class="btn btn-info" onclick="redirect('<? echo base_url() ?>home');"></center>
                                <br>
                            </div>
                    </div>
                    <!-- end grilla ajax -->
                </div>
            </div>
       </div>
   </center>
</section>
<?php
    $this->load->view('footer.php');
?>
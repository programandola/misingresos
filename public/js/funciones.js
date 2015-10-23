$(document).ready(function(){

    $("#buscar").change(function(){
        
        if($("#buscar").find(':selected').val()=="cliente" ){
          $(".div-cliente").show("slow");
          $(".div-fecha").hide("slow");
        }else
            if($("#buscar").find(':selected').val()=="fecha" ) {
              $(".div-cliente").hide("slow");
              $(".div-fecha").show("slow");
        }

    });

  //apertura popup cerrar sesion usuario
  $('#cerrar-sesion').click(function(){
        $('#popup-cerrar-sesion').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close-cerrar-sesion').click(function(){
        $('#popup-cerrar-sesion').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });

    $('#boton-cancela').click(function(){
        $('#popup-cerrar-sesion').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });

   
    //close vista pagos
     $('.close').click(function(){
        $('#popup-vista-pagos').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });

     //close vista pagos
     $('.close-clientes').click(function(){
        $('#popup-vista-clientes').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });


    //auto completar
    $("#auto-completar").keyup(function(){
        if( $('#auto-completar').val() != "" ){
          $('.contenedor').show();
        }else{
          $('.contenedor').hide();
        }
        
        $.ajax({
          url:'http://www.masviajes.com.mx/gestionpagos/autocomplete/autocompletar',
          async:true,
          data:"letra="+$("#auto-completar").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            $(".contenedor").html(datos); 
          },
          type:"POST",
          timeout:10000,
        }); 
                   
    });

    //funcion para mostrar fecha - ingresos
    $(".option").click(function(){

      if(this.value == "otrafecha"){

        $(".div-hide").show();

      }else
          if(this.value == "fechactual"){

            var f = new Date();

            $("#fechaelegida").val( f.getFullYear() + "-" + (f.getMonth()+1) + "-" + f.getDate() );

            $(".div-hide").hide();

      }

    });

    //checkbox change password
    $("#checkpass").click(function(){

      $(".div-hide").toggle("slow");

    });

});




function login(ruta){
   $("#divResultAjaxLogin").show();
   $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#divResultAjaxLogin").html("Validando...");
          },
          data:"login="+$("#login").val()+"&pass="+$("#pass").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="Success"){
              $("#divResultAjaxLogin").removeClass("alert alert-danger").addClass("alert alert-success");
              window.location='http://localhost/iegresos/home';
            }
            $("#divResultAjaxLogin").html(datos); 
            close_alert_box("#divResultAjaxLogin");
          },
          type:"POST",
          timeout:10000,
        });

}

function show_login_password(){

  $(".login").toggle("slow");

}



//BEGIN INGRESOS ///////////////////////////////////////////////////////////////////////

function formu_ingreso(ruta){
  $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });
}

function add_ingreso(ruta){
    $("#ajaxFail").show();
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxFail").html('procesando...');
          },
          data:'concepto='+$("#concept").val()+'&descripcion='+$("#descripcion").val()+'&ingreso='+$("#ingreso").val()+'&fecha='+$("#fechaelegida").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="success"){
              $(".div-add-cliente").hide();
              $(".div-success").show();
            }else{
               $("#ajaxFail").html(datos); 
               close_alert_box('#ajaxFail');
             }
          },
          type:"POST",
          timeout:10000,
        });
  
}

function edit_ingreso(ruta, id_ingreso){
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          data:"id_ingreso="+id_ingreso,
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });
}

function update_ingreso(ruta){
     $("#ajaxFail").show();
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxFail").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          data:'concepto='+$("#concept").val()+'&descripcion='+$("#descripcion").val()+'&ingreso='+$("#ingreso").val()+'&fecha='+$("#fechanueva").val()+"&id_ingreso="+$("#id_ingreso").val(),
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="success"){
              $(".div-add-cliente").hide(); 
              $(".div-success").show();
            }else{
              $("#ajaxFail").html(datos); 
               close_alert_box('#ajaxFail');
            }
            
            
          },
          type:"POST",
          timeout:10000,
        });
}



function search_ingresos_fecha(ruta){

  if( $("#fechaDe").val() == "" || $("#fechaA").val() == "" ){
    $("#errorFechas").show();
    $("#errorFechas").html("Ingresa las fechas");
    return false;
  }

  $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('<img src="http://localhost/iegresos/public/images/loading.gif">');
          },
          data:"fechaDe="+$("#fechaDe").val()+"&fechaA="+$("#fechaA").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
              $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });

}

//END INGRESOS//////////////////////////////////////////////////////////////////////////


//BEGIN EGRESOS/////////////////////////////////////////////////////////////////////////

function formu_egreso(ruta){
  $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });
}

function add_egreso(ruta){
    $("#ajaxFail").show();
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxFail").html('procesando...');
          },
          data:'concepto='+$("#concept").val()+'&descripcion='+$("#descripcion").val()+'&egreso='+$("#egreso").val()+'&fecha='+$("#fechaelegida").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="success"){
              $(".div-add-cliente").hide();
              $(".div-success").show();
            }else{
               $("#ajaxFail").html(datos); 
               close_alert_box('#ajaxFail');
             }
          },
          type:"POST",
          timeout:10000,
        });
  
}

function edit_egreso(ruta, id_egreso){
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          data:"id_egreso="+id_egreso,
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });
}

function update_egreso(ruta){
     $("#ajaxFail").show();
    $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxFail").html('loading...');
          },
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          data:'concepto='+$("#concept").val()+'&descripcion='+$("#descripcion").val()+'&egreso='+$("#egreso").val()+'&fecha='+$("#fechanueva").val()+"&id_egreso="+$("#id_egreso").val(),
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="success"){
              $(".div-add-cliente").hide(); 
              $(".div-success").show();
            }else{
              $("#ajaxFail").html(datos); 
               close_alert_box('#ajaxFail');
            }
          },
          type:"POST",
          timeout:10000,
        });
}

function search_egresos_fecha(ruta){

  if( $("#fechaDe").val() == "" || $("#fechaA").val() == "" ){
    $("#errorFechas").show();
    $("#errorFechas").html("Ingresa las fechas");
    return false;
  }

  $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxGrilla").html('<img src="http://localhost/iegresos/public/images/loading.gif">');
          },
          data:"fechaDe="+$("#fechaDe").val()+"&fechaA="+$("#fechaA").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
              $("#ajaxGrilla").html(datos); 
          },
          type:"POST",
          timeout:10000,
        });

}


//END EGRESOS/////////////////////////////////////////////////////////////////////////



//FUNCIONES//////////////////////////////////////////////////////////////////////////

function update_user(ruta){
   $("#ajaxFail").show();
   if( $("#checkpass").prop('checked')  ){
     var datos="nombre="+$("#nombre").val()+"&correo="+$("#correoelectronico").val()+"&passactual="+$("#passactual").val()+"&passnew="+$("#passnew").val()+"&passnewc="+$("#passnewc").val();
   }else{
      var datos="nombre="+$("#nombre").val()+"&correo="+$("#correoelectronico").val();
   }

   $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxFail").html('<img src="http://localhost/iegresos/public/images/loading.gif">');
          },
          data:datos,
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
              if(datos == "Tus datos se actualizaron correctamente"){
                $(".div-add-cliente").hide();
                $(".div-success").show();
              }else{
                $("#ajaxFail").html(datos);  
              }
          },
          type:"POST",
          timeout:10000,
        });

}


function recupera_password(ruta){
  $("#ajaxRecuperaPassword").show(); 
  $.ajax({
          url:ruta,
          async:true,
          beforeSend: function(datos){
            $("#ajaxRecuperaPassword").html('<img src="http://localhost/iegresos/public/images/loading.gif">');
          },
          data:"correo="+$("#correo").val(),
          dataType:"html",
          contentType:"application/x-www-form-urlencoded",
          error:function(){
              alert("ha ocurrido un error");
          },
          ifModified:false,
          processData:true,
          success:function(datos){//recibe los datos que fueron llamados
            if(datos=="Se envio un email a tu cuenta de correo para restablecer el password"){
              $("#ajaxRecuperaPassword").removeClass("alert alert-danger").addClass("alert alert-success");
            }
              $("#ajaxRecuperaPassword").html(datos);   
          },
          type:"POST",
          timeout:10000,
        });

}


function delete_registro(ruta, mensaje){
  if(confirm(mensaje)){
    window.location=ruta;
  }
 
}

function otra_fecha(){
  $("#fechaelegida").val( $("#fechanueva").val() );
}

function expandir_detalle(id, detalle){
   $(id).html(detalle);
}

function esconde_div(cual){

  $(cual).hide("slow");

}

function cerrar_sesion(ruta){
  
  window.location=ruta;

}

function home(){
  window.location="http://localhost/iegresos/home";
}

function redirect(ruta){
  window.location=ruta;
}

function close_alert_box(id){
  $(id).delay(5000)
  $(id).fadeOut('slow'); 
}


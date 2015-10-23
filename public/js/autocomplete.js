$(document).ready(function(){
    //utilizamos el evento keyup para coger la información
    //cada vez que se pulsa alguna tecla con el foco en el buscador
    $("#auto-completar").keyup(function(){
        alert('se presiono tecla');
                    
        //en info tenemos lo que vamos escribiendo en el buscador
        var info = $(this).val();
        //hacemos la petición al método autocompletar del controlador autocompletado
        //pasando la variable info
        $.post('autocomplete/autocompletar',{ info : info }, function(data){
                        
            //si autocompletado nos devuelve algo
            if(data != '')
            {
    
                //en el div con clase contenedor mostramos la info
                $(".contenedor").html(data);
                                
            }else{
                                
                $(".contenedor").html('');
                                
            }
        })
                    
    })
                

    //buscamos el elemento pulsado con live y mostramos un alert
    $(".contenedor").find("a").live('click',function(e){
        e.preventDefault();
        alert($(this).html());
    });
            
})
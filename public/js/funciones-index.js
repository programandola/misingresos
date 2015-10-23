$(document).ready(function(){
       //si las resolucion es menor a 780px
       if($(window).width() <= 780){
           // Lista de imagenes
              var $_imagenes = $('#fondo-imagenes-movil img');
              var i_cantidad_img = 3;
              var i_iniciar_en = 0;           //Indice de imagen en cual iniciar
              var i_tiempo = 6000;            //Intervalo de tiempo
              var i_duracion = 700;           //Duración de la animación
              var s_animacion = 'fadeToggle'; //Animacion a usar
              var s_claseactiva = 'img_activa' //Clase de la imagen activa
              // Oculto todas las imagenes inicialmente
              $_imagenes.hide();
              // Muestro la primer imagen
              $_imagenes.eq(i_iniciar_en)[s_animacion](i_duracion).addClass(s_claseactiva);
              // Muestro la primera
              setInterval(function(){
                  i_iniciar_en = i_iniciar_en+1>=i_cantidad_img?0:i_iniciar_en+1;     //Incremento indice de imagen activa
                  $('.' + s_claseactiva)[s_animacion](i_duracion).removeClass(s_claseactiva); //Oculto imagen actualmente activa
                  $_imagenes.eq(i_iniciar_en)[s_animacion](i_duracion).addClass(s_claseactiva);   //Muestro siguiente imagen
              },i_tiempo);
        }else{
              // Lista de imagenes
              var $_imagenes = $('#fondo-imagenes img');
              var i_cantidad_img = 3;
              var i_iniciar_en = 0;           //Indice de imagen en cual iniciar
              var i_tiempo = 6000;            //Intervalo de tiempo
              var i_duracion = 700;           //Duración de la animación
              var s_animacion = 'fadeToggle'; //Animacion a usar
              var s_claseactiva = 'img_activa' //Clase de la imagen activa
              
              // Oculto todas las imagenes inicialmente
              $_imagenes.hide();
              
              // Muestro la primer imagen
              $_imagenes.eq(i_iniciar_en)[s_animacion](i_duracion).addClass(s_claseactiva);
              
              // Muestro la primera
              setInterval(function(){
                  i_iniciar_en = i_iniciar_en+1>=i_cantidad_img?0:i_iniciar_en+1;     //Incremento indice de imagen activa
                  $('.' + s_claseactiva)[s_animacion](i_duracion).removeClass(s_claseactiva); //Oculto imagen actualmente activa
                  $_imagenes.eq(i_iniciar_en)[s_animacion](i_duracion).addClass(s_claseactiva);   //Muestro siguiente imagen
              },i_tiempo);
        }

      });
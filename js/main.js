(function(){
 "use strict";




var regalo = document.getElementById('regalo');
document.addEventListener('DOMContentLoaded',function(){




    //Campos datos usuarios

    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //Campos pases

    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //Botones y divs

    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');


    //Extras

    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');

    botonRegistro.disabled = true;


   if(document.getElementById('calcular')){



    calcular.addEventListener('click',calcularMontos);

    pase_dia.addEventListener('blur',mostrarDias);
    pase_dosdias.addEventListener('blur',mostrarDias);
    pase_completo.addEventListener('blur',mostrarDias);

    nombre.addEventListener('blur',validarCampos);
    apellido.addEventListener('blur',validarCampos);
    email.addEventListener('blur',validarCampos);
    email.addEventListener('blur',validarMail);
  }
    function validarCampos(){
        if(this.value == ''){
            errorDiv.style.display='block';
            errorDiv.innerHTML = "este campo es obligatorio";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
        }else{
            errorDiv.style.display = 'none';
            this.style.border = '1px solid #cccccc';
        }
    }

    function validarMail(){
        if(this.value.indexOf('@') > -1){//indexOf busca el caracter que se le pasa como valor. Si no exista regresa -1
            errorDiv.style.display = 'none';
            this.style.border = '1px solid #cccccc';
        }else{
            errorDiv.style.display='block';
            errorDiv.innerHTML = "debe tener al menos una @";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
        }
    }

    function calcularMontos(event){
        event.preventDefault();
        if(regalo.value===''){
            alert("Debes elegir un regalo");
            regalo.focus();
            }else if(nombre.value===''|| apellido.value===''|| email.value===''){
              alert("Debes llenar tus datos");
          

            }else{
                lista_productos.innerHTML ='';

            var boletosDia = pase_dia.value,
                boletos2Dias = pase_dosdias.value,
                boletoCompleto = pase_completo.value,
                cantCamisas = camisas.value,
                cantEtiquetas = etiquetas.value;
                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas *10) * 0.93) + (cantEtiquetas * 2);

                var listadoProductos = [];

                if(boletosDia >0){
                    listadoProductos.push(boletosDia + ' Pase por día');
                }

                if(boletos2Dias >0){
                    listadoProductos.push(boletos2Dias + ' Pase por 2 días');

                }

                if(boletoCompleto >0){
                    listadoProductos.push(boletoCompleto + ' Pase Completo');

                }

                if(cantCamisas >0){
                    listadoProductos.push(cantCamisas + ' Camisas');

                }

                if(cantEtiquetas >0){
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');

                }
                lista_productos.style.display ="block";
                for(var i=0; i<listadoProductos.length;i++){

                    lista_productos.innerHTML += listadoProductos[i] + '<br>';
                }
                suma.innerHTML = "$" + totalPagar.toFixed(2);

                if(totalPagar == 0){
                  alert("Por favor verifica tus consumos");
                }

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar.toFixed(2);

        }

    }

    function mostrarDias(){
        var boletosDia = pase_dia.value,
            boletos2Dias = pase_dosdias.value,
            boletoCompleto = pase_completo.value;

            var diasElegidos = [];

            if(boletosDia > 0){

              diasElegidos=['viernes'];
            }
            if(boletos2Dias > 0){

                diasElegidos=['viernes','sabado'];
              }
            if(boletoCompleto > 0){
                diasElegidos=['viernes','sabado','domingo'];
              }

              for(var i=0; i < diasElegidos.length;i++){
                  document.getElementById(diasElegidos[i]).style.display = 'block';

              }
      }









    });//DOM CONTENT LOADED
})();//Fin de EFI



$(function(){


  //lettering
  $('.nombre-sitio').lettering();

  //Agregar clase a Menú
  $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

  //Menu fijo

  var windowHeight = $(window).height();
  var barraAltura = $('.barra').innerHeight();
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
          if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':barraAltura + 'px'});
          }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
          }
  });

  //Menu Responsive

  $('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle();
  });
  //Programa de conferencias
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click',function(){
  $('.menu-programa a').removeClass('activo');
  $(this).addClass('activo');
  $('.ocultar').hide();
  var enlace = $(this).attr('href'); //Identificar cual tab fue presionada
  $(enlace).fadeIn(1000);
  return false;
});

  //Animaciones para los números

  var resumenLista = jQuery('.resumen-evento');
  if(resumenLista.length > 0){
    $('.resumen-evento').waypoint(function(){
      $('.resumen-evento li:nth-child(1) p').animateNumber({number:6},1200);
      $('.resumen-evento li:nth-child(2) p').animateNumber({number:15},1200);
      $('.resumen-evento li:nth-child(3) p').animateNumber({number:3},1500);
      $('.resumen-evento li:nth-child(4) p').animateNumber({number:9},1500);
    },{
      offset:'60%'
    });
  }





  //Cuenta regresiva
  $('.cuenta-regresiva').countdown('2019/12/25 09:00:00',function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

  //Colorbox
   $('.invitado-info').colorbox({inline:true, width:"50%"});
   $('.boton_newsletter').colorbox({inline:true, width:"50%"});

});

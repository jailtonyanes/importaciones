 //Nos aseguramos que estén definidas
//algunas funciones básicas
window.URL = window.URL || window.webkitURL;
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || function(){alert('Su navegador no soporta navigator.getUserMedia().');};

function guardar()
{
	 if(parseInt($("#control").val())<=0)
				{
					$("#error_p").fadeIn('medium');
				}
				else
				{
				   var i= 1;
				   var sw=0;
				   while(i<= parseInt($("#control").val()))
				   {
                       if($("#sel"+i).is(':checked')) 
                       {  
                         sw=1;  
                       }
				   	  i++;
				   }  
				   if(sw ==1)
 				   {
                     if(confirm("Confirma que desea guardar las im\u00E1genes seleccionadas?"))
                     {
                     	$("#singlebutton").val('Guardando Imágenes...');
                     	$("#singlebutton").attr("disabled", "disabled");
                     	
                     	var form= $("#captu").serialize();
	   				    $.post('../../admin/guarda_imagenes.php',form,
						function(data)
						{
	 				       
	 				       if(data.indexOf("Captura(s) guardada(s) con exito.") >= 0)
	 				       {
                             $("#singlebutton").attr("disabled", false);
                     	     $("#singlebutton").val("Guardar Imágenes");

                     	     $("#sucessfull").fadeIn("medium");
                     	
	 				       }
	 				       else
	 				       {
	 				         $("#error_p3").fadeIn("medium");   	
	 				         $("#singlebutton").attr("disabled", false);
                     	     $("#singlebutton").val("Guardar Imágenes");

	 				       }

	 				    });
                     }
				   }
				   else
				   {
                      $("#error_p").fadeIn('medium'); 
				   }
				   
				   
				}
}				

 function cerrar_error()
 {
     $("#error_p").fadeOut('medium');       
 }

  function cerrar_error2()
 {
     $("#error_p2").fadeOut('medium');       
 }


function cerrar_alert(nombre_div)
 {
 	
             $("#"+nombre_div).fadeOut('medium'); 

        
 }


jQuery(document).ready(function(){
		    //Nos aseguramos que estén definidas
		//algunas funciones básicas
		window.URL = window.URL || window.webkitURL;
		navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia ||
		function() {
		    alert('Su navegador no soporta navigator.getUserMedia().');
		};

		//Este objeto guardará algunos datos sobre la cámara
		window.datosVideo = {
		    'StreamVideo': null,
		    'url': null
		}

		jQuery('#botonIniciar').on('click', function(e) {

		    //Pedimos al navegador que nos da acceso a 
		    //algún dispositivo de video (la webcam)
		    navigator.getUserMedia({
		        'audio': false,
		        'video': true
		    }, function(streamVideo) {
		        datosVideo.StreamVideo = streamVideo;
		        datosVideo.url = window.URL.createObjectURL(streamVideo);
		        jQuery('#camara').attr('src', datosVideo.url);
		        $("#sw").val('1');

		    }, function() {
		        alert('No fue posible obtener acceso a la cámara.');
		    });

		});

	

		jQuery('#botonFoto').on('click', function(e) {
		    
            if($("#sw").val()=='1')
            {
				    var oCamara, oFoto, oContexto, w, h,ct=0;
		            
		           $('#control').val(parseInt($('#control').val())+1);
		            
		            ct=$('#control').val();
		           /* $("#circ_car").append("<li data-target='#myCarousel' data-slide-to='"+$('#control').val()+"'></li>"); */
		            
		            if(ct>1)
		            {
		                 $('#contenidos').append("<div class='col-md-6'><div class='box box-primary'><div class='box-header with-border'><h3 class='box-title'>Foto # "+ct+"</h3><div class='box-tools pull-right'></div></div><div class='box-body'><div class='row'><div class='col-md-12 text-center'><canvas id='foto"+ct+"' class='col-md-12 text-center'></canvas></div></div></div/><div class='box-footer text-center'><label for='sel"+ct+"'>Seleccionar para guardar&nbsp;</label><input type='checkbox' name='sel"+ct+"' id='sel"+ct+"'></div></div></div>");
		                   $("#contenidos2").append("<textarea id='vaso"+ct+"' name='vaso"+ct+"' rows='4' cols='50' style='display:none'></textarea>"); 
		                   
		            }
		            

		            var canvas = document.getElementById("foto"+ct);

				    oCamara = jQuery('#camara');
				    oFoto = jQuery('#foto'+ct);
				    w = oCamara.width();
				    h = oCamara.height();
				    oFoto.attr({
				        'width': w,
				        'height': h
				    });
				    oContexto = oFoto[0].getContext('2d');
				    oContexto.drawImage(oCamara[0], 0, 0, w, h);
				    //alert('hola');
		            var canvas = document.getElementById("foto"+ct);
		            var img = document.getElementById("laimagen");
		           // img.src = canvas.toDataURL("image/png");	
		            $("#vaso"+ct).val(canvas.toDataURL("image/png"));
		    }
		    else
		    {
               $("#error_p2").fadeIn('medium');
		    }        

		});

        jQuery('#singlebutton').on('click', function(e) {

             guardar();

         });

        jQuery('#close_error').on('click', function(e) {

             cerrar_error();

         });

          jQuery('#close_error2').on('click', function(e) {

             cerrar_error2();

         });
 

     

});

 










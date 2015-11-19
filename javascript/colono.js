
function guardar_pacientes()
{
	window.location.href = "../examples/captura.php";
}

function nombre_del_mes(mes)
{
   switch(mes) {
    case 1:
        return 'Jan';
        break;
    case 2:
        return 'Feb';
        break;
    case 3:
        return 'Mar';
        break;
    case 4:
        return 'Apr';
        break;
    case 5:
        return 'May';
        break;
    case 6:
        return 'Jun';
        break;
    case 7:
        return 'Jul';
        break;
    case 8:
        return 'Aug';
        break;
    case 9:
        return 'Sep';
        break;
    case 10:
        return 'Oct';
        break;
    case 11:
        return 'Nov';
        break;
    case 12:
        return 'Dec';
        break;                    
   
   } 
}



function calcular_edad(fecha_intro)
{
 
		var dString = fecha_intro;
		var d1 = new Date(dString);
		var d2 = new Date();


		  var DateDiff = {
		 
		    inDays: function(d1, d2) {
		        var t2 = d2.getTime();
		        var t1 = d1.getTime();
		 
		        return parseInt((t2-t1)/(24*3600*1000));
		    },
		 
		    inWeeks: function(d1, d2) {
		        var t2 = d2.getTime();
		        var t1 = d1.getTime();
		 
		        return parseInt((t2-t1)/(24*3600*1000*7));
		    },
		 
		    inMonths: function(d1, d2) {
		        var d1Y = d1.getFullYear();
		        var d2Y = d2.getFullYear();
		        var d1M = d1.getMonth();
		        var d2M = d2.getMonth();
		 
		        return (d2M+12*d2Y)-(d1M+12*d1Y);
		    },
		 
		    inYears: function(d1, d2) {
		        return d2.getFullYear()-d1.getFullYear();
		    }
		}
		 


}



function selecc(id)
{
  	$.post('../../admin/desmarca.php',{

					condition: id

				},

				function(data){

						ver_clientes();

				}

			);
}

function noselecc()
{
    var form= $("#captu").serialize();
	   				    $.post('../../admin/desmarca.php',form,
						function(data)
						{
	 			

	 				    });
}



function marcar(id)
{
	var deci='';
	if( $('#'+id).is(':checked') ) 
	{
     // alert('Seleccionado');
      deci='si';
    }
    else
    {
     // alert('No Seleccionado');	
      deci='no';
    }
    $.post('../../admin/marca.php',{

					condition: id,
					condition2:deci

				},

				function(data){

						//ver_clientes();

				}

			);
}




$(document).ready(function(){
   	

       	$('#f_nac').datepicker()

				.on('changeDate', function(ev){
				   format: 'mm-dd-yyyy';
                   
			
                  var str = $("#f_nac").val();
                  var res = str.split('/'); 
                  
                  
                   var month=(nombre_del_mes(parseInt(res[0])));
				   var d = new Date(month+" ,"+res[1]+" ,"+ res[2]);

                    var dString = d;
					var d1 = new Date(dString);
					var d2 = new Date();

					//
                    var DateDiff = {
		 
					    inDays: function(d1, d2) {
					        var t2 = d2.getTime();
					        var t1 = d1.getTime();
					 
					        return parseInt((t2-t1)/(24*3600*1000));
					    },
					 
					    inWeeks: function(d1, d2) {
					        var t2 = d2.getTime();
					        var t1 = d1.getTime();
					 
					        return parseInt((t2-t1)/(24*3600*1000*7));
					    },
					 
					    inMonths: function(d1, d2) {
					        var d1Y = d1.getFullYear();
					        var d2Y = d2.getFullYear();
					        var d1M = d1.getMonth();
					        var d2M = d2.getMonth();
					 
					        return (d2M+12*d2Y)-(d1M+12*d1Y);
					    },
					 
					    inYears: function(d1, d2) {
					        return d2.getFullYear()-d1.getFullYear();
					    }
					}
                    
                    $("#edad").val(DateDiff.inYears(d1, d2)+' años ');
                    



					//

				   
				});

   $('#fecha_ult_vis').datepicker()

				.on('changeDate', function(ev){
				   format: 'mm-dd-yyyy';

			

				   
				});



    //ingreso_pac
    $("#ingreso_pac").click(function() {
    	
        if($("#proc_consult").val()!=0)
        {
    	  alert("Datos Guardados exitosamente.");
          window.location.href = "../examples/captura.php?uid="+$("#proc_consult").val();
        }
        else
        {
         alert("Escoja el tipo de procedimiento/consulta");
        }
    });

        $("#informe").click(function() {
    	
          window.location.href = "../examples/informe.php?uid="+$("#ocul").val()+"&uid2="+$("#sedacion").val()
          +"&uid3="+$("#inspeccion").val()+"&uid4="+$("#tacto_rectal").val()+"&uid5="+$("#colon").val()
          +"&uid6="+$("#ciego").val()+"&uid7="+$("#diag").val();
      
    });

  
});

 











 










function registrar(id_ubicacion,nombre,tipo,marca,modelo,sistema,ip,puertos,equipos) {
           
	   var parametros = {
			    "id_ubicacion":id_ubicacion,
                "nombre" : nombre,
				"tipo":tipo,
                "marca" : marca,
                "modelo":modelo,
                "sistema":sistema,
                "ip":ip,
				"puertos":puertos,
				"equipos":equipos
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ingresarEquipo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
						
			 
		      jQuery.post("mostrarEquipos.php", {  },function(data){
              jQuery("#a").html(data);
			  
			  });
			 
			 
			  
			  
				}
                });
}


function mostrarRegistro(){
	 jQuery.post("registrar_equipo.php", {},function(data){
              jQuery("#a").html(data);
			  });
	
}

function mostrarRegistroMante(){
	 jQuery.post("registrarMantenimiento.php", {},function(data){
              jQuery("#a").html(data);
			  });
}

function updateArchivos(id,nombre){
	  var parametros = {
                "id" : id
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'actualizarArchivos.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
						
						alert(response);
				
		
		       jQuery.post("archivos-equipo.php", { id:id,nombre:nombre  },function(data){
              jQuery("#a").html(data);
			  
			  });
		
			  
			  
				}
                });
}


function mostrarArchivos(id,nombre){
		      jQuery.post("archivos-equipo.php", { id:id,nombre:nombre },function(data){
              jQuery("#a").html(data);
			  });
}


function subirArchivo(id,nombre){
	
	console.log("subirArchivo:"+id+" - "+nombre);
	 jQuery.post("agregarArchivo.php", { id:id,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
}

function eliminarArchivo(idArchivo,url,id,nombre){
	var parametros = {
                "idArchivo" : idArchivo,
			    "url" : url				
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'borrarArchivo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
				
				
		      jQuery.post("archivos-equipo.php", { id:id,nombre:nombre  },function(data){
              jQuery("#a").html(data);
			  
			  });
			  
				}
                });
	
}


function mostrarEquipos() {
		      jQuery.post("mostrarEquipos.php", {  },function(data){
	
              jQuery("#a").html(data);
			  });
}
function mostrarMantenimientos(){
	 jQuery.post("mostrarMantenimientos.php", {  },function(data){
              jQuery("#a").html(data);
			  });
}

function borrarEquipo(idEquipo){                                  
	
          var mensaje = confirm("¿Si lo eliminas borraras los archivos de configuracion ¿Estas seguro?");
         //Detectamos si el usuario acepto el mensaje
        if (mensaje) 
		{
			var parametros = {
                "id" : idEquipo				
			};
			$.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'borrarEquipo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () 
				{
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) 
				{ //una vez que el archivo recibe el request lo procesa y lo devuelve
                      /**$("#a").html(response);**/
					  /**alert(response);**/
				
					jQuery.post("mostrarEquipos.php", {   },function(data)
					{
					jQuery("#a").html(data);
					});
				
                }
			});
				
		}
}

function registrarMantenimiento(equipo,fecha,hora_i,hora_f,descripcion){
	
	var parametros = {
                "equipo" : equipo,
			    "fecha" :  fecha,
                 "hora_i": hora_i,
                 "hora_f": hora_f,
                 "descripcion":descripcion				 
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ingresarMantenimiento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
					  
				
				
		      jQuery.post("mostrarMantenimientos.php", {  },function(data){
              jQuery("#a").html(data);
			  
			  });
			 
			  
				}
                });
}

function registrarMantenimientoIndividual(nombre,equipo,fecha,hora_i,hora_f,descripcion){
	var parametros = {
                "equipo" : equipo,
			    "fecha" :  fecha,
                 "hora_i": hora_i,
                 "hora_f": hora_f,
                 "descripcion":descripcion				 
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ingresarMantenimiento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
					  
				
				
		    jQuery.post("mostrarMantenimientoEquipo.php", { id:equipo ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  
			  });
			 
			  
				}
                });
}


function equiposMantenimiento(){
	
	jQuery.post("equiposMantenimiento.php", {  },function(data){
              jQuery("#a").html(data);
			  
			  });
}


function mostrarMantenimiento_Equipo(id,nombre){
	jQuery.post("mostrarMantenimientoEquipo.php", { id:id ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  
			  });
}

function borrarMantenimiento(idMant,idEquipo,nombreEquipo){
	
	var parametros = {
                "id" : idMant				
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'borrarMantenimiento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
		   jQuery.post("mostrarMantenimientoEquipo.php", { id:idEquipo ,nombre:nombreEquipo},function(data){
              jQuery("#a").html(data);
			  
			  });

			  
				}
                });
	
}
function mostrarBackbone(id_equipo,nombre){
	
	jQuery.post("mostrarBackbone.php", { id:id_equipo ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
	
}

function mostrarRegistroBackbone(id_equipoRegistro,nombre){
	
	
	
	jQuery.post("registrarBackbone.php", { id:id_equipoRegistro ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
  	  
	
}
	
function registrarBackbone(puerto,equipo,id_equipoRegistro,nombre){	
	var parametros = {
                "puerto" : puerto,
                "equipo": equipo,
                 "id_equipoRegistro":id_equipoRegistro				
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ingresarBackbone.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
					  
		 jQuery.post("mostrarBackbone.php", { id:id_equipoRegistro ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
            
			  
				}
                });
	
}
function eliminarBackbone(idBack,id_equipo,nombre_Equipo){
	
	var parametros = {
                "id" : idBack			
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'eliminarBackbone.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#a").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       /**$("#resultado").html(response);**/
					  
				jQuery.post("mostrarBackbone.php", { id:id_equipo ,nombre:nombre_Equipo},function(data){
              jQuery("#a").html(data);
			  });
          
			  
				}
                });
	
	
}

function mostrarEditar(id_equipo,nombre_equipo,tipo,marca,modelo,sistema,ip,nombre_ubicacion,nombre_edificio,id_ubi){
	
	jQuery.post("registroEditarEquipo.php", { id:id_equipo ,nombre:nombre_equipo,tipo:tipo,marca:marca,modelo:modelo,sistema:sistema,ip:ip,nombre_edificio:nombre_edificio,nombre_ubicacion:nombre_ubicacion,id_ubi},function(data){
              jQuery("#a").html(data);
			  });
     
}

function editarEquipo(id,nombre,tipo,marca,modelo,sistema,ip,id_ubicacion){
	
	        console.log(id_ubicacion);
	
	
	 var parametros = {
		        "id":id,
                "nombre" : nombre,
				"tipo":tipo,
                "marca" : marca,
                "modelo":modelo,
                "sistema":sistema,
                "ip":ip,
				"id_ubicacion":id_ubicacion
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'editarEquipo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
						
		
		      jQuery.post("mostrarEquipos.php", {  },function(data){
              jQuery("#a").html(data);
			  
			  });
			  
			 
			 
			  
			  
				}
                });
}

function mostrarEditarBackbone(id_back,puerto,equipo_Asociado,id_equipo,nombre){
	
	jQuery.post("registroEditarBackbone.php", { id_back:id_back,puerto:puerto,equipo_Asociado:equipo_Asociado,id_equipo:id_equipo,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
			  
}

function editarBackbone(id_back,puerto,equipo_Asociado,id_equipo,nombre){
	
	var parametros = {
		        "id":id_back,
                "puerto":puerto,
                "equipo" : equipo_Asociado
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'editarBackbone.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
						
		
		     	jQuery.post("mostrarBackbone.php", { id:id_equipo ,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
				}
                });
}

function tomarId(id){

	jQuery.post("buscarUbicacion.php", { id:id},function(data){
              //jQuery("#a").html(data);
			 
			
			  jQuery("#ubicaciones").html('');
			
			  var datos=data.split(",");
			    console.log("invocacion tomarId :"+datos.length);
				console.log("Valor :"+data);
			  
			  jQuery("#ubicaciones").append("<option selected=''>elige...</option>");
			    for(var i=0;i<datos.length-1;i++){
					
			 jQuery("#ubicaciones").append("<option value='"+datos[i].split("-")[1]+"' >"+datos[i].split("-")[0]+"</option>");
			  //jQuery("#");
				}
			  });		   
							   
}

function consultar_centro(id_ubicacion){
	
		jQuery.post("buscarCentro.php", { id:id_ubicacion},function(data){
              //jQuery("#a").html(data);
			 
			
			  jQuery("#centro").html('');
			
			  var datos=data.split(",");
			    console.log("invocacion tomarId :"+datos.length);
				console.log("Valor :"+data);
			  
			  jQuery("#centro").append("<option selected=''>elige...</option>");
			    for(var i=0;i<datos.length-1;i++){
					
			 jQuery("#centro").append("<option value='"+datos[i].split("-")[1]+"' >"+datos[i].split("-")[0]+"</option>");
			  //jQuery("#");
				}
			  });	
	
	
	
}

function filtrar(id_ubicacion){

	    jQuery.post("filtro.php", { id:id_ubicacion},function(data){
            
			  jQuery("#contenido").html('');
			
			  var datos=data.split(",");
			    console.log("invocacion tomarId :"+datos.length);
				console.log("Valor :"+data);
			  
			    for(var i=0;i<datos.length-1;i++){
					
					    
		       var id=datos[i].split("-")[0];
			   var nombre="'"+datos[i].split("-")[1]+"'";
			   var tipo="'"+datos[i].split("-")[2]+"'";
			   var marca="'"+datos[i].split("-")[3]+"'";
			   var modelo="'"+datos[i].split("-")[4]+"'";
			   var sistemaOpe="'"+datos[i].split("-")[5]+"'";
			   var ip="'"+datos[i].split("-")[6]+"'";
			   var nombre_ubicacion="'"+datos[i].split("-")[7]+"'";
			   var nombre_edificio="'"+datos[i].split("-")[8]+"'";
			   
			   
		
					
					
			 jQuery("#contenido").append("<tr>"+"<td>"+datos[i].split("-")[1]+"</td>"
										  +"<td>"+datos[i].split("-")[2]+"</td>"
										  +"<td>"+datos[i].split("-")[3]+"</td>"
										  +"<td>"+datos[i].split("-")[4]+"</td>"
										  +"<td>"+datos[i].split("-")[5]+"</td>"
										  +"<td>"+datos[i].split("-")[6]+"</td>"
										  +"<td>"+
										  '<button type="button" onclick="mostrarEditar('+id+','+nombre+','+tipo+','+marca+','+modelo+','+sistemaOpe+','+ip+','+nombre_ubicacion+','+nombre_edificio+','+datos[i].split("-")[9]+')" title="editar!" class="btn btn-warning"><i class="icon-copy fa fa-edit" aria-hidden="true"></i></button></td>'+
                                          '<td><button title="Borrar!" type="button"  class="btn btn-danger" onclick="borrarEquipo('+id+')"><i class="icon-copy fi-x"></i></button></td>'+
										  '<td><button title="Archivos!" type="button"   onclick="mostrarArchivos('+id+','+nombre+')" class="btn btn-primary"><i class="icon-copy fa fa-file" aria-hidden="true"></i></button></td>'+
										  '<td> <button title="Backbones!" type="button"  onclick="mostrarBackbone('+id+','+nombre+')" class="btn btn-primary"><i class="icon-copy fa fa-plus-square" aria-hidden="true"></i></button></td>');
			  //jQuery("#");
				}
			  });		 
	
}

function mostrarEdificios(){
	jQuery.post("mostrarEdificios.php", { },function(data){
              jQuery("#a").html(data);
			  });
	
}

function agregarEdifico(){
	jQuery.post("agregarEdificio.php", {},function(data){
              jQuery("#a").html(data);
			  });
}
	
function ingresarEdificios(nombre){

var parametros = {
		        "nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ingresarEdificio.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
			 jQuery.post("mostrarEdificios.php", { },function(data){
              jQuery("#a").html(data);
			  });
				}
                });


}

function mostrarEditarEdificios(id,nombre){
	jQuery.post("editarEdificio.php", {id_edificio:id,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
}

function editarEdificio(id,nombre){
	
	var parametros = {
		        "id_edificio":id,
				"nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'actualizarEdificio.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
				
				
			 jQuery.post("mostrarEdificios.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
			 
			  
				}
                });	
}

function eliminarEdificio(id_edificio){
	var parametros = {
		        "id_edificio":id_edificio
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'eliminarEdificio.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
			
			
            		
			 jQuery.post("mostrarEdificios.php", { },function(data){
              jQuery("#a").html(data);
			  });
			
			 
			  
				}
                });	
}
	
function mostrarUbicaciones(){
	 jQuery.post("mostrarUbicaciones.php", { },function(data){
              jQuery("#a").html(data);
			  });
			
}

function mostrarRegistroUbicacion(){
	jQuery.post("registroUbicacion.php", { },function(data){
              jQuery("#a").html(data);
			  });
}

function registrarUbicacion(id_edificio,nombre){
		var parametros = {
		        "id_edificio":id_edificio,
				"nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'registrarUbicacion.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/	
						
			 jQuery.post("mostrarUbicaciones.php", { },function(data){
              jQuery("#a").html(data);
			  });
			
			
			  
				}
                });	
}

function mostrarEditarUbicaciones(id_ubicacion,nombre,id_edificio){
	jQuery.post("mostrarEditarUbicacion.php", {id_ubicacion:id_ubicacion,nombre:nombre,id_edificio:id_edificio},function(data){
              jQuery("#a").html(data);
			  });
}

function editarUbicacion(id_ubicacion,nombre,id_edificio){
	
	var parametros = {
		        "id_ubicacion":id_ubicacion,
				"nombre":nombre,
				"id_edificio":id_edificio
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'actualizarUbicacion.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
				
				
			 jQuery.post("mostrarUbicaciones.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
			 
			  
				}
                });	
}

function eliminarUbicacion(id_ubicacion){
	var parametros = {
		        "id_ubicacion":id_ubicacion
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'eliminarUbicacion.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
				
				
			 jQuery.post("mostrarUbicaciones.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
			 
			  
				}
                });	
}

function mostrarTipoDispositivo(){
	 jQuery.post("mostrarTipoDispositivos.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
}

function mostrarAgregarDispositivo(){
	jQuery.post("mostrarAgregarDispositivo.php", { },function(data){
              jQuery("#a").html(data);
			  });
}

function agregarTipoDispositivo(nombre){
	
		var parametros = {
		        "nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'agregarTipoDispositivo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
				
				
			 jQuery.post("mostrarTipoDispositivos.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
			 
			  
				}
                });	
	
}

function mostrarEditarTipoDispositivo(id_tipo,nombre){
	 jQuery.post("mostrarEditarTipoDispositivo.php", { id_tipo:id_tipo,nombre:nombre},function(data){
              jQuery("#a").html(data);
			  });
			 
}

function editarTipoDispositivo(id_tipo,nombre){
			var parametros = {
				"id_tipo":id_tipo,
		        "nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'actualizarTipoDispositivo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
				
			
				
			 jQuery.post("mostrarTipoDispositivos.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
			 
			 
			  
				}
                });	
}

function eliminarTipoDispositivo(id_tipo){
	
			var parametros = {
				"id_tipo":id_tipo
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'eliminarTipo.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
					
			 jQuery.post("mostrarTipoDispositivos.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
				}
                });	
	
}

 function validarLogin(user,pass){
                 
             var parametros = {
               "usuario" : user,
               "clave" : pass
        };
        $.ajax({
                data:  parametros,
                url:   'validarLogin.php',
                type:  'post',
                /*
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                */
                success:  function (response) {
					
					console.log(response);
					
                    if (response == 0) {
						jQuery("#resultado").html('');
						jQuery("#resultado").append('<div class="alert alert-danger" role="alert">¡usuario es incorrecto!</div>');
                }
                if (response == 1) {
				    location.href = "modulo_csi.php";
                }
                if (response == 2) {
					jQuery("#resultado").html('');
					jQuery("#resultado").append('<div class="alert alert-danger" role="alert">¡Contraseña Incorrecta!</div>');
					
                }
                
                }
        });
                   
    }
	
function filtrarMantenimientos(id_ubicacion){

	    jQuery.post("filtro.php", { id:id_ubicacion},function(data){
            
			  jQuery("#contenido").html('');
			
			  var datos=data.split(",");
			    console.log("invocacion tomarId :"+datos.length);
				console.log("Valor :"+data);
			  
			    for(var i=0;i<datos.length-1;i++){
					
					    
		       var id=datos[i].split("-")[0];
			   var nombre="'"+datos[i].split("-")[1]+"'";
			   var tipo="'"+datos[i].split("-")[2]+"'";
			   var marca="'"+datos[i].split("-")[3]+"'";
			   var modelo="'"+datos[i].split("-")[4]+"'";
			   var sistemaOpe="'"+datos[i].split("-")[5]+"'";
			   var ip="'"+datos[i].split("-")[6]+"'";
			   var nombre_ubicacion="'"+datos[i].split("-")[7]+"'";
			   var nombre_edificio="'"+datos[i].split("-")[8]+"'";
			   
			   
		
					
					
			 jQuery("#contenido").append("<tr>"+"<td>"+(i+1)+"</td>"
			                              +"<td>"+datos[i].split("-")[1]+"</td>"
										  +"<td>"+datos[i].split("-")[2]+"</td>"
										  +"<td>"+datos[i].split("-")[3]+"</td>"
										  +"<td>"+datos[i].split("-")[4]+"</td>"
										  +"<td>"+datos[i].split("-")[5]+"</td>"
										  +"<td>"+datos[i].split("-")[6]+"</td>"
										  +"<td>"+'<button type="button"  title="Mantenimientos!" class="btn btn-warning" onclick="mostrarMantenimiento_Equipo('+id+','+nombre+')"><i class="fa fa-suitcase" aria-hidden="true"></i></button></td></tr>');
			  //jQuery("#");
				}
			  });		 
	
}

function mostrarCentrosCableado(){
	 jQuery.post("mostrarCentro.php", { },function(data){
              jQuery("#a").html(data);
			  });
}

function mostrarRegistroCentro(){
	 jQuery.post("registroCentro.php", { },function(data){
              jQuery("#a").html(data);
			  });
}

function registrarCentros(id_ubica,nombre){
		var parametros = {
		        "id_ubica":id_ubica,
				"nombre":nombre
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'registrarCentro.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/	
						
			 jQuery.post("mostrarCentro.php", { },function(data){
              jQuery("#a").html(data);
			  });
			
			
			  
				}
                });	
}

function eliminarCentro(id_centro){
	
			var parametros = {
				"id_centro":id_centro
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'eliminarCentro.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
					
			 jQuery.post("mostrarCentro.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
				}
                });	
}



function mostrarEditarCentro(id_centro,nombre_centro,nombre_edificio,nombre_piso,id_piso){
	
			 jQuery.post("registroEditarCentro.php", { id_centro:id_centro,nombre_centro:nombre_centro,nombre_edificio:nombre_edificio,nombre_piso:nombre_piso,id_piso:id_piso},function(data){
              jQuery("#a").html(data);
			  });
			 

}

function editarCentro(id_centro,nombre_centro,id_piso){
	
			var parametros = {
				"id_centro":id_centro,
				"nombre_centro":nombre_centro,
				"id_piso":id_piso
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'editarCentro.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        /**$("#resultado").html(response);**/
					
			 jQuery.post("mostrarCentro.php", { },function(data){
              jQuery("#a").html(data);
			  });
			 
				}
                });	
}
	
	
	
	

			 
	

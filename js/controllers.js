var $adivorEngine = new Object;
(function(){		

	//this.HOST  = "http://paneldemo.oneplace.mx/index.php/panel/notificaciones/";
	
	var self=this;

	this.HOST  = 'http://'+window.location.hostname+'/index.php/panel/';

	this.init=function(){
	}
	// Funcion rest full asincrona
	this.restFull = function(urlRest, data,callbackFunction){
		console.log($adivorEngine.HOST+urlRest);
		$.ajax({
			type: 'POST',
			url: $adivorEngine.HOST + urlRest,
			dataType: 'json',
			data: data,
			beforeSend : function () {
        		//$.LoadingOverlay("show");		
        		loading();        
            },
            complete : function () {
            	//$.LoadingOverlay("hide");	    
            	unloading();
            },			
		}).done(function( jsonResponse ) {
			callbackFunction(jsonResponse);
		});		
	};

	this.renderView=function(urlRest,data,destino){		
		restFull={};		
		console.log($adivorEngine.HOST+urlRest);
		$.ajax({
			url: $adivorEngine.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		
		$(destino).html(restFull.data);

		return restFull; //Contiene la propiedad estatus,data y vista
	};

	self.messageSimple=function(message,callbackFunction){
		$.confirm({
			'title': 'Mensaje del Sistema',
			'message': message,
			'buttons': {
						'Aceptar': 	{	'class': 'special',	
										'action': callbackFunction
									},								
						 																						
						}
		});
	}
	
}).apply($adivorEngine);

var $serviciosIncluidosPaquete = new function(){

	this.init=function(){

	}

	this.eliminar=function(id,texto){

		//if(!confirm("Desea eliminar el Plan "+texto)){
		//	return false;
		//}
		$.confirm({
			'title': 'Mensaje del Sistema','message': " <strong>&iquest;Desea eliminar el Plan? </strong><br /><font color=red>' "+ texto +" ' </font> ",
			'buttons': {'Aceptar': {'class': '',
				'action': 	function(){
					//loading('Cargando',1);
					$('#preloader').html('Eliminando...');
					$.ajax({
						url: $adivorEngine.HOST+ "/serviciosIncluidosPaquetes/delete/id/"+id,
						success: function(jsonResponse){

							if(jsonResponse.status=="success"){
								$("#row_"+jsonResponse.data.id_servicio_incluido_paquete).remove();
								showSuccess(jsonResponse.message);
							}else{
								showError(jsonResponse.message);
							}
						},
						cache: false,
						type: "POST",
						dataType: 'json'
					});
				}},
				'Cancelar': {'class'	: 'special'}}
		});

		// $adivorEngine.restFull("serviciosIncluidosPaquetes/delete/id/"+id,{},function(jsonResponse){
		// 	if(jsonResponse.status=="success"){
		// 		$("#row_"+jsonResponse.data.id_servicio_incluido_paquete).remove();
		// 		showSuccess(jsonResponse.message);
		// 	}else{
		// 		showError(jsonResponse.message);
		// 	}
		// });
	}

}

var $Impuestos = new function(){

	this.init=function(){

	}

	this.eliminar=function(id,texto){
		$.confirm({
			'title': 'Eliminar información',
			'message': 'Desea eliminar "'+ texto +'"',
			'buttons': {'Aceptar': {
				'action': function(){
					$adivorEngine.restFull("impuestos/delete/id/"+id,{},function(jsonResponse){
						if(jsonResponse.status=="success"){
							$("#row_"+jsonResponse.data.id_impuesto).remove();
							showSuccess(jsonResponse.message);
						}else{
							showError(jsonResponse.message);
						}
					});
				}
			},
			'Cancelar': {'class' : 'special'}}
		});
	}

}

var $adivorEngine = new Object;
(function(){		

	//this.HOST  = "http://paneldemo.oneplace.mx/index.php/panel/notificaciones/";
	
	var self=this;

	this.HOST  = 'http://'+window.location.hostname+'/index.php/panel/';

	this.init=function(){
	}
	// Funcion rest full asincrona
	this.restFull = function(urlRest, data,callbackFunction){
		console.log($adivorEngine.HOST+urlRest);
		$.ajax({
			type: 'POST',
			url: $adivorEngine.HOST + urlRest,
			dataType: 'json',
			data: data,
			beforeSend : function () {
        		//$.LoadingOverlay("show");		
        		loading();        
            },
            complete : function () {
            	//$.LoadingOverlay("hide");	    
            	unloading();
            },			
		}).done(function( jsonResponse ) {
			callbackFunction(jsonResponse);
		});		
	};

	this.renderView=function(urlRest,data,destino){		
		restFull={};		
		console.log($adivorEngine.HOST+urlRest);
		$.ajax({
			url: $adivorEngine.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		
		$(destino).html(restFull.data);

		return restFull; //Contiene la propiedad estatus,data y vista
	};

	self.messageSimple=function(message,callbackFunction){
		$.confirm({
			'title': 'Mensaje del Sistema',
			'message': message,
			'buttons': {
						'Aceptar': 	{	'class': 'special',	
										'action': callbackFunction
									},								
						 																						
						}
		});
	}
	
}).apply($adivorEngine);

var $serviciosIncluidosPaquete = new function(){

	this.init=function(){

	}

	this.eliminar=function(id,texto){

		//if(!confirm("Desea eliminar el Plan "+texto)){
		//	return false;
		//}
		$.confirm({
			'title': 'Mensaje del Sistema','message': " <strong>&iquest;Desea eliminar el Plan? </strong><br /><font color=red>' "+ texto +" ' </font> ",
			'buttons': {'Aceptar': {'class': '',
				'action': 	function(){
					//loading('Cargando',1);
					$('#preloader').html('Eliminando...');
					$.ajax({
						url: $adivorEngine.HOST+ "/serviciosIncluidosPaquetes/delete/id/"+id,
						success: function(jsonResponse){

							if(jsonResponse.status=="success"){
								$("#row_"+jsonResponse.data.id_servicio_incluido_paquete).remove();
								showSuccess(jsonResponse.message);
							}else{
								showError(jsonResponse.message);
							}
						},
						cache: false,
						type: "POST",
						dataType: 'json'
					});
				}},
				'Cancelar': {'class'	: 'special'}}
		});

		// $adivorEngine.restFull("serviciosIncluidosPaquetes/delete/id/"+id,{},function(jsonResponse){
		// 	if(jsonResponse.status=="success"){
		// 		$("#row_"+jsonResponse.data.id_servicio_incluido_paquete).remove();
		// 		showSuccess(jsonResponse.message);
		// 	}else{
		// 		showError(jsonResponse.message);
		// 	}
		// });
	}

}

var $Impuestos = new function(){

	this.init=function(){

	}

	this.eliminar=function(id,texto){
		$.confirm({
			'title': 'Eliminar información',
			'message': 'Desea eliminar "'+ texto +'"',
			'buttons': {'Aceptar': {
				'action': function(){
					$adivorEngine.restFull("impuestos/delete/id/"+id,{},function(jsonResponse){
						if(jsonResponse.status=="success"){
							$("#row_"+jsonResponse.data.id_impuesto).remove();
							showSuccess(jsonResponse.message);
						}else{
							showError(jsonResponse.message);
						}
					});
				}
			},
			'Cancelar': {'class' : 'special'}}
		});
	}

}


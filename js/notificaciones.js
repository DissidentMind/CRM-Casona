var $notificaciones=new Object;

(function(){
	this.HOST  =  (window.location.hostname == "oneplace.dev") ? 'http://'+window.location.hostname+'/index.php/panel/notificaciones/' :  'http://'+window.location.hostname+'/index.php/panel/notificaciones/';


	this.init=function(){
		//Inicializamos
		$(".menu_notificacion").hide();
		$("#notificaciones div").html("");
		$("#notificaciones i").removeClass("red");
		$("#notificaciones p").removeClass("red");
		$("#notificaciones p").html("0 Notificaciones");
		
		//Consultamos las notificaciones existentes
		response=this.RestFull("getAll",{});

		//Si existen notificaciones cargamos:
		if(response.data.contador>0){			
			$("#notificaciones i").addClass("red");
			$("#notificaciones p").addClass("red");
			if(response.data.contador==1){
				$("#notificaciones p").html(response.data.contador+" Notificación");
			}else if(response.data.contador>1){
				$("#notificaciones p").html(response.data.contador+" Notificaciones");
			}

			//Creamos el menu 
			html="<ul>";
				$.each(response.data.arrNotificaciones,function(i,v){
					html+="<li><a href=\""+v.link+"\">"+v.mensaje+"</a></li>";
					$("#notificaciones a").attr("href",v.link);
				});				
			html+="</ul>";
			$("#notificaciones div").html(html);
			$("#notificaciones").hover(function(){$(".menu_notificacion").show();},function(){$(".menu_notificacion").hide();});
		}

	}


	// Funciones de apoyo
	this.RestFull=function(urlRest,data){		
		restFull={};		
		console.log(this.HOST+urlRest);
		$.ajax({
			url: this.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;		
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		return restFull;
	};

	this.RenderView=function(urlRest,data){		
		restFull={};		
		console.log($app.HOST+urlRest);
		$.ajax({
			url: $app.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		$("#main_content").html(restFull.data);

		return restFull.data;
	};
	
}).apply($notificaciones);
var $notificaciones=new Object;

(function(){
	this.HOST  =  (window.location.hostname == "oneplace.dev") ? 'http://'+window.location.hostname+'/index.php/panel/notificaciones/' :  'http://'+window.location.hostname+'/index.php/panel/notificaciones/';


	this.init=function(){
		//Inicializamos
		$(".menu_notificacion").hide();
		$("#notificaciones div").html("");
		$("#notificaciones i").removeClass("red");
		$("#notificaciones p").removeClass("red");
		$("#notificaciones p").html("0 Notificaciones");
		
		//Consultamos las notificaciones existentes
		response=this.RestFull("getAll",{});

		//Si existen notificaciones cargamos:
		if(response.data.contador>0){			
			$("#notificaciones i").addClass("red");
			$("#notificaciones p").addClass("red");
			if(response.data.contador==1){
				$("#notificaciones p").html(response.data.contador+" Notificación");
			}else if(response.data.contador>1){
				$("#notificaciones p").html(response.data.contador+" Notificaciones");
			}

			//Creamos el menu 
			html="<ul>";
				$.each(response.data.arrNotificaciones,function(i,v){
					html+="<li><a href=\""+v.link+"\">"+v.mensaje+"</a></li>";
					$("#notificaciones a").attr("href",v.link);
				});				
			html+="</ul>";
			$("#notificaciones div").html(html);
			$("#notificaciones").hover(function(){$(".menu_notificacion").show();},function(){$(".menu_notificacion").hide();});
		}

	}


	// Funciones de apoyo
	this.RestFull=function(urlRest,data){		
		restFull={};		
		console.log(this.HOST+urlRest);
		$.ajax({
			url: this.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;		
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		return restFull;
	};

	this.RenderView=function(urlRest,data){		
		restFull={};		
		console.log($app.HOST+urlRest);
		$.ajax({
			url: $app.HOST+urlRest,
			data: data,
			success: function(jsonResponse){													
				restFull=jsonResponse;
			},			
			cache: false,
			type: "POST",
			async:false,
		});
		$("#main_content").html(restFull.data);

		return restFull.data;
	};
	
}).apply($notificaciones);

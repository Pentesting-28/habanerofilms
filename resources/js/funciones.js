$(document).ready(function(){

	var tiempo_inicio_anim = 0;
	var tiempo_entre_img = 6000;
	var tiempo_fade = 500;
	

	function animacion_videos() {

		$("#video-1").fadeIn(tiempo_fade);

		setTimeout(function() {
			$("#video-1").fadeOut(tiempo_fade);
			$("#video-2").fadeIn(tiempo_fade);
			$(".bullet-2").css("display", "none");
			$(".bullet-2-activo").css("display", "block");
			$(".bullet-1").css("display", "block");
			$(".bullet-1-activo").css("display", "none");
			
		}, tiempo_entre_img);
	
		setTimeout(function() {
			$("#video-2").fadeOut(tiempo_fade);
			$("#video-3").fadeIn(tiempo_fade);
			$(".bullet-3").css("display", "none");
			$(".bullet-3-activo").css("display", "block");
			$(".bullet-2").css("display", "block");
			$(".bullet-2-activo").css("display", "none");
			
		}, tiempo_entre_img*2);
	
		setTimeout(function() {
			$("#video-3").fadeOut(tiempo_fade);
			$("#video-4").fadeIn(tiempo_fade);
			$(".bullet-4").css("display", "none");
			$(".bullet-4-activo").css("display", "block");
			$(".bullet-3").css("display", "block");
			$(".bullet-3-activo").css("display", "none");
				
		}, tiempo_entre_img*3);
		
		setTimeout(function() {
			$("#video-4").fadeOut(tiempo_fade);
			$(".bullet-1").css("display", "none");
			$(".bullet-1-activo").css("display", "block");
			$(".bullet-4").css("display", "block");
			$(".bullet-4-activo").css("display", "none");
			animacion_videos();
		}, tiempo_entre_img*4);
	}




	setTimeout(function() {
		animacion_videos();
		animacion_videos_cel();
	}, tiempo_inicio_anim);



		function animacion_videos_cel() {


		$("#video-1-cel").fadeIn(tiempo_fade);

		setTimeout(function() {
			$("#video-1-cel").fadeOut(tiempo_fade);
			$("#video-2-cel").fadeIn(tiempo_fade);
			$(".bullet-2-cel").css("display", "none");
			$(".bullet-2-activo").css("display", "block");
			$(".bullet-1").css("display", "block");
			$(".bullet-1-activo").css("display", "none");
		}, tiempo_entre_img);
	
		setTimeout(function() {
			$("#video-2-cel").fadeOut(tiempo_fade);
			$("#video-3-cel").fadeIn(tiempo_fade);
			$(".bullet-3").css("display", "none");
			$(".bullet-3-activo").css("display", "block");
			$(".bullet-2").css("display", "block");
			$(".bullet-2-activo").css("display", "none");
		}, tiempo_entre_img*2);
	
		setTimeout(function() {
			$("#video-3-cel").fadeOut(tiempo_fade);
			$("#video-4-cel").fadeIn(tiempo_fade);
			$(".bullet-4").css("display", "none");
			$(".bullet-4-activo").css("display", "block");
			$(".bullet-3").css("display", "block");
			$(".bullet-3-activo").css("display", "none");	
		}, tiempo_entre_img*3);
		
		setTimeout(function() {
			$("#video-4-cel").fadeOut(tiempo_fade);
			$(".bullet-1").css("display", "none");
			$(".bullet-1-activo").css("display", "block");
			$(".bullet-4").css("display", "block");
			$(".bullet-4-activo").css("display", "none");
			animacion_videos_cel();
		}, tiempo_entre_img*4);
	}



	$(".btn-directors").click(function(){
		$(".submenu-1").fadeIn(800);
	});	

	$(".btn-digital").mouseover(function(){
		$(".submenu-1").fadeOut(300);
	});	

	$(".btn-production").mouseover(function(){
		$(".submenu-1").fadeOut(300);
	});	

	$(".btn-about").mouseover(function(){
		$(".submenu-1").fadeOut(300);
	});	

	$(".btn-contacto").mouseover(function(){
		$(".submenu-1").fadeOut(300);
	});	




	$(".btn-contacto").click(function(){
		$(".contact").fadeIn(800);
	});

	$(".cerrar-contact").click(function(){
		$(".contact").fadeOut(500);
	});	




	$("#btn-content-1").mouseover(function(){
		$("#btn-content-1").css("display", "none");
		$("#btn-content-1-over").css("display", "block");
		$("#hover-1").css("display", "block");
	});	

	$("#hover-1").mouseout(function(){
		$("#btn-content-1").css("display", "block");
		$("#btn-content-1-over").css("display", "none");
		$("#hover-1").css("display", "none");
	});	

	$("#btn-content-2").mouseover(function(){
		$("#btn-content-2").css("display", "none");
		$("#btn-content-2-over").css("display", "block");
		$("#hover-2").css("display", "block");
	});	

	$("#hover-2").mouseout(function(){
		$("#btn-content-2").css("display", "block");
		$("#btn-content-2-over").css("display", "none");
		$("#hover-2").css("display", "none");
	});	

	$("#btn-content-3").mouseover(function(){
		$("#btn-content-3").css("display", "none");
		$("#btn-content-3-over").css("display", "block");
		$("#hover-3").css("display", "block");
	});	

	$("#hover-3").mouseout(function(){
		$("#btn-content-3").css("display", "block");
		$("#btn-content-3-over").css("display", "none");
		$("#hover-3").css("display", "none");
	});	

	$("#btn-content-4").mouseover(function(){
		$("#btn-content-4").css("display", "none");
		$("#btn-content-4-over").css("display", "block");
		$("#hover-4").css("display", "block");
	});	

	$("#hover-4").mouseout(function(){
		$("#btn-content-4").css("display", "block");
		$("#btn-content-4-over").css("display", "none");
		$("#hover-4").css("display", "none");
	});	

	$("#btn-content-5").mouseover(function(){
		$("#btn-content-5").css("display", "none");
		$("#btn-content-5-over").css("display", "block");
		$("#hover-5").css("display", "block");
	});	

	$("#hover-5").mouseout(function(){
		$("#btn-content-5").css("display", "block");
		$("#btn-content-5-over").css("display", "none");
		$("#hover-5").css("display", "none");
	});	

	$("#btn-content-6").mouseover(function(){
		$("#btn-content-6").css("display", "none");
		$("#btn-content-6-over").css("display", "block");
		$("#hover-6").css("display", "block");
	});	

	$("#hover-6").mouseout(function(){
		$("#btn-content-6").css("display", "block");
		$("#btn-content-6-over").css("display", "none");
		$("#hover-6").css("display", "none");
	});	

	$("#btn-content-7").mouseover(function(){
		$("#btn-content-7").css("display", "none");
		$("#btn-content-7-over").css("display", "block");
		$("#hover-7").css("display", "block");
	});	

	$("#hover-7").mouseout(function(){
		$("#btn-content-7").css("display", "block");
		$("#btn-content-7-over").css("display", "none");
		$("#hover-7").css("display", "none");
	});	

	$("#btn-content-8").mouseover(function(){
		$("#btn-content-8").css("display", "none");
		$("#btn-content-8-over").css("display", "block");
		$("#hover-8").css("display", "block");
	});	

	$("#hover-8").mouseout(function(){
		$("#btn-content-8").css("display", "block");
		$("#btn-content-8-over").css("display", "none");
		$("#hover-8").css("display", "none");
	});	

	$("#btn-content-9").mouseover(function(){
		$("#btn-content-9").css("display", "none");
		$("#btn-content-9-over").css("display", "block");
		$("#hover-9").css("display", "block");
	});	

	$("#hover-9").mouseout(function(){
		$("#btn-content-9").css("display", "block");
		$("#btn-content-9-over").css("display", "none");
		$("#hover-9").css("display", "none");
	});	



	//// SMALL ///

	$(".btn-menu-small").click(function(){
		$(".menu-cel").fadeIn(750);
		$(".close-small").css("display", "block");
	});	

	$(".close-small").click(function(){
		$(".menu-cel").fadeOut(500);
		$(".close-small").css("display", "none");
	});	


	
});




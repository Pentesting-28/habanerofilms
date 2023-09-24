<script type="text/javascript">
	$('#video-1-cel').click(function(){
		$videoclip = $(this).attr("data-ruta");
		$('#video1').attr("src", $videoclip);
	});

	$('.cerrar').click(function(){
    $('#video1').attr("src","");
  });

  	$('#video-1').click(function(){
		$videoclip = $(this).attr("data-ruta");
		$('#video1').attr("src", $videoclip);
	});

	$('.cerrar').click(function(){
    $('#video1').attr("src","");
  });
</script>

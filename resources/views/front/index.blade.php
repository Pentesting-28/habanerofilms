@extends('layouts.front')
@section('title', 'Inicio')
@section('content')

<!-- SLIDE VIDEOS-->
<div class="video">
	<div id="video-1" class="boton-1" data-ruta="{{asset('resources/videos/master-palisade-qatar.mp4')}}">
		<video muted id="videobg" poster="{{asset('resources/img/uno_full.jpg')}}">
			<!--source src="videos/video_1-small.webm" type="video/webm"-->
        	<source src="{{asset('resources/videos/master-palisade-qatar_1.mp4')}}" type="video/mp4">
        	<!--source src="videos/video_1-small.ogg" type="video/ogg">
        	<source src="videos/video_1-small.ogv" type="video/ogv" -->
        	<img src="{{asset('resources/img/uno_full.jpg')}}" class="poster" />
    	</video>
    </div>

    <div id="video-2" class="boton-2">
		<video muted id="videobg2" poster="{{asset('resources/img/dos_full.png')}}">
			<source src="{{asset('resources/videos/video_2-small.webm')}}" type="video/webm">
        	<source src="{{asset('resources/videos/video_2-small.mp4')}}" type="video/mp4">
        	<source src="{{asset('resources/videos/video_2-small.ogg')}}" type="video/ogg">
        	<source src="{{asset('resources/videos/video_2-small.ogv')}}" type="video/ogv">
        	<img src="{{asset('resources/img/dos_full.jpg')}}" class="poster" />
    	</video>
    </div>

     <div id="video-3" class="boton-3">
		<video muted id="videobg3" poster="{{asset('resources/img/tres_full.jpg')}}">
			<source src="{{asset('resources/videos/video_3-small.webm')}}" type="video/webm">
        	<source src="{{asset('resources/videos/video_3-small.mp4')}}" type="video/mp4">
        	<source src="{{asset('resources/videos/video_3-small.ogg')}}" type="video/ogg">
        	<source src="{{asset('resources/videos/video_3-small.ogv')}}" type="video/ogv">
        	<img src="{{asset('resources/img/tres_full.jpg')}}" class="poster" />
    	</video>
    </div>

    <div  id="video-4" class="boton-4" >
		<video muted id="videobg4" poster="{{asset('resources/img/cuatro_full.jpg')}}">
			<source src="{{asset('resources/videos/video_4-small.webm')}}" type="video/webm">
        	<source src="{{asset('resources/videos/video_4-small.mp4')}}" type="video/mp4">
        	<source src="{{asset('resources/videos/video_4-small.ogg')}}" type="video/ogg">
        	<source src="{{asset('resources/videos/video_4-small.ogv')}}" type="video/ogv">
        	<img src="{{asset('resources/img/cuatro_full.jpg')}}" class="poster" />
    	</video>
    </div>

    <div class="navegacion-videos">
    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-4" />
    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-4-activo" />
    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-3" />
    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-3-activo" />
    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-2" />
    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-2-activo" />
    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-1" />
    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-1-activo" />
    </div>
</div>
<!-- TERMINA SLIDE VIDEOS-->


<!-- video-cel-->
	<div class="video-cel">

		<div id="video-1-cel" class="boton-1" data-ruta="{{asset('resources/videos/master-palisade-qatar.mp4')}}"></div>
		<div id="video-2-cel" class="boton-2"></div>
		<div id="video-3-cel" class="boton-3"></div>
		<div id="video-4-cel" class="boton-4"></div>


		<div class="navegacion-videos">
	    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-4" />
	    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-4-activo" />
	    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-3" />
	    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-3-activo" />
	    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-2" />
	    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-2-activo" />
	    	<img src="{{asset('resources/img/bullet.png')}}" class="bullet-1" />
	    	<img src="{{asset('resources/img/bullet-actv.png')}}" class="bullet-1-activo" />
    	</div>
	</div>
<!-- fin video-cel-->


<!-- VIDEOS -->
<div class="video-full">
	<table style="width:100%;height: 100%">
		<tr>
			<td valign="middle">
				<div>
					<span class="vimeo-close-1">
						<img src="{{asset('resources/img/cerrar.png')}}" class="cerrar" align="right" />
					</span>

					<img src="{{asset('resources/img/linea-amarilla.png')}}" class="linea-amarilla" /><p>

					<iframe src="" class="frame-videos" id="video1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<iframe src="https://player.vimeo.com/video/238818994/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video2" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<iframe src="https://player.vimeo.com/video/229436222/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<iframe src="https://player.vimeo.com/video/229439800/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>

					<center>
						<p class="director-1"><a href="manuel-escalante.html">Manuel Escalante</a></p>
						<p class="director-2"></p>
						<p class="director-3"><a href="pablo-calvillo.html">Pablo Calvillo</a></p>
						<p class="director-4"></p>
					</center>
				</div>
			</td>
		</tr>
	</table>
</div>
@endsection

@section('especifico')
<script>
	document.getElementById('videobg').play();
	document.getElementById('videobg2').play();
	document.getElementById('videobg3').play();
	document.getElementById('videobg4').play();
</script>
@endsection

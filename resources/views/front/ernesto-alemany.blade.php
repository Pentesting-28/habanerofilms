@extends('layouts.front')
@section('title', 'Ernesto Alemany')
@section('content')

<div class="centrar">
    <div class="container">
        <p class="titulo">Ernesto Alemany</p>
        <div class="row">
            <div class="col-md-4">
                <img id="btn-video-1" src="{{asset('resources/img/fotos/ErnestoAlemany/1.jpg')}}" class="btn-directors-1" />
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> Ron Barceló</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-2" src="{{asset('resources/img/fotos/ErnestoAlemany/2.jpg')}}"  class="btn-directors-2" />
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> Shell Nombres</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-3" src="{{asset('resources/img/fotos/ErnestoAlemany/3.jpg')}}" class="btn-directors-3"  />
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> Banco del progreso</div>
            </div>
        </div>
    </div>
</div>

<!-- VIDEOS -->
<div class="video-full-directores">
    <table style="width:100%;height: 100%">
        <tr>
            <td valign="middle">
                <div class="head-full">
                    <img src="{{asset('resources/img/amarillo-vertical.png')}}" class="amarillo-vertical-full" />
                    <div style="position:relative;top:-22pt;margin-left:5px;">
                        <span class="titulo-full-1">Ron Barceló</span>
                        <span class="titulo-full-2">Shell Nombres</span>
                        <span class="titulo-full-3">Banco del progreso</span>
                    </div>
                </div>
                <div>
                    <span class="close-directores">
                        <img src="{{asset('resources/img/cerrar.png')}}" class="cerrar" align="right" />
                    </span>
                    <img src="{{asset('resources/img/linea-amarilla.png')}}" class="linea-amarilla" />
                    <p>
                        <iframe src="https://player.vimeo.com/video/229439326/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/229439479/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-2" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/229439594/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </p>
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection

@section('especifico')
<script>
	// $(document).ready(function() {
	// });

</script>
@endsection

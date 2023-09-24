@extends('layouts.front')
@section('title', 'Film')
@section('content')
{{-- {{asset('assets_front/ --}}
<div class="centrar">
    <div class="container">
        <p class="titulo">FILM</p>
        <div class="row">
            <div class="col-md-4">
                <img id="btn-video-1" src="{{asset('assets_front/img/fotos/film/1.jpg')}}" class="btn-directors-1" />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> cómo filmar una XXX</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-2" src="{{asset('assets_front/img/fotos/film/2.jpg')}}"  class="btn-directors-2"  />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> Amor en Fin</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-3" src="{{asset('assets_front/img/fotos/film/3.jpg')}}" class="btn-directors-3"  />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> Depositarios</div>
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
                    <img src="{{asset('assets_front/img/amarillo-vertical.png')}}" class="amarillo-vertical-full" />
                    <div style="position:relative;top:-22pt;margin-left:5px;">
                        <span class="titulo-full-1">cómo filmar una XXX</span>
                        <span class="titulo-full-2">Amor en Fin</span>
                        <span class="titulo-full-3">Depositarios </span>
                    </div>
                </div>
                <div>
                    <span class="close-directores">
                        <img src="{{asset('assets_front/img/cerrar.png')}}" class="cerrar" align="right" />
                    </span>
                    <img src="{{asset('assets_front/img/linea-amarilla.png')}}" class="linea-amarilla" />
                    <p>
                        <iframe src="https://player.vimeo.com/video/241240822/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/240887674/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-2" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/241210600/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

@extends('layouts.front')
@section('title', 'Mario Mandujano')
@section('content')

<div class="centrar">
    <div class="container">
        <p class="titulo">Mario Mandujano</p>
        <div class="row">
            <div class="col-md-4">
                <img id="btn-video-1" src="{{asset('resources/img/fotos/MarioMandujano/1.jpg')}}" class="btn-directors-1"/>
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> COMPARTAMOS BANCO</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-2" src="{{asset('resources/img/fotos/MarioMandujano/2.jpg')}}"  class="btn-directors-2"/>
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> Sico</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-3" src="{{asset('resources/img/fotos/MarioMandujano/3.jpg')}}" class="btn-directors-3"/>
                <div class="nombre-video"><img src="{{asset('resources/img/amarillo-vertical.png')}}" /> Lysol</div>
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
                            <span class="titulo-full-1">COMPARTAMOS BANCO</span>
                            <span class="titulo-full-2">Sico</span>
                            <span class="titulo-full-3">Lysol</span>
                        </div>
                    </div>
                <div>
                    <span class="close-directores">
                        <img src="{{asset('resources/img/cerrar.png')}}" class="cerrar" align="right" />
                    </span>
                    <img src="{{asset('resources/img/linea-amarilla.png')}}" class="linea-amarilla" />
                    <p>
                        <iframe src="https://player.vimeo.com/video/229350173/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/229350205/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-2" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <iframe src="https://player.vimeo.com/video/229741640/?byline=0&portrait=0&amp;autoplay=0" class="frame-videos" id="video-directors-3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

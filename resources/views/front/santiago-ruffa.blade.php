@extends('layouts.front')
@section('title', 'Santiago Ruffa')
@section('content')
<div class="centrar">
    <div class="container">
		<p class="titulo">Santiago Ruffa</p>
	 	<div class="row">
            <div class="col-md-4">
                <img id="btn-video-1" src="{{asset('assets_front/img/fotos/SantiagoRuffa/1.jpg')}}" class="vimeo-launch-santiago1" data-vimeo-id="229349604"  />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> Mujer Mujer 2016</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-2" src="{{asset('assets_front/img/fotos/SantiagoRuffa/2.jpg')}}"  class="vimeo-launch-santiago2" data-vimeo-id="229349625"  />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> Entrenamiento</div>
            </div>

            <div class="col-md-4">
                <img id="btn-video-3" src="{{asset('assets_front/img/fotos/SantiagoRuffa/3.jpg')}}" class="vimeo-launch-santiago3" data-vimeo-id="229349664"  />
                <div class="nombre-video"><img src="{{asset('assets_front/img/amarillo-vertical.png')}}" /> Largas Vidas</div>
            </div>
	 	</div>
	</div>
 </div>
@endsection

@section('especifico')
    <script>
        // $(document).ready(function() {
        // });
    </script>
@endsection

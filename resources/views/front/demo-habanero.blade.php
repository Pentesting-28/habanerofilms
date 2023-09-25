@extends('layouts.front')
@section('title', 'Demo Habanero')
@section('content')

<!-- VIDEOS -->
<div class="video-full-demo">
    <table style="width:100%;height: 100%">
        <tr>
            <td valign="middle">
                <div id="vimeo-pop-container">
                    <div>
                        <div class="head-full">
                            <img src="{{asset('resources/img/amarillo-vertical.png')}}" class="amarillo-vertical-full" />
                            <span class="titulo-full">Demo Habanero</span>
                        </div>
                        <img src="{{asset('resources/img/falso.png')}}" class="cerrar" align="right" />
                        <img src="{{asset('resources/img/linea-amarilla.png')}}" class="linea-amarilla" />
                        <p>
                            <iframe src="https://player.vimeo.com/video/238102351/?byline=0&portrait=0&amp;autoplay=1&loop=1" class="frame-videos" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </p>
                    </div>
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

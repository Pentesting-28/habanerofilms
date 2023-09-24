<!DOCTYPE html>
<html lang="es-MX" class="sr">
	@include('partials.layout.head')
<body class="body">

    {{-- start div opc --}}

		@include('partials.layout.header')

		@yield('content')

		{{-- @include('partials.layout.footer') --}}

    {{-- end div opc --}}

	@include('partials.layout.scripts')

    {{-- include script implement on views --}}
	@yield('especifico')

</body>
</html>

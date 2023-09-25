<script>
    window.rutas = {
        baseURL: '{{ config('app.url') }}',
        categoria: @json(isset($categoria)? $categoria:null),
        marca: @json(isset($marca)? $marca:null),
        categoriasSidebar: @json(isset($categorias_sidebar)? $categorias_sidebar:null),
        {{--getProductos: '{{route('front.productos_filtrados')}}',

        categoriasTop: @json(isset($categorias_top)? $categorias_top:null),
        getBlogs: '{{route('front.get_blogs')}}',
        logo: '{{url('assets_front/img/logo.png')}}',
        mastercard: "{{url('resources/img/mastercard.svg')}}",
        visa: "{{url('resources/img/visa.svg')}}",
        amex: "{{url('resources/img/amex.svg')}}",
        maestro: "{{url('resources/img/maestro.svg')}}",
        bancard: "{{url('resources/img/bancard.png')}}",
        carrito_save: '{{route('front.carrito.save')}}',
        aex: '{{route('aex.calcularEnvio')}}',
        solicitud_save: '{{route('front.credit.save')}}',
        carrito: {
            agregar: "{{ route('front.carrito.agregar') }}",
            agregarCombo: "{{ route('front.carrito.agregarCombo') }}",
            listar: "{{ route('front.carrito.listar') }}",
            quitar: "{{ route('front.carrito.quitar') }}",
            checkout: "{{ route('front.carrito') }}",
            buscarCi: "{{ route('front.checkout.buscarCi') }}",
        },
        catalogo: '{{route('front.catalogo')}}',
        privacidad: '{{route('front.politica-privacidad')}}',
        img_placeholder: '{{url('assets_template/img/image_placeholder.jpg')}}',
        listaBodas: {
            addToLista: "{{ route('front.lista_bodas.add_producto') }}"
        },
        {{--  De panel.buscador.index --}}
        categoriasURL: '{{-- route('panel.categorias.index_ajax') --}}',
        comboURL: '{{--route('panel.combo.get_combo')--}}',
        skuURL: '{{--route('panel.sku.get_sku')--}}',
        getClientes: '{{--route('panel.clientes.ajax_select')--}}',
        backUrl: '{{--route('panel.productos_destacados.index')--}}',
        backUrlPromo: '{{--route('panel.promocion.index')--}}',
        getPalabras: '{{--route('panel.mas_buscados.get')--}}',
        {{--  De panel.frases_relacionadas.form --}}
        categoriasURLSelect: '{{-- route('panel.categorias.get_categoria') --}}',
        crearFraasesURL: '{{ isset($frase) ? ($frase->id ? route('panel.frases_relacionadas.update',$frase->id) : route('panel.frases_relacionadas.store')) : '' }}',
        show: @if(isset($frase)) @json($frase->exists ? $frase : null) @else null @endif,
        {{--  De panel.productos_destacados.form --}}
        crearDestacadosURL: @if(isset($destacado))'{{ $destacado->id ? route('panel.productos_destacados.update',$destacado->id) : route('panel.productos_destacados.store') }}' @else null @endif,
        {{--  De panel.promociones.form --}}
        crearPromocionURL: @if(isset($promocion)) '{{ $promocion->id ? route('panel.promocion.update',$promocion->id) : route('panel.promocion.store') }}' @else null @endif,
        crearReservaURL: @if(isset($reserva)) '{{ $reserva->id ? route('panel.reserva.update',$reserva->id) : route('panel.reserva.store') }}' @else null @endif,
        getPromocionData: @if(isset($promocion)) '{{ $promocion->id ? route('panel.promocion.getPromo',$promocion->id) : route('panel.promocion.store') }}' @else null @endif,
        deleteRestriccionPromocion: '{{--route('panel.promocion.delete-restriccion')--}}',
        placeholderimg: '{{url('assets_template/img/image_placeholder.jpg')}}',
        {{--tipoPromociones:@json(\App\Promocion::$tipo_promociones),--}}
        excelTemplate: '{{asset('assets_template/excel/gg_descuentos_template.xlsx')}}',
        excelTemplateCombo: '{{asset('assets_template/excel/gg_descuentos_combo_template.xlsx')}}',
        excelTemplatePorcentual: '{{asset('assets_template/excel/gg_descuentos2_template.xlsx')}}',
        excelTemplatePorcentualCombo: '{{asset('assets_template/excel/gg_descuentos2_combo_template.xlsx')}}',
    };
</script>

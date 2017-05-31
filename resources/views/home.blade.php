@extends('layouts.blank')

@section('titulo')

    Dashboard

@endsection

@push('css')

    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    {{-- <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"> --}}

@endpush

@section('main_container')
    
    {{-- Resultados no Topo --}}

    @include('includes.home.topo')

    <div class="row">
        
        {{-- Gráfico Principal --}}

        @include('includes.home.grafico_principal')

    </div>
    <br />

    <div class="row">

        {{-- Dependentes --}}

        @include('includes.home.dependentes')

        {{-- Bairros --}}

        @include('includes.home.bairros')

    </div>
    </div>
<!-- /page content -->

<form action="{{ url("/pessoas/imprimerelatorios") }}" method="POST" id="form-relatorios-ajax" style="display: none;">
    {{ csrf_field() }}
    <input type="hidden" id="ordem" name="ordem_relatorio">
</form>

@endsection

@push('scripts')

    <!-- FastClick -->
    <script src=" {{ asset("vendors/fastclick/lib/fastclick.js") }}"></script>
    <!-- NProgress -->
    <script src=" {{ asset("vendors/nprogress/nprogress.js") }}"></script>
    <!-- Chart.js -->
    <script src=" {{ asset("vendors/Chart.js/dist/Chart.min.js") }}"></script>
    <!-- gauge.js -->
    {{-- <script src=" {{ asset("vendors/gauge.js/dist/gauge.min.js") }}"></script> --}}
    <!-- bootstrap-progressbar -->
    <script src=" {{ asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js") }}"></script>
    <!-- iCheck -->
    <script src=" {{ asset("vendors/iCheck/icheck.min.js") }}"></script>
    <!-- Skycons -->
    <script src=" {{ asset("vendors/skycons/skycons.js") }}"></script>
    <!-- Flot -->
    <script src=" {{ asset("vendors/Flot/jquery.flot.js") }}"></script>
    <script src=" {{ asset("vendors/Flot/jquery.flot.pie.js") }}"></script>
    <script src=" {{ asset("vendors/Flot/jquery.flot.time.js") }}"></script>
    <script src=" {{ asset("vendors/Flot/jquery.flot.stack.js") }}"></script>
    <script src=" {{ asset("vendors/Flot/jquery.flot.resize.js") }}"></script>
    <!-- Flot plugins -->
    <script src=" {{ asset("vendors/flot.orderbars/js/jquery.flot.orderBars.js") }}"></script>
    <script src=" {{ asset("vendors/flot-spline/js/jquery.flot.spline.min.js") }}"></script>
    <script src=" {{ asset("vendors/flot.curvedlines/curvedLines.js") }}"></script>
    <!-- DateJS -->
    <script src=" {{ asset("vendors/DateJS/build/date.js") }}"></script>
    <!-- JQVMap -->
    <script src=" {{ asset("vendors/jqvmap/dist/jquery.vmap.js") }}"></script>
    <script src=" {{ asset("vendors/jqvmap/dist/maps/jquery.vmap.world.js") }}"></script>
    <script src=" {{ asset("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    {{-- <script src=" {{ asset("vendors/moment/min/moment.min.js") }}"></script>
    <script src=" {{ asset("vendors/bootstrap-daterangepicker/daterangepicker.js") }}"></script> --}}

    @include('includes.home.scripts')

@endpush
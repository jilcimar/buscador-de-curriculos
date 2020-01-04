@extends('layouts.base')
@section('head-extra')
    <!-- Dropzone Css -->
    <link href="{{ asset('plugins/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{ asset('plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{ asset('plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/images/ui-icons_444444_256x240.png">

    <!-- Datepicker -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link id="bsdp-css" href="{{asset('bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js')}}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>CRIAR NOVO FORMULÁRIO</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CADASTRO DE VAGA
                        </h2>
                    </div>
                    <div class="body">

                        <a href="{{url('/')}}" class="btn btn-default m-t-15 waves-effect">Cancelar</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect pull-right">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-extra')

    <script>$('#mdp-demo').multiDatesPicker();</script>

    <script src="{{ asset('js/pages/examples/sign-up.js') }}"></script>

    <script>$('#mdp-demo').multiDatesPicker();</script>
    <!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <!-- Dropzone Plugin Js -->
    <script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{ asset('plugins/nouislider/nouislider.js') }}"></script>

    <!-- Custom Page Js -->
    <script src="{{ asset('js/pages/forms/advanced-form-elements.js') }}"></script>

@endsection

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

    <!-- DatePicker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style>
        .no-margin
        {
            margin: 0 !important;
        }
    </style>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>CRIAR NOVA VAGA</h2>
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
                            <form class="form-material" action="{{route('vagas.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="required" for="titulo">Título</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="titulo" value="{{old('titulo') }}" name="titulo" class="form-control" placeholder="Ex.: Desenvolvedor PHP" required>
                                                </div>
                                                @if ($errors->has('titulo'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <label class="required" for="periodo">Período</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="periodo" placeholder="Selecione um intervalo de datas"  name="periodo" class="form-control form-control-2 period" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="titulo">Cidade</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="cidade" value="{{old('cidade') }}" name="cidade" class="form-control" placeholder="Nome da cidade">
                                                </div>
                                                @if ($errors->has('titulo'))
                                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                                @endif
                                            </div>

                                            <label for="titulo">Descrição</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" name="descricao" class="form-control no-resize" placeholder="Descrição da vaga.."></textarea>
                                                </div>
                                                @if ($errors->has('descricao'))
                                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('descricao') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <label class="required" for="habilidade">Habilidade desejada:</label>

                                                <table class="table" id="adicionar_habilidade">
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="habilidade[]"  class="form-control" placeholder="Título da habilidade" required>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary" name="add" id="add">
                                                                Adicionar mais
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="required" for="atividade">Atividades a desenvolver:</label>

                                                <table class="table" id="adicionar_atividade">
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="atividade[]"  class="form-control" placeholder="Título da atividade" required>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary" name="add" id="addAtividade">
                                                                Adicionar mais
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <label class="required" for="adicionarOutrasHabilidade">Outras Habilidades:</label>

                                                <table class="table" id="adicionarOutrasHabilidade">
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="outras_habilidades[]"  class="form-control" placeholder="Titulo das  outras habilidade" required>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary" name="add" id="addOutrasHabilidade">
                                                                Adicionar mais
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{url('/')}}" class="btn btn-default m-t-15 waves-effect">Cancelar</a>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect pull-right">Salvar</button>
                            </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-extra')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        (function (factory) {
            if (typeof define === 'function' && define.amd) {
                define(['moment'], factory); // AMD
            } else if (typeof exports === 'object') {
                module.exports = factory(require('../moment')); // Node
            } else {
                factory(window.moment); // Browser global
            }
        }(function (moment) {
            return moment.defineLocale('pt-br', {
                months : 'Janeiro_Fevereiro_Março_Abril_Maio_Junho_Julho_Agosto_Setembro_Outubro_Novembro_Dezembro'.split('_'),
                monthsShort : 'Jan_Fev_Mar_Abr_Mai_Jun_Jul_Ago_Set_Out_Nov_Dez'.split('_'),
                weekdays : 'Domingo_Segunda-feira_Terça-feira_Quarta-feira_Quinta-feira_Sexta-feira_Sábado'.split('_'),
                weekdaysShort : 'Dom_Seg_Ter_Qua_Qui_Sex_Sáb'.split('_'),
                weekdaysMin : 'dom_2ª_3ª_4ª_5ª_6ª_sáb'.split('_'),
                longDateFormat : {
                    LT : 'HH:mm',
                    L : 'DD/MM/YYYY',
                    LL : 'D [de] MMMM [de] YYYY',
                    LLL : 'D [de] MMMM [de] YYYY [às] LT',
                    LLLL : 'dddd, D [de] MMMM [de] YYYY [às] LT'
                },
                calendar : {
                    sameDay: '[Hoje às] LT',
                    nextDay: '[Amanhã às] LT',
                    nextWeek: 'dddd [às] LT',
                    lastDay: '[Ontem às] LT',
                    lastWeek: function () {
                        return (this.day() === 0 || this.day() === 6) ?
                            '[Último] dddd [às] LT' : // Saturday + Sunday
                            '[Última] dddd [às] LT'; // Monday - Friday
                    },
                    sameElse: 'L'
                },
                relativeTime : {
                    future : 'em %s',
                    past : '%s atrás',
                    s : 'segundos',
                    m : 'um minuto',
                    mm : '%d minutos',
                    h : 'uma hora',
                    hh : '%d horas',
                    d : 'um dia',
                    dd : '%d dias',
                    M : 'um mês',
                    MM : '%d meses',
                    y : 'um ano',
                    yy : '%d anos'
                },
                ordinal : '%dº'
            });
        }));
    </script>

    <script>
        $(function () {
            let $input = $('input#{{"periodo"}}');
            let options = {locale: {applyLabel: 'Selecionar', cancelLabel: 'Cancelar / Limpar'}};
            if($input.val() === '') {
                $input.daterangepicker(options).val('');
            } else {
                $input.daterangepicker(options);
            }

            $input.on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            var i  =1;
            $('#add').click(function (e) {
                e.preventDefault();
                i++;

                $('#adicionar_habilidade').append(
                    '<tr id="row'+i+'"><td><input type="text" placeholder="Titulo das  outras habilidade" name="outras_habilidades[]"  class="form-control" required></td><td> <button name="remove" id="'+i+'" class="btn btn-danger btn_remove"> Remover </button> </td> </tr>'
                );

                $(document).on('click', '.btn_remove' , function () {
                    var button_id = $(this).attr("id");
                    $("#row" +button_id+"").remove();
                });
            })
        });
    </script>

   <script>
        $(document).ready(function () {
            var i  =1;
            $('#addOutrasHabilidade').click(function (e) {
                e.preventDefault();
                i++;

                $('#adicionarOutrasHabilidade').append(
                    '<tr id="rowOutrasHabilidade'+i+'"><td><input type="text" placeholder="Titulo da habilidade" name="habilidade[]"  class="form-control" required></td><td> <button name="remove" id="'+i+'" class="btn btn-danger btnRemoveOutrasHabilidades"> Remover </button> </td> </tr>'
                );

                $(document).on('click', '.btnRemoveOutrasHabilidades' , function () {
                    var button_id = $(this).attr("id");
                    $("#rowOutrasHabilidade" +button_id+"").remove();
                });
            })
        });
    </script>

    <script>
        $(document).ready(function () {
            var i  =1;
            $('#addAtividade').click(function (e) {
                e.preventDefault();
                i++;

                $('#adicionar_atividade').append(
                    '<tr id="rowAtividade'+i+'"><td><input type="text" placeholder="Titulo da atividade" name="atividade[]"  class="form-control" required></td><td> <button name="remove" id="'+i+'" class="btn btn-danger btnRemoveAtividade"> Remover </button> </td> </tr>'
                );

                $(document).on('click', '.btnRemoveAtividade' , function () {
                    var button_id = $(this).attr("id");
                    $("#rowAtividade" +button_id+"").remove();
                });
            })
        });
    </script>


@endsection

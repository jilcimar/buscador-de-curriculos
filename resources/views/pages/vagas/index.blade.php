@extends('layouts.base')
@section('head-extra')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        LISTAGEM DE TODAS AS VAGAS DO SISTEMA
                    </h2>
                </div>
                <div class="body">
                    <div class="table">
                        <table class="table  table-striped" id="tabela_vagas">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Começa em</th>
                                <th>Termina em</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($vagas as $vaga)
                                <tr>
                                    <td>{{$vaga->titulo}}</td>
                                    <td>{{$vaga->inicio->format('d/m/Y')}}</td>
                                    <td>{{$vaga->fim->format('d/m/Y')}}</td>
                                    <td>
                                        <div class="table-options">
                                            <a class='linkbtn' href="{{route('vagas.show', ['id'=> $vaga->id])}}"
                                               title="Ver Vaga">
                                                <i class="material-icons">search</i>
                                            </a>

                                            <a class='linkbtn' href="{{route('vagas.edit', ['id'=> $vaga->id])}}"
                                               title="Editar Vaga">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" style="text-align: center">Sem itens</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{$vagas->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-extra')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Page Js -->
    <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
© 2020 GitHub, Inc.

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rits Carreira</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/home/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href=" {{asset('css/home/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/home/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/home/magnific-popup.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/home/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/home/style.css')}}">

    <style>
        .item {
            color: white !important;
        }
    </style>
</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo">
                            <img src="{{asset('images/logo.png')}}">
                        </div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.html"> A RITS</a></li>
                            <li class="has-dropdown">
                                <a href="#">NOSSOS VALORES</a>

                            </li>
                            <p class="has-dropdown" >
                                <a href="#" class="btn btn-primary">VAGAS ABERTAS</a>
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="video-hero" style="height: 700px; background-color:#2E2236;  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay"></div>
        <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <h2>{{$vaga->titulo}}</h2>
                            <p>{{$vaga->descricao}}</p>

                            <div class="col-md-4">
                                <b><em style="color: white"> Na vaga de "{{$vaga->titulo}}" aqui na Rits, você vai:</em></b>
                                <ul class="colorlib-footer-links">
                                    @foreach($vaga->atividades as $atividade)
                                        <li class="item">{{$atividade->titulo}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <b><em style="color: white"> Procuramos alguém que:</em></b>
                                <ul class="colorlib-footer-links">
                                    @foreach($vaga->habilidades as $habilidade)
                                        <li class="item">{{$habilidade->titulo}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <b><em style="color: white"> No dia a dia na Rits, você trabalhará também com:</em></b>
                                <ul class="colorlib-footer-links">
                                    @foreach($vaga->outrasAtividades as $outrasAtividade)
                                        <li class="item">{{$outrasAtividade->titulo}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <p><a href="gallery.html" class="btn btn-primary btn-lg btn-custom">CANDIDATE-SE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h3>Informações pessoais</h3>

                    <form class="form-material" action="{{route('vagas.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nome" value="{{old('nome') }}" name="titulo" class="form-control" placeholder="Nome completo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" value="{{old('email') }}" name="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="telefone" value="{{old('telefone') }}" name="telefone" class="form-control" placeholder="Telefone" required>
                                    </div>
                                </div>
                            </div>

                            <h3>Carta de Apresentação</h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="apresentacao" class="form-control no-resize" placeholder="Faça um breve resumo sobre você"></textarea>
                                    </div>
                                </div>
                            </div>

                            <h3>Últimas perguntas </h3>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="linkedin" value="{{old('linkedin') }}" name="linkedin" class="form-control" placeholder="URL DO SEU LINKEDIN" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="github" value="{{old('github') }}" name="github" class="form-control" placeholder="URL DO SEU GITHUB" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" id="ingles"  data-live-search="true" name="ingles" required>
                                        <option disabled value="" selected>Seu nível de inglês</option>
                                        <option value="{{\App\Models\Curriculo::INGLES_BASICO}}" >Básico</option>
                                        <option value="{{\App\Models\Curriculo::INGLES_MEDIO}}" >Médio</option>
                                        <option value="{{\App\Models\Curriculo::INGLES_AVANCADO}}" >Avançado</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                     </form>

                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>

    <footer id="colorlib-footer">
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                            Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/home/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/home/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/home/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/home/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/home/jquery.stellar.min.js')}}"></script>
<!-- YTPlayer -->
<script src="{{asset('js/home/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{asset('js/home/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/home/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/home/magnific-popup-options.js')}}"></script>
<!-- Counters -->
<script src="{{asset('js/home/jquery.countTo.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/home/main.js')}}"></script>

</body>
</html>

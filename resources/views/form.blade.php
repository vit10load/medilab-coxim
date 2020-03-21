<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coxim-MS</title>
    <meta name="description" content="Vitor">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <!-- links css -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- links css -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--Formulario Envio de mensagens -->
    <!-- Section Banner -->
    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li class=""><a href="#service">Serviços</a></li>
                                <li class=""><a href="#testimonial">Opiniões</a></li>
                                <li class=""><a href="#contact">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <div class="banner-logo text-center">
                            <img src="img/logo.png" class="img-responsive">
                        </div>
                        <div class="banner-text text-center">
                            <h1 class="white">Cuidados de saúde em sua localidade!</h1>
                            <p>Este aplicativo tem como base informar os pacientes a disponibilidade de seus exames feitos em laboratório.</p>

                        </div>
                        <div class="overlay-detail text-center">
                            <a href="#service"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Banner -->
    <section class="container" style="padding-left: 15%; padding-right: 5%;">
        <div class="col-md-8 col-sm-8 marb20">
            <div class="contact-info">
                <h3 class="cnt-ttl">Enviar Mensagem Para Pacientes:</h3>
                <div class="space"></div>

                @php
                    if(isset($error)){

                        if($error == "Mensagem enviada com sucesso!"){

                @endphp

                <div class="alert alert-success">Sua mensagem foi enviada com sucesso! Obrigado!</div>

                @php
                    } else{

                 @endphp

                    <div class="alert-danger alert-danger">Error ao enviar</div>

                @php

                    }

                }

                @endphp

                <form action="/receive" method="POST">

                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="text" name="name" class="form-control br-radius-zero" required  placeholder="Informe um Nome"   />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="codeAcess" class="form-control br-radius-zero" required  placeholder="Codigo De Envio"  />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control br-radius-zero" name="telefone" required   placeholder="Informe telefone" pattern="[0-9]+$"  />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Escreva algo" placeholder="Mensagem a ser enviada"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn btn-form">Enviar</button>
                    </div>
                </form>

            </div>

        </div>

    </section>

    <!--footer-->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Sobre Nós</h4>
                        </div>
                        <div class="info-sec">
                            <p>Gostamos de cuidar de voçe!!! Com muito carinho e amor no coração.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Links</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                                <li><a href="#service"><i class="fa fa-circle"></i>Serviço</a></li>
                                <li><a href="#contact"><i class="fa fa-circle"></i>Sugestões</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Siga nas redes sociais:</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="credits">
                            Designed por <a href="https://vitport.herokuapp.com">Vitor Oliveira Da Silva</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>


</body>

</html>
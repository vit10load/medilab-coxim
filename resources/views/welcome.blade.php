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

<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" ng-app="myApp">
<!--banner-->
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
                            <li class="active"><a href="#banner">Home</a></li>
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
                        <a href="/newmessage" class="btn btn-appoint">Enviar Mensagem!</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="#service"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
<!--service-->
<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h2 class="ser-title">Outros serviços</h2>
                <hr class="botm-line">
                <p>Algumas coisas aqui.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="icon-info">
                        <h4>24 horas de suporte</h4>
                        <p>Breve descrição dos trabalhos e horarios...</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Consultas marcadas na hora!!!!</h4>
                        <p>Caso tenha disponibilidade de vaga... não é preciso agendar consulta para outro horário.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Aconselhamento Médico</h4>
                        <p>Aqui os médicos também aconselham sobre os exames.</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Os idosos por lei Aqui tem preferência!</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Box -->
<div  align="center" class="container-fluid col-md-pull-12">

<section class="row">
    <div class="col-md-4 col-sm-4">
        <h2 class="ser-title">Pesquisar:</h2>
        <hr class="botm-line">
    </div>

</section><br>

<!-- ngController aqui -->
<div>

    <div class="form-group input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        <input ng-model="filterTest" name="consulta" id="txt_consulta" placeholder="Aqui voce escrever colocar seu nome ou telefone para ser encontrado o seu exame..." type="text" class="form-control">
    </div>
    <!-- Inserir componente alert -->
    <table id="tabela" class="table table-hover" ng-controller="myCtrl">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Estatus</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="x in myData | filter : filterTest">
            <th>@{{x.id}}</th>
            <td>@{{ x.name }}</td>
            <td>@{{ x.telefone }}</td>
            <td>@{{ x.status }}</td>
        </tr>

        </tbody>
    </table>

</div>

</div>

<!-- / searchh box -->
<!--doctor team-->
<section id="doctor-team" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Conheça o doutor(a)!</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/doctor1.jpg" alt="..." class="team-img">
                    <div class="caption">
                        <h3>Jessica Wally</h3>
                        <p>Doctor</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/doctor2.jpg" alt="..." class="team-img">
                    <div class="caption">
                        <h3>Iai Donas</h3>
                        <p>Doctor</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/doctor3.jpg" alt="..." class="team-img">
                    <div class="caption">
                        <h3>Amanda Denyl</h3>
                        <p>Doctor</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/doctor4.jpg" alt="..." class="team-img">
                    <div class="caption">
                        <h3>Jason Davis</h3>
                        <p>Doctor</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ doctor team-->
<!--testimonial-->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Opiniões dos pacientes!!</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="testi-details">
                    <!-- Paragraph -->
                    <p>O Atendimento ta legal.... etc etc e....</p>
                </div>
                <div class="testi-info">
                    <!-- User Image -->
                    <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
                    <!-- User Name -->
                    <h3>Alex<span>Texas</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="testi-details">
                    <!-- Paragraph -->
                    <p>Atendiemento top de mais, obrigado!!!</p>
                </div>
                <div class="testi-info">
                    <!-- User Image -->
                    <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
                    <!-- User Name -->
                    <h3>Alex<span>Texas</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="testi-details">
                    <!-- Paragraph -->
                    <p>Ta uma porcaria esse atendimento... kkkkk</p>
                </div>
                <div class="testi-info">
                    <!-- User Image -->
                    <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
                    <!-- User Name -->
                    <h3>Alex<span>Texas</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ testimonial-->
<!--cta 2-->
<section id="cta-2" class="section-padding">
    <div class="container">
        <div class=" row">
            <div class="col-md-2"></div>
            <div class="text-right-md col-md-4 col-sm-4">
                <h2 class="section-title white lg-line">« Em poucas palavras<br> sobre nós »</h2>
            </div>
            <div class="col-md-4 col-sm-5">
                Somos pessoas que amam o próximo, isto é, fazendo de cada dia um dia melhor para com nossos pacientes, assim deixando-lhes informado conscientemente dos seus exames feitos nesta unidade de saúde.
                <p class="text-right text-primary"><i>— Medilab+ Saúde</i></p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!--cta-->
<!--contact-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Contato</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Contato Informação</h3>
                <div class="space"></div>
                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Rua tralala...<br> Brazil, MS 17022</p>
                <div class="space"></div>
                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
                <div class="space"></div>
                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+1 800 123 1234</p>
            </div>
            <div class="col-md-8 col-sm-8 marb20">
                <div class="contact-info">
                    <h3 class="cnt-ttl">Enviar alguma sugestão? Preencha os campos!</h3>
                    <div class="space"></div>
                    <div id="sendmessage">Sua mensagem foi enviada com sucesso! Obrigado!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="form-action">
                            <button type="submit" class="btn btn-form">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ contact-->
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

<script src="js/MessageController.js"> </script>

</body>

</html>

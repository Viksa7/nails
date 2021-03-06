<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Мастер ногтевого сервиса</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Custom Fonts -->
    <link href="{!! asset('vendor/font-awesome/css/font-awesome.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="{!! asset('vendor/magnific-popup/magnific-popup.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <!-- Theme CSS -->
    <link href="{!! asset('css/creative.min.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Меню <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Мастер Мария</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Обо мне</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Услуги</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Мои работы</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Мастер ногтевого сервиса с опытом работы предоставляет свои услуги</h1>
                <hr>
                <p style="color: #fff;">Бла-бла, описание мастера</p>
                <a href="#portfolio" class="btn btn-primary btn-xl page-scroll leave-feedback">Мои работы</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Оставьте свой отзыв</h2>
                    <hr class="light">
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Написать</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Услуги</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hand-paper-o fa-rotate-90 text-primary sr-icons"></i>
                        <h3>Маникюр</h3>
                        <p class="text-muted">Аппаратный и обрезной</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hdd-o text-primary sr-icons"></i>
                        <h3>Наращивание</h3>
                        <p class="text-muted">Наращивание ногтей любой сложности</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Гельлак</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-plus-square text-primary sr-icons"></i>
                        <h3>Биогель</h3>
                        <p class="text-muted">Укрепление натуральных ногтей биогелем</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                

                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6">
                        <a href="{{  $portfolio->fullsize }}" class="portfolio-box">
                            <img src="{{  $portfolio->thumbnail }}" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        {{ $portfolio->title }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 style="color: #000;">Мои материалы</h2>
                <div class="col-lg-12 text-center">
                    <div class="col-lg-2 resources">
                        <img src="/img/arnelle.jpg">
                    </div>
                    <div class="col-lg-2 resources">
                        <img src="img/Bluesky.png">
                    </div>
                    <div class="col-lg-2 resources">
                        <img id="kodi" src="img/kodi.jpg">
                    </div>
                    <div class="col-lg-2 resources">
                        <img src="img/glory_shine.jpg">
                    </div>
                    <div class="col-lg-2 resources">
                        <img id="emi" src="/img/EMI.jpg">
                    </div> 
                    <div class="col-lg-2 resources">
                        <img src="/img/runail.jpg">
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 style="color: #000;">Мои сертификаты</h2>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Связаться с Марией</h2>
                    <!--<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>-->
                </div>
                <div class="col-lg-12 text-center">
                    <div class="icons col-lg-2 col-md-12">
                        <p><a target="_blank" href=""><i class="fa fa-whatsapp fa-4x sr-contact icon-color"></i></a></p>
                    </div>
                        <div class="icons col-lg-2 col-md-12">
                            <p><a target="_blank" href=""><i class="fa fa-vk fa-4x icon-color"></i></a></p>
                        </div>
                    <div class="icons col-lg-2 col-md-12">
                        <p><a target="_blank" href=""><i class="fa fa-odnoklassniki fa-4x icon-color"></i></a></p>
                    </div> 
                    <div class="icons col-lg-2 col-md-12">
                        <p><a target="_blank" href="https://www.instagram.com/mariya_nails12"><i class="fa fa-instagram fa-4x icon-color"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{!! asset('vendor/scrollreveal/scrollreveal.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('vendor/magnific-popup/jquery.magnific-popup.min.js') !!}"></script>

    <!-- Theme JavaScript -->
    <script type="text/javascript" src="{!! asset('js/creative.min.js') !!}"></script>

</body>

</html>

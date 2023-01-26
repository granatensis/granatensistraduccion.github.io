<?php
define("DEFAULT_LANGUAGE", "es");

if(isset($_GET['lg'])){
    $languageOption = "";
    switch($_GET['lg']){
        case 'fr':
        $languageOption = 'fr';
        break;
        case 'es':
        $languageOption = 'es';
        break;
        default:
        break;
    }
    if(isset($languageOption)){
        setcookie('lang_gt',$languageOption,time()+24*7*60*60);//la cookie caduca en 7 días
    }
}else{
    $languageOption = DEFAULT_LANGUAGE; //default si no se entra con parametro en la url  (?lg=)
    setcookie('lang_gt','none',time()+24*7*60*60);
}


if (isset($_COOKIE['lang_gt']))
{
    $defaultLang = $languageOption;
}else{
    $defaultLang = DEFAULT_LANGUAGE; //default si la cookie no está puesta
}

//////////  ES
$arrayLang['es']['idioma'] = "es";
$arrayLang['es']['inicio'] = "Inicio";
$arrayLang['es']['quienessomos'] = "Quiénes somos";
$arrayLang['es']['queofrecemos'] = "Qué ofrecemos";
$arrayLang['es']['contacto'] = "Contacto";
$arrayLang['es']['presupuesto'] = "Presupuesto";
$arrayLang['es']['preTitulo'] = "Servicios de traducción";
$arrayLang['es']['titulo'] = "Expertos en traducción de documentos legales y técnicos del francés al español";
$arrayLang['es']['titulo2'] = "Traductores jurados cualificados en traducción legal y técnica";
$arrayLang['es']['bienvenido'] = "Bienvenido a ";
$arrayLang['es']['quienessomosEntradilla'] = " servicios de traducción de documentos legales y técnicos del francés 🇲🇫 al español 🇪🇸";
$arrayLang['es']['quienessomosCuerpo'] = " Contamos con un equipo de traductores <strong>jurados</strong> altamente capacitados y con una amplia experiencia en los ámbitos legal y técnico, conocedores de los matices y la terminología específica de ambos campos.";
$arrayLang['es']['quienessomosTit1'] = "Respuesta rápida";
$arrayLang['es']['quienessomosTit2'] = "Rigor y claridad";
$arrayLang['es']['quienessomosTit3'] = "Sin retrasos";
$arrayLang['es']['quienessomosExp1'] = "Analizamos su petición al detalle con celeridad para darle respuesta cuanto antes.";
$arrayLang['es']['quienessomosExp2'] = "Trabajamos de manera minuciosa y fiel para llegar a los máximos estándares de calidad.";
$arrayLang['es']['quienessomosExp3'] = "Entregamos las traducciones en la fecha pactada, respetando la estructura y maquetación originales.";


//////////  FR
$arrayLang['fr']['idioma'] = "fr";
$arrayLang['fr']['inicio'] = "Accueil";
$arrayLang['fr']['quienessomos'] = "Qui sommes-nous ?";
$arrayLang['fr']['queofrecemos'] = "Pourquoi nous choisir";
$arrayLang['fr']['contacto'] = "Contact";
$arrayLang['fr']['presupuesto'] = "Devis";
$arrayLang['fr']['preTitulo'] = "Services de traduction";
$arrayLang['fr']['titulo'] = "Experts en traduction de documents juridiques et techniques du français vers l'espagnol";
$arrayLang['fr']['titulo2'] = "Traducteurs assermentés qualifiés pour les traductions juridiques et techniques";
$arrayLang['fr']['bienvenido'] = "Bienvenue à  ";
$arrayLang['fr']['quienessomosEntradilla'] = " services de traduction de documents juridiques et techniques du français 🇲🇫 à l'espagnol 🇪🇸";
$arrayLang['fr']['quienessomosCuerpo'] = " Nous disposons d'une équipe de traducteurs <strong>assermentés</strong> hautement qualifiés, dotés d'une grande expérience dans les domaines juridique et technique, qui connaissent les nuances et la terminologie spécifique de ces deux domaines.";
$arrayLang['fr']['quienessomosTit1'] = "Réponse rapide";
$arrayLang['fr']['quienessomosTit2'] = "Rigueur et clarté";
$arrayLang['fr']['quienessomosTit3'] = "Pas de retards";
$arrayLang['fr']['quienessomosExp1'] = "Nous analysons votre demande en détail afin de vous donner une réponse dans les meilleurs délais.";
$arrayLang['fr']['quienessomosExp2'] = "Nous travaillons méticuleusement et fidèlement pour atteindre les normes de qualité les plus élevées.";
$arrayLang['fr']['quienessomosExp3'] = "Nous livrons les traductions à la date convenue, en respectant la structure et la mise en page d'origine.";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Granatensis Traducción</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description" content="Bienvenido a Granatensis Traducción, servicios de traducción de documentos legales y técnicos del francés 🇲🇫 al español 🇪🇸." />
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="index.php" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:site_name" content="Granatensis Traducción - Expertos en traducción de documentos legales y técnicos del francés al español" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Traducción de documentos legales y técnicos francés-español" />
    <meta property="og:description" content="Bienvenido a Granatensis Traducción, servicios de traducción de documentos legales y técnicos del francés 🇲🇫 al español 🇪🇸." />
    <meta property="og:url" content="index.php" />
    <meta property="og:image" content="images/logo_new.png" />
    <meta property="og:image:secure_url" content="/images/logo_new.png" />
    <meta property="og:image:width" content="484" />
    <meta property="og:image:height" content="158" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Traducción de documentos legales y técnicos francés-español" />
    <meta name="twitter:description" content="Bienvenido a Granatensis Traducción, servicios de traducción de documentos legales y técnicos del francés 🇲🇫 al español 🇪🇸." />
    <meta name="twitter:image" content="images/logo_new.png" />

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-grisCabecera navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <img class="logo" src="images/logo_new.png" alt="logotipo de Granatensis Traducción">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.php" class="nav-item nav-link active"><?php echo $arrayLang[$defaultLang]['inicio'];?></a>
                <a href="#quienessomos" class="nav-item nav-link"><?php echo $arrayLang[$defaultLang]['quienessomos'];?></a>
                <a href="#queofrecemos" class="nav-item nav-link"><?php echo $arrayLang[$defaultLang]['queofrecemos'];?></a>
                <a href="#contacto" class="nav-item nav-link"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
                <a href="?lg=es" class="nav-item nav-link">🇪🇸 ES</a>
                <a href="?lg=fr" class="nav-item nav-link">🇫🇷 FR</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="w-100" src="images/expertos_en_traduccion.png" alt="Expertos en traducción de documentos legales y técnicos del francés al español">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase"><?php echo $arrayLang[$defaultLang]['preTitulo'];?></h5>
                            <h1 class="display-1 text-white mb-md-4"><?php echo $arrayLang[$defaultLang]['titulo'];?></h1><br>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill"><?php echo $arrayLang[$defaultLang]['presupuesto'];?></a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/documentos_legales_tecnicos_frances_espanol.png" alt="Expertos en traducción de documentos legales y técnicos del francés al español">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase"><?php echo $arrayLang[$defaultLang]['preTitulo'];?></h5>
                            <h1 class="display-1 text-white mb-md-4"><?php echo $arrayLang[$defaultLang]['titulo2'];?></h1><br>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill"><?php echo $arrayLang[$defaultLang]['presupuesto'];?></a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0" id="quienessomos">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4"><span class="text-primary"><?php echo $arrayLang[$defaultLang]['bienvenido'];?> </span>Granatensis Traducción</h1>
                <h4 class="text-primary mb-4"><?php echo $arrayLang[$defaultLang]['quienessomosEntradilla'];?></h4>
                <p class="mb-4"><?php echo $arrayLang[$defaultLang]['quienessomosCuerpo'];?></p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3><?php echo $arrayLang[$defaultLang]['quienessomosTit1'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp1'];?></p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3><?php echo $arrayLang[$defaultLang]['quienessomosTit2'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp2'];?></p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-hourglass fs-4"></i>
                        </div>
                        <div class="ps-4">
                        <h3><?php echo $arrayLang[$defaultLang]['quienessomosTit3'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp3'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5" id="queofrecemos">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemos'];?></h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Business Research</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Stretagic Planning</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Market Analysis</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Financial Analaysis</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3">legal Advisory</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Tax & Insurance</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3>Best In Industry</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
                        <h3>99% Success Rate</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Award Winning</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="img/feature.jpg" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                        <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3>100% Happy Client</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3>Professional Advisors</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0" id="contacto">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4"><?php echo $arrayLang[$defaultLang]['contacto'];?></h1>
                <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et dolor diam tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea at lorem sed et, lorem et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam ipsum dolore stet stet elitr ut. Ipsum amet labore lorem lorem diam magna sea, eos sed dolore elitr.</p>
                <form>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                    <option selected>Financial Consultancy</option>
                                    <option value="1">Strategy Consultancy</option>
                                    <option value="2">Tax Consultancy</option>
                                </select>
                                <label for="floatingSelect">Select A Service</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Footer Start -->
    <!-- PON POLITICA DE PRIVACIDAD -->

    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                    <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                    <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">Granatensis Traducción</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
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
$arrayLang['es']['porqueelegirnos'] = "Por qué elegirnos";
$arrayLang['es']['contacto'] = "Contacto";
$arrayLang['es']['presupuesto'] = "Presupuesto";
$arrayLang['es']['preTitulo'] = "Servicios de traducción";
$arrayLang['es']['titulo'] = "Traducción de documentos legales y técnicos del francés al español";
$arrayLang['es']['titulo2'] = "Traductores jurados cualificados en traducción legal y técnica";
$arrayLang['es']['bienvenido'] = "Bienvenido a ";

$arrayLang['es']['quienessomosEntradilla'] = " Expertos en localización y traducción de documentos legales y técnicos del francés 🇲🇫 al español 🇪🇸";
$arrayLang['es']['quienessomosCuerpo'] = " Contamos con un equipo de traductores <strong>jurados</strong> altamente capacitados y con una amplia experiencia en los ámbitos legal y técnico, conocedores de los matices y la terminología específica de ambos campos.
<p>Si tiene alguna pregunta o desea un presupuesto de nuestros servicios, no dude en ponerse en contacto con nosotros. Estaremos encantados de trabajar con usted.</p><br>";
$arrayLang['es']['quienessomosTit1'] = "Respuesta rápida";
$arrayLang['es']['quienessomosTit2'] = "Rigor y claridad";
$arrayLang['es']['quienessomosTit3'] = "Sin retrasos";
$arrayLang['es']['quienessomosExp1'] = "Analizamos su petición al detalle con celeridad para darle respuesta cuanto antes.";
$arrayLang['es']['quienessomosExp2'] = "Trabajamos de manera minuciosa y fiel para llegar a los máximos estándares de calidad.";
$arrayLang['es']['quienessomosExp3'] = "Entregamos las traducciones en la fecha pactada, respetando la estructura y maquetación originales.";

$arrayLang['es']['queofrecemosTit1'] = "Traducción jurídica";
$arrayLang['es']['queofrecemosCuerpo1'] = "Abarca la traducción de una variedad de documentos y textos jurídicos que exigen un alto nivel de competencia en el idioma y en el ámbito legal tales como: expedientes académicos, certificados de títulos universitarios, contratos, escritos jurídicos, actas de nacimiento, patentes, sentencias judiciales y mucho más.";

$arrayLang['es']['queofrecemosTit2'] = "Traducción técnica";
$arrayLang['es']['queofrecemosCuerpo2'] = "Traducción de documentos técnicos, como manuales de usuario, guías de instrucciones y otros escritos específicos que contienen terminología técnica y un alto grado de detalle en un campo específico de conocimiento como la ingeniería, la automoción, la electrónica, la minería, telecomunicaciones,  la construcción..";

$arrayLang['es']['queofrecemosTit3'] = "Localización web";
$arrayLang['es']['queofrecemosCuerpo3'] = "Adaptamos su contenido a diferentes idiomas y culturas, garantizando que su mensaje sea comprensible y relevante para su público objetivo. Proveemos una localización precisa y de alta calidad para todas sus necesidades de comunicación global en todos sus productos online y SEO. ";

$arrayLang['es']['queofrecemosTit4'] = "Estructura documental";
$arrayLang['es']['queofrecemosCuerpo4'] = "En la gran mayoría de los casos, si se proporcionan archivos editables en los formatos y las extensiones de archivo más comunes, podremos devolver las traducciones con la misma estructura y diseño original preservando la maquetación.";

$arrayLang['es']['queofrecemosTit5'] = "Conocimiento";
$arrayLang['es']['queofrecemosCuerpo5'] = "Tenemos más de 15 años de experiencia en el sector y nos hemos forjado una reputación de excelencia. Nuestro equipo está formado por expertos que investigan constantemente y se mantienen al día de las últimas tendencias y tecnologías de la traducción.";

$arrayLang['es']['queofrecemosTit6'] = "Control de calidad";
$arrayLang['es']['queofrecemosCuerpo6'] = "Para garantizar la precisión y calidad de la traducción, seguimos un proceso estricto de revisión y corrección que incluye tanto una revisión automatizada como una revisión realizada por un lingüista o el gerente del proyecto cotejando con el original.";


$arrayLang['es']['porqueelegirnosTit1'] = "Sencillo y cómodo";
$arrayLang['es']['porqueelegirnosCuerpo1'] = "Queremos brindarle un servicio de traducción sencillo y sin complicaciones, para que pueda concentrarse en sus tareas y dejar que nosotros nos encarguemos del resto.";

$arrayLang['es']['porqueelegirnosTit2'] = "Exactitud";
$arrayLang['es']['porqueelegirnosCuerpo2'] = "Nuestros traductores especializados son capaces de adaptar la temática de las traducciones más complejas con gran precisión y detalle.";

$arrayLang['es']['porqueelegirnosTit3'] = "Actualizados";
$arrayLang['es']['porqueelegirnosCuerpo3'] = "Nos mantenernos actualizados con las tendencias y avances del sector, mientras brindamos un servicio personalizado a nuestros clientes, prestando atención a sus necesidades.";

$arrayLang['es']['porqueelegirnosTit4'] = "Clientes felices";
$arrayLang['es']['porqueelegirnosCuerpo4'] = "Nos enorgullece contar con un gran número clientes satisfechos y estamos comprometidos a seguir mejorando para seguir cumpliendo con sus expectativas.";

$arrayLang['es']['porqueelegirnosTit5'] = "Humanos";
$arrayLang['es']['porqueelegirnosCuerpo5'] = "No dependemos de herramientas de traducción automática. Creemos que solo un traductor humano es capaz de capturar la complejidad de un idioma.";

$arrayLang['es']['porqueelegirnosTit6'] = "Investigación";
$arrayLang['es']['porqueelegirnosCuerpo6'] = "Acerca de como la traducción afecta a la comunicación intercultural y en cómo se puede mejorar la calidad de la traducción para lograr una mayor precisión y fluidez.";

$arrayLang['es']['textoCentral'] = "Contamos con un equipo de profesionales experimentados y altamente capacitados que se dedican a ofrecer resultados excepcionales en cada proyecto. Además, utilizamos tecnología punta y metodologías probadas para garantizar la máxima precisión y calidad.<br><br>Nuestro compromiso con la satisfacción del cliente es insuperable. Nos esforzamos por comprender sus necesidades específicas y satisfacerlas de forma profesional y eficiente.";

$arrayLang['es']['entradillaContacto'] = "Puede ponerse en contacto con nosotros a través del correo electrónico: <strong>b.granatensis@gmail.com</strong>
<p>También puede rellenar el siguiente formulario de contacto y uno de nuestros representantes se pondrá en contacto con usted lo antes posible.</p><br>";

$arrayLang['es']['labelName'] = "Su nombre";
$arrayLang['es']['labelEmail'] = "Su email";
$arrayLang['es']['labelTextArea'] = "Díganos que necesita";
$arrayLang['es']['enviar'] = "Enviar";
$arrayLang['es']['mensajeEnviado'] = "El mensaje fue enviado.";
$arrayLang['es']['recapcha1'] = "Esta web está protegida por reCAPTCHA y se aplica la ";
$arrayLang['es']['recapcha2'] = "política de privacidad";
$arrayLang['es']['recapcha3'] = " y las ";
$arrayLang['es']['recapcha4'] = "condiciones de servicio";

$arrayLang['es']['footerTit1'] = "Asociaciones y organismos";
$arrayLang['es']['footerTit2'] = "Referencias";
$arrayLang['es']['politicaPrivacidad'] = "Política de privacidad";
$arrayLang['es']['derechos'] = "Todos los derechos reservados";






//////////  FR
$arrayLang['fr']['idioma'] = "fr";
$arrayLang['fr']['inicio'] = "Accueil";
$arrayLang['fr']['quienessomos'] = "Qui sommes-nous";
$arrayLang['fr']['queofrecemos'] = "Ce que nous offrons";
$arrayLang['fr']['porqueelegirnos'] = "Pourquoi nous choisir";
$arrayLang['fr']['contacto'] = "Contact";
$arrayLang['fr']['presupuesto'] = "Devis";
$arrayLang['fr']['preTitulo'] = "Services de traduction";
$arrayLang['fr']['titulo'] = "Traduction de documents juridiques et techniques du français vers l'espagnol";
$arrayLang['fr']['titulo2'] = "Traducteurs assermentés qualifiés pour les traductions juridiques et techniques";
$arrayLang['fr']['bienvenido'] = "Bienvenue à  ";

$arrayLang['fr']['quienessomosEntradilla'] = " Experts de traduction de documents juridiques et techniques du français 🇲🇫 à l'espagnol 🇪🇸";
$arrayLang['fr']['quienessomosCuerpo'] = " Nous disposons d'une équipe de traducteurs <strong>assermentés</strong> hautement qualifiés, dotés d'une grande expérience dans les domaines juridique et technique, qui connaissent les nuances et la terminologie spécifique de ces deux domaines.
<p>Si vous avez des questions ou si vous souhaitez obtenir un devis pour nos services, n'hésitez pas à nous contacter. Nous serons heureux de travailler avec vous.</p><br>";
$arrayLang['fr']['quienessomosTit1'] = "Réponse rapide";
$arrayLang['fr']['quienessomosTit2'] = "Rigueur et clarté";
$arrayLang['fr']['quienessomosTit3'] = "Pas de retards";
$arrayLang['fr']['quienessomosExp1'] = "Nous analysons votre demande en détail afin de vous donner une réponse dans les meilleurs délais.";
$arrayLang['fr']['quienessomosExp2'] = "Nous travaillons méticuleusement et fidèlement pour atteindre les normes de qualité les plus élevées.";
$arrayLang['fr']['quienessomosExp3'] = "Nous livrons les traductions à la date convenue, en respectant la structure et la mise en page d'origine.";

$arrayLang['fr']['queofrecemosTit1'] = "Traduction juridique";
$arrayLang['fr']['queofrecemosCuerpo1'] = "Elle couvre la traduction d'une variété de documents et de textes juridiques qui exigent un niveau élevé de compétences linguistiques et juridiques, tels que : les relevés de notes, les certificats de diplômes universitaires, les contrats, les documents juridiques, les actes de naissance, les brevets, les décisions de justice et bien d'autres encore.";

$arrayLang['fr']['queofrecemosTit2'] = "Traduction technique";
$arrayLang['fr']['queofrecemosCuerpo2'] = "Traduction de documents techniques, tels que des manuels d'utilisation, des guides d'instructions et d'autres écrits spécifiques contenant une terminologie technique et un degré de détail élevé dans un domaine de connaissances spécifique tel que l'ingénierie, l'automobile, l'électronique, les télécommunications, la construction...";

$arrayLang['fr']['queofrecemosTit3'] = "Localisation du Web";
$arrayLang['fr']['queofrecemosCuerpo3'] = "Nous adaptons votre contenu à différentes langues et cultures, en veillant à ce que votre message soit compréhensible et pertinent pour votre public cible. Nous fournissons une localisation précise et de haute qualité pour tous vos besoins de communication globale sur tous vos produits en ligne et positionnement SEO.";

$arrayLang['fr']['queofrecemosTit4'] = "Structure du document";
$arrayLang['fr']['queofrecemosCuerpo4'] = "Dans la grande majorité des cas, si des fichiers modifiables sont fournis dans les formats et extensions de fichiers les plus courants, nous serons en mesure de rendre des traductions présentant la même structure et la même mise en page que l'original tout en préservant la présentation.";

$arrayLang['fr']['queofrecemosTit5'] = "Connaissance";
$arrayLang['fr']['queofrecemosCuerpo5'] = "Nous avons plus de 15 ans d'expérience dans le secteur et nous nous sommes forgé une réputation d'excellence. Notre équipe est composée d'experts qui effectuent des recherches et se tiennent constamment au courant des dernières tendances et technologies en matière de traduction.";

$arrayLang['fr']['queofrecemosTit6'] = "Contrôle de qualité";
$arrayLang['fr']['queofrecemosCuerpo6'] = "Pour garantir l'exactitude et la qualité de la traduction, nous suivons un processus strict de révision et de relecture qui comprend à la fois une révision automatique et une révision par un linguiste ou le chef de projet par rapport à l'original.";

$arrayLang['fr']['porqueelegirnosTit1'] = "Simple et confortable";
$arrayLang['fr']['porqueelegirnosCuerpo1'] = "Nous souhaitons vous fournir un service de traduction simple et sans complication, afin que vous puissiez vous concentrer sur vos tâches et nous laisser nous occuper du reste.";

$arrayLang['fr']['porqueelegirnosTit2'] = "Précision";
$arrayLang['fr']['porqueelegirnosCuerpo2'] = "Nos traducteurs spécialisés sont capables d'adapter le sujet des traductions, même les plus complexes, avec une grande précision et des détails. Avec notre expertise, nous vous garantissons des traductions de qualité supérieure.";

$arrayLang['fr']['porqueelegirnosTit3'] = "Tendances";
$arrayLang['fr']['porqueelegirnosCuerpo3'] = "Nous nous efforçons de nous tenir au courant des tendances et des évolutions du secteur, tout en offrant un service personnalisé à chacun de nos clients, en prêtant attention à leurs besoins et à leurs souhaits.";

$arrayLang['fr']['porqueelegirnosTit4'] = "Clients satisfaits";
$arrayLang['fr']['porqueelegirnosCuerpo4'] = "Nous sommes fiers d'avoir un grand nombre de commentaires et de recommandations de clients satisfaits et nous nous engageons à continuer à améliorer nos services pour continuer à répondre à vos attentes.";

$arrayLang['fr']['porqueelegirnosTit5'] = "Humains";
$arrayLang['fr']['porqueelegirnosCuerpo5'] = "Nous ne nous appuyons pas sur des outils de traduction automatique, car nous pensons que seul un traducteur humain est capable de saisir la nuance et la complexité d'une langue.";

$arrayLang['fr']['porqueelegirnosTit6'] = "Recherche";
$arrayLang['fr']['porqueelegirnosCuerpo6'] = "Sur la manière dont la traduction affecte la communication interculturelle et sur la façon dont la qualité de la traduction peut être améliorée pour atteindre une plus grande précision et fluidité.";

$arrayLang['fr']['textoCentral'] = "Nous disposons d'une équipe de professionnels expérimentés et hautement qualifiés qui sont dédiés à fournir des résultats exceptionnels pour chaque projet. En outre, nous utilisons des technologies de pointe et des méthodologies éprouvées pour garantir une précision maximale et une qualité irréprochable.<br><br>Notre engagement envers la satisfaction client est inégalé. Nous nous efforçons de comprendre vos besoins uniques et de les satisfaire de manière professionnelle et efficace. ";

$arrayLang['fr']['entradillaContacto'] = "Vous pouvez nous contacter par e-mail : <strong>bgranatensis@gmail.com</strong>
<p>Vous pouvez également remplir le formulaire de contact ci-dessous et l'un de nos représentants vous contactera dans les plus brefs délais.</p><br>";

$arrayLang['fr']['labelName'] = "Votre nom";
$arrayLang['fr']['labelEmail'] = "Votre email";
$arrayLang['fr']['labelTextArea'] = "Dites-nous ce dont vous avez besoin";
$arrayLang['fr']['enviar'] = "Envoyer";
$arrayLang['fr']['mensajeEnviado'] = "Le message est envoyé.";

$arrayLang['fr']['recapcha1'] = "Ce site web est protégé par reCAPTCHA et applique les ";
$arrayLang['fr']['recapcha2'] = "règles de confidentialité";
$arrayLang['fr']['recapcha3'] = " et les ";
$arrayLang['fr']['recapcha4'] = "conditions d'utilisation";

$arrayLang['fr']['footerTit1'] = "Associations et organismes";
$arrayLang['fr']['footerTit2'] = "Références";

$arrayLang['fr']['politicaPrivacidad'] = "Règles de confidentialité";
$arrayLang['fr']['derechos'] = "Tous droits réservés";



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

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">

    <!--  recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfO7BwkAAAAADu0qaivG1faADylVvOdr-Oz8T_d"></script>

    <!--  cookies -->
    <!-- <link rel="stylesheet" href="cookies/demo.css">
    <link rel="stylesheet" href="cookies/cookieconsent.css" media="print" onload="this.media='all'"> -->
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
                <a href="#porqueelegirnos" class="nav-item nav-link"><?php echo $arrayLang[$defaultLang]['porqueelegirnos'];?></a>
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
                <img class="w-100" src="images/expertos_en_traduccion.jpg" alt="Expertos en traducción de documentos legales y técnicos del francés al español">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase"><?php echo $arrayLang[$defaultLang]['preTitulo'];?></h5>
                            <h1 class="display-1 text-white mb-md-4"><?php echo $arrayLang[$defaultLang]['titulo'];?></h1><br>
                            <a href="#contacto" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill"><?php echo $arrayLang[$defaultLang]['presupuesto'];?></a>
                            <a href="#contacto" class="btn btn-secondary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/documentos_legales_tecnicos_frances_espanol.jpg" alt="Expertos en traducción de documentos legales y técnicos del francés al español">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase"><?php echo $arrayLang[$defaultLang]['preTitulo'];?></h5>
                            <h1 class="display-1 text-white mb-md-4"><?php echo $arrayLang[$defaultLang]['titulo2'];?></h1><br>
                            <a href="#contacto" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill"><?php echo $arrayLang[$defaultLang]['presupuesto'];?></a>
                            <a href="#contacto" class="btn btn-secondary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
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


    <!-- quienessomos Start -->
    <div class="container-fluid bg-secondary p-0" id="quienessomos">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4"><span class="text-primary"><?php echo $arrayLang[$defaultLang]['bienvenido'];?> </span>Granatensis Traducción</h1>
                <h4 class="text-primary mb-4"><?php echo $arrayLang[$defaultLang]['quienessomosEntradilla'];?></h4>
                <p class="mb-4"><?php echo $arrayLang[$defaultLang]['quienessomosCuerpo'];?></p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill"><?php echo $arrayLang[$defaultLang]['contacto'];?></a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-med p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="texto-blanco"><?php echo $arrayLang[$defaultLang]['quienessomosTit1'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp1'];?></p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="texto-blanco"><?php echo $arrayLang[$defaultLang]['quienessomosTit2'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp2'];?></p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-hourglass fs-4"></i>
                        </div>
                        <div class="ps-4">
                        <h3 class="texto-blanco"><?php echo $arrayLang[$defaultLang]['quienessomosTit3'];?></h3>
                            <p class="mb-0"><?php echo $arrayLang[$defaultLang]['quienessomosExp3'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quienessomos End -->


    <!-- queofrecemos Start -->
    <div class="container-fluid pt-6 px-5" id="queofrecemos">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemos'];?></h1>
            <hr class="w-25 mx-auto bg-med">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit1'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo1'];?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                        <i class="fa fa-cog fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit2'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo2'];?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                        <i class="fa fa-at fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit3'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo3'];?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                        <i class="fa fa-brush fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit4'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo4'];?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit5'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo5'];?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-med text-white rounded-circle mx-auto mb-4" id="iconQueOfrecemos">
                    <i class="fa fa-microscope fa-2x"></i>

                    </div>
                    <h3 class="mb-3"><?php echo $arrayLang[$defaultLang]['queofrecemosTit6'];?></h3>
                    <p class="mb-0"><?php echo $arrayLang[$defaultLang]['queofrecemosCuerpo6'];?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- queofrecemos End -->


    <!-- porqueelegirnos Start -->
    <div class="container-fluid py-6 px-5" id="porqueelegirnos">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnos'];?></h1>
            <hr class="w-25 mx-auto bg-med">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-sun fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit1'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo1'];?></p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit2'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo2'];?></p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit3'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo3'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-med h-100 text-center">
                    <img class="img-fluid" src="images/equipo-profesionales-experimentados.jpg" alt="Contamos con un equipo de profesionales experimentados">
                    <div class="p-4">
                        <p class="text-white mb-4"><?php echo $arrayLang[$defaultLang]['textoCentral'];?></p>
                        <a href="#contacto" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2"><?php echo $arrayLang[$defaultLang]['presupuesto'];?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit4'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo4'];?></p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit5'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo5'];?></p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-university fs-4 text-white"></i>
                        </div>
                        <h3><?php echo $arrayLang[$defaultLang]['porqueelegirnosTit6'];?></h3>
                        <p class="mb-0"><?php echo $arrayLang[$defaultLang]['porqueelegirnosCuerpo6'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- porqueelegirnos Start -->


    <!-- contacto Start -->
    <div class="container-fluid bg-secondary px-0" id="contacto">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4"><?php echo $arrayLang[$defaultLang]['contacto'];?></h1>
                <p class="mb-4"><?php echo $arrayLang[$defaultLang]['entradillaContacto'];?></p>
                <form id="contact-form" method="post" action="contacto/mail.php" role="form" class="contact_form">
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="form-floating-1" placeholder="nombre" required>
                                <label for="form-floating-1"><?php echo $arrayLang[$defaultLang]['labelName'];?></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2" placeholder="email" required>
                                <label for="form-floating-2"><?php echo $arrayLang[$defaultLang]['labelEmail'];?></label>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea type="text" name="mensaje" id="mensaje" class="form-control" id="form-floating-1" placeholder="qué necesita" required></textarea>
                            <label for="form-floating-1"><?php echo $arrayLang[$defaultLang]['labelTextArea'];?></label>
                        </div>
                    </div><br>
                    <div class="contact_msg" style="display: none">
                        <p><?php echo $arrayLang[$defaultLang]['mensajeEnviado'];?></p>

                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary w-100 h-100" type="submit"><?php echo $arrayLang[$defaultLang]['enviar'];?></button>
                    </div>
                    <div class="col-12"><br>
                        <p class="legal"><?php echo $arrayLang[$defaultLang]['recapcha1'];?><a target="_blank" href="https://policies.google.com/privacy?hl=<?php echo $arrayLang[$defaultLang]['idioma'];?>"> <?php echo $arrayLang[$defaultLang]['recapcha2'];?></a> <?php echo $arrayLang[$defaultLang]['recapcha3'];?> <a target="_blank" href="https://policies.google.com/terms?hl=<?php echo $arrayLang[$defaultLang]['idioma'];?>"><?php echo $arrayLang[$defaultLang]['recapcha4'];?></a> de Google.</p>
                    </div>
                    <!-- hidden reCaptcha token input -->
                    <input type="hidden" id="token" name="token">
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="images/contacto.jpg" alt="contacte con nosotros" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- contacto End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12">
                <h3 class="text-white mb-4"><?php echo $arrayLang[$defaultLang]['footerTit1'];?></h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="https://asetrad.org/" target="_blank"><i class="fa fa-arrow-right text-primary me-2"></i>Asociación Española de Traductores, Correctores e Intérpretes</a>
                    <a class="text-secondary mb-2" href="https://www.sft.fr/" target="_blank"><i class="fa fa-arrow-right text-primary me-2"></i>Société française des traducteurs</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="text-white mb-4"><?php echo $arrayLang[$defaultLang]['footerTit2'];?></h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="https://lalinternadeltraductor.org/" target="_blank"><i class="fa fa-arrow-right text-primary me-2"></i>La linterna del traductor</a>
                    <a class="text-secondary mb-2" href="https://translationjournal.net/"  target="_blank"><i class="fa fa-arrow-right text-primary me-2"></i>Translation Journal</a>
                </div>
            </div>

        </div>
    </div>

    <!-- <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                    <a class="text-secondary" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                    <a class="text-secondary" href="#"><i class="fa fa-arrow-right text-primary me-2"></i>Contact Us</a>
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
    </div> -->



    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0 pq">&copy; Granatensis Traducción. <?php echo $arrayLang[$defaultLang]['derechos'];?>. <a class="text-secondary border-bottom" href="#" id="politicaPrivacidad_<?php echo $arrayLang[$defaultLang]['idioma'];?>"><?php echo $arrayLang[$defaultLang]['politicaPrivacidad'];?></a>. Designed by <a class="text-secondary border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
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

    <script src="js/main.js"></script>
    <script src="contacto/form.js"></script>

        <!--  cookies -->
    <!-- <script defer src="cookies/cookieconsent.js"></script>
    <script defer src="cookies/cookieconsent-init_<?php echo $arrayLang[$defaultLang]['idioma'];?>.js"></script> -->


    <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6LfO7BwkAAAAADu0qaivG1faADylVvOdr-Oz8T_d', {action: 'homepage'}).then(function(token) {
             // console.log(token);
             document.getElementById("token").value = token;
          });
          // refresh token every minute to prevent expiration
          setInterval(function(){
            grecaptcha.execute('6LfO7BwkAAAAADu0qaivG1faADylVvOdr-Oz8T_d', {action: 'homepage'}).then(function(token) {
              console.log( 'refreshed token:', token );
              document.getElementById("token").value = token;
            });
          }, 60000);

        });
      </script>
</body>

</html>
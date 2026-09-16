<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? 'AVE Arquitectura — Colectivo y Plataforma de Representación Arquitectónica' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Colectivo y plataforma de arquitectura, renderizado 3D, cursos y representación digital en México." />
    <meta name="keywords" content="arquitectura, renders, 3d, planos, autocad, sketchup, representación arquitectónica, mexico, ave arquitectura" />
    <meta name="author" content="AVE Arquitectura" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/ave/logo.png') }}">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:title" content="AVE Arquitectura"/>
    <meta property="og:image" content="{{ asset('images/ave/viviendas-efimeras.jpg') }}"/>
    <meta property="og:url" content="https://www.avearquitectura.com/"/>
    <meta property="og:site_name" content="AVE Arquitectura"/>
    <meta property="og:description" content="Colectivo y plataforma de arquitectura, difusión de proyectos, renderizado y cursos."/>
    <meta name="twitter:title" content="AVE Arquitectura" />
    <meta name="twitter:image" content="{{ asset('images/ave/viviendas-efimeras.jpg') }}" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom Component Alignment & Enhancements -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            color: #444;
            background-color: #fff;
            overflow-x: hidden;
        }

        /* 1. Navbar Fixes */
        .fh5co-nav {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1001;
            padding: 16px 0;
            transition: all 0.3s ease;
            background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
        }
        .fh5co-nav.scrolled {
            top: 0 !important;
            background: rgba(18, 18, 18, 0.96) !important;
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            padding: 10px 0;
        }
        .fh5co-nav #fh5co-logo a {
            display: inline-flex;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 24px;
            letter-spacing: 2px;
            color: #fff !important;
        }
        .fh5co-nav #fh5co-logo img {
            height: 38px;
            width: auto;
            margin-right: 10px;
            border-radius: 4px;
        }
        .fh5co-nav ul li a {
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.9) !important;
            padding: 8px 14px;
            transition: color 0.2s ease;
        }
        .fh5co-nav ul li a:hover,
        .fh5co-nav ul li.active a {
            color: #ea272d !important;
        }
        .btn-cta-nav {
            background: #ea272d !important;
            color: #fff !important;
            padding: 8px 20px !important;
            border-radius: 25px;
            font-weight: 600 !important;
            transition: transform 0.2s ease, background 0.2s ease !important;
        }
        .btn-cta-nav:hover {
            background: #d41e24 !important;
            transform: translateY(-1px);
        }

        /* 2. Brand & Tags */
        .project-tag {
            display: inline-block;
            background: #ea272d;
            color: #fff;
            padding: 4px 10px;
            border-radius: 3px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* 3. About Section Alignment Fix */
        .about-row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .about-img-wrap img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }
        .about-content {
            padding: 20px 30px;
        }

        /* 4. Project Grid Uniformity Fix */
        .projects-grid {
            display: flex;
            flex-wrap: wrap;
            margin-left: -15px;
            margin-right: -15px;
        }
        .project-card-col {
            display: flex;
            margin-bottom: 30px;
        }
        .project-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #eee;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }
        .project-card-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }
        .project-card-body {
            padding: 22px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .project-card-title {
            font-size: 20px;
            margin: 4px 0 6px 0;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            color: #222;
        }
        .project-card-author {
            color: #888;
            font-size: 13px;
            font-style: italic;
            margin-bottom: 12px;
        }
        .project-card-desc {
            font-size: 13.5px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 0;
            flex-grow: 1;
        }

        /* 5. Services Cards */
        .service-box {
            background: #fff;
            padding: 40px 30px;
            margin-bottom: 30px;
            border-radius: 8px;
            border: 1px solid #eaeaea;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .service-box:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transform: translateY(-6px);
            border-color: #ea272d;
        }
        .service-box i {
            font-size: 42px;
            color: #ea272d;
            margin-bottom: 22px;
            display: inline-block;
        }
        .service-box h3 {
            font-size: 20px;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: #222;
        }
        .service-box p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 0;
        }

        /* 6. Slider Alignment & Contrast Fix */
        .slider-text-inner {
            background: rgba(0, 0, 0, 0.65);
            padding: 35px 40px;
            border-radius: 8px;
            backdrop-filter: blur(4px);
            border-left: 4px solid #ea272d;
            max-width: 600px;
        }
        .slider-text-inner h2 {
            color: #fff !important;
            font-size: 32px !important;
            margin-bottom: 15px !important;
        }
        .slider-text-inner p {
            color: #e0e0e0 !important;
            font-size: 15px !important;
            line-height: 1.6 !important;
            margin-bottom: 20px !important;
        }

        /* 7. General Responsive Adjustments */
        @media screen and (max-width: 768px) {
            .about-row {
                flex-direction: column;
            }
            .about-content {
                padding: 30px 0 0 0;
            }
            .slider-text-inner {
                padding: 20px;
                max-width: 100%;
            }
            .fh5co-nav #fh5co-logo a {
                font-size: 20px;
            }
        }
    </style>

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        {{ $slot }}
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

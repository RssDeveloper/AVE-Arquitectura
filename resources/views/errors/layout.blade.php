<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Error — AVE Arquitectura')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/ave/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --ave-red: #ea272d;
            --ave-red-hover: #cf1c22;
            --ave-dark: #0e0e11;
            --ave-card-bg: rgba(22, 22, 28, 0.78);
            --ave-border: rgba(255, 255, 255, 0.08);
            --ave-text: #f0f0f2;
            --ave-muted: #9595a4;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--ave-dark);
            color: var(--ave-text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background-image: 
                radial-gradient(rgba(234, 39, 45, 0.14) 1px, transparent 1px),
                radial-gradient(circle at 50% 15%, rgba(234, 39, 45, 0.12) 0%, transparent 55%),
                linear-gradient(to bottom, rgba(14, 14, 17, 0.95), rgba(14, 14, 17, 0.98));
            background-size: 36px 36px, 100% 100%, 100% 100%;
            background-position: 0 0, center 0, 0 0;
            position: relative;
        }

        /* Subtle technical blueprint lines decor */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            background: 
                linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px) 0 0 / 180px 180px,
                linear-gradient(0deg, rgba(255,255,255,0.015) 1px, transparent 1px) 0 0 / 180px 180px;
            z-index: 0;
        }

        .error-wrapper {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Top Bar */
        .error-header {
            padding: 24px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--ave-border);
            backdrop-filter: blur(12px);
            background: rgba(14, 14, 17, 0.6);
        }

        .error-brand {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            font-weight: 700;
            font-size: 20px;
            letter-spacing: 2px;
            transition: opacity 0.2s ease;
        }

        .error-brand:hover {
            opacity: 0.9;
        }

        .error-brand img {
            height: 34px;
            width: auto;
            margin-right: 12px;
            border-radius: 4px;
        }

        .error-brand span {
            color: var(--ave-red);
        }

        .error-nav-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .nav-link-subtle {
            color: var(--ave-muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: color 0.2s ease;
        }

        .nav-link-subtle:hover {
            color: #fff;
        }

        /* Main Content */
        .error-main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 24px;
        }

        .error-container {
            max-width: 780px;
            width: 100%;
            text-align: center;
            background: var(--ave-card-bg);
            border: 1px solid var(--ave-border);
            border-radius: 16px;
            padding: 56px 40px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 40px rgba(234, 39, 45, 0.05);
            backdrop-filter: blur(16px);
            position: relative;
            overflow: hidden;
        }

        /* Architectural top accent line */
        .error-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 20%;
            right: 20%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--ave-red), transparent);
        }

        /* CAD coordinate watermark */
        .error-cad-stamp {
            position: absolute;
            top: 18px;
            right: 24px;
            font-size: 10px;
            font-family: monospace;
            letter-spacing: 1.5px;
            color: rgba(255, 255, 255, 0.2);
            text-transform: uppercase;
        }

        /* Big status code */
        .error-code-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .error-code {
            font-family: 'Montserrat', sans-serif;
            font-size: 120px;
            font-weight: 800;
            line-height: 1;
            letter-spacing: 4px;
            background: linear-gradient(180deg, #ffffff 30%, rgba(255, 255, 255, 0.25) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
            user-select: none;
        }

        .error-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(234, 39, 45, 0.12);
            border: 1px solid rgba(234, 39, 45, 0.35);
            color: #ff5e63;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .error-badge svg {
            width: 14px;
            height: 14px;
        }

        /* Headings */
        .error-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 42px;
            font-weight: 600;
            line-height: 1.15;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .error-title em {
            font-style: italic;
            color: #ff5e63;
        }

        .error-desc {
            font-size: 16px;
            line-height: 1.7;
            color: var(--ave-muted);
            max-width: 580px;
            margin: 0 auto 36px auto;
            font-weight: 400;
        }

        /* Buttons & Actions */
        .error-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 38px;
        }

        .btn-ave-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: var(--ave-red);
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 4px 18px rgba(234, 39, 45, 0.35);
        }

        .btn-ave-primary:hover {
            background: var(--ave-red-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 22px rgba(234, 39, 45, 0.48);
            color: #ffffff;
            text-decoration: none;
        }

        .btn-ave-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.05);
            color: #f0f0f2;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.5px;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.15);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-ave-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
            color: #ffffff;
            transform: translateY(-2px);
            text-decoration: none;
        }

        /* Quick Directory Box */
        .error-quicklinks {
            border-top: 1px solid var(--ave-border);
            padding-top: 28px;
            margin-top: 8px;
        }

        .quicklinks-title {
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4);
            margin-bottom: 16px;
            font-weight: 600;
        }

        .quicklinks-grid {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px 20px;
        }

        .quicklink-item {
            color: var(--ave-muted);
            text-decoration: none;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s ease;
        }

        .quicklink-item:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .quicklink-item span {
            color: var(--ave-red);
            font-size: 15px;
        }

        /* Footer */
        .error-footer {
            border-top: 1px solid var(--ave-border);
            padding: 24px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.4);
            background: rgba(14, 14, 17, 0.7);
        }

        .error-footer a {
            color: var(--ave-muted);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .error-footer a:hover {
            color: #ffffff;
        }

        .error-socials {
            display: flex;
            gap: 16px;
        }

        @media (max-width: 768px) {
            .error-header {
                padding: 16px 20px;
            }
            .error-main {
                padding: 40px 16px;
            }
            .error-container {
                padding: 40px 20px;
            }
            .error-code {
                font-size: 82px;
            }
            .error-title {
                font-size: 32px;
            }
            .error-desc {
                font-size: 14.5px;
            }
            .error-actions {
                flex-direction: column;
                width: 100%;
            }
            .btn-ave-primary,
            .btn-ave-secondary {
                width: 100%;
            }
            .error-footer {
                flex-direction: column;
                gap: 12px;
                text-align: center;
                padding: 20px;
            }
            .error-cad-stamp {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="error-wrapper">
        <!-- Error Header -->
        <header class="error-header">
            <a href="{{ url('/') }}" class="error-brand">
                <img src="{{ asset('images/ave/logo.png') }}" alt="AVE Arquitectura">
                AVE<span>.</span>
            </a>
            <nav class="error-nav-right">
                <a href="{{ url('/') }}" class="nav-link-subtle">Inicio</a>
                <a href="{{ url('/#fh5co-proyectos') }}" class="nav-link-subtle">Proyectos</a>
                <a href="{{ url('/#fh5co-cursos') }}" class="nav-link-subtle">Cursos</a>
            </nav>
        </header>

        <!-- Error Main -->
        <main class="error-main">
            <div class="error-container">
                <div class="error-cad-stamp">AVE-CORE // ERR-@yield('code', 'HTTP') // COORD: {{ request()->path() }}</div>

                <div class="error-code-wrapper">
                    <div class="error-code">@yield('code', '404')</div>
                </div>

                <div>
                    <div class="error-badge">
                        @yield('icon')
                        <span>@yield('badge', 'Error de Sistema')</span>
                    </div>
                </div>

                <h1 class="error-title">@yield('title_heading')</h1>

                <p class="error-desc">
                    @yield('message')
                </p>

                <div class="error-actions">
                    @yield('actions')
                </div>

                <div class="error-quicklinks">
                    <div class="quicklinks-title">Secciones recomendadas</div>
                    <div class="quicklinks-grid">
                        <a href="{{ url('/') }}" class="quicklink-item"><span>›</span> Portada Principal</a>
                        <a href="{{ url('/#fh5co-proyectos') }}" class="quicklink-item"><span>›</span> Portafolio de Proyectos</a>
                        <a href="{{ url('/#fh5co-servicios') }}" class="quicklink-item"><span>›</span> Renderizado y Servicios</a>
                        <a href="{{ url('/#fh5co-cursos') }}" class="quicklink-item"><span>›</span> Cursos y Capacitación</a>
                        <a href="https://wa.me/525583531829" target="_blank" class="quicklink-item"><span>›</span> Contacto WhatsApp</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Error Footer -->
        <footer class="error-footer">
            <div>
                &copy; {{ date('Y') }} AVE Arquitectura. Todos los derechos reservados.
            </div>
            <div class="error-socials">
                <a href="https://www.instagram.com/ave_arquitectura" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/ProyectoAVEarquitectura" target="_blank">Facebook</a>
                <a href="https://wa.me/525583531829" target="_blank">WhatsApp</a>
            </div>
        </footer>
    </div>
</body>
</html>

@props([
    'backgroundImage' => 'images/ave/viviendas-efimeras.jpg',
    'badge' => 'Colectivo & Plataforma',
    'title' => 'AVE',
    'titleEm' => 'Arquitectura',
    'subtitle' => 'Representación arquitectónica, difusión de proyectos, renders y capacitación para arquitectos, diseñadores y estudiantes.',
])

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('{{ asset($backgroundImage) }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <span class="project-tag" style="padding: 6px 14px; font-size: 13px; margin-bottom: 15px;">{{ $badge }}</span>
                        <h1>{{ $title }} <em>{{ $titleEm }}</em></h1>
                        <h2 style="max-width: 760px; margin: 0 auto 32px auto; font-size: 20px; line-height: 1.6; color: #f5f5f5;">
                            {{ $subtitle }}
                        </h2>
                        <p>
                            <a href="#fh5co-proyectos" class="btn btn-primary btn-outline" style="padding: 12px 26px;">Ver Proyectos</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKVxlVzCkMfsSoZgyFbXALwwvJ7yn66Zg725dxXvA6ApJKGQ/viewform?usp=sf_link" target="_blank" class="btn btn-primary" style="padding: 12px 26px;">Forma parte de AVE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@props(['projects'])

<section id="fh5co-proyectos" class="fh5co-section" style="padding: 100px 0; background-color: #fdfdfd;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fh5co-heading animate-box text-center">
                <span class="project-tag">Portafolio</span>
                <h2 style="font-size: 38px; margin-bottom: 15px;">Proyectos Destacados</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p style="font-size: 15px; color: #666; line-height: 1.7;">
                            Explora el trabajo, investigación y talento de los arquitectos y diseñadores que colaboran activamente en la red de AVE.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row projects-grid">
            @forelse($projects as $project)
                <x-project-card :project="$project" />
            @empty
                <div class="col-md-12 text-center">
                    <p>No hay proyectos registrados en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@props(['courses'])

<section id="fh5co-cursos" class="fh5co-section animate-box" style="padding: 100px 0;">
    <div class="container">
        <div class="row about-row">
            <div class="col-md-5 col-sm-12 animate-box">
                <div class="fh5co-heading" style="margin-bottom: 30px;">
                    <span class="project-tag">Formación Continua</span>
                    <h2 style="font-size: 38px; margin-bottom: 20px;">Aprende con <em>AVE</em></h2>
                    <p style="font-size: 15px; color: #555; line-height: 1.8;">
                        Cursos pensados para potenciar tus habilidades técnicas y creativas en las herramientas más demandadas de la arquitectura actual.
                    </p>
                    <p style="font-size: 15px; color: #555; line-height: 1.8;">
                        Aprende desde los fundamentos hasta técnicas avanzadas de representación gráfica, iluminación y expresión digital.
                    </p>
                    <div style="margin-top: 30px;">
                        <a href="https://wa.me/525583531829?text=Hola,%20me%20interesa%20información%20sobre%20los%20cursos%20de%20AVE%20Arquitectura" target="_blank" class="btn btn-primary" style="padding: 12px 24px;">
                            Pedir Información de Cursos
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 animate-box">
                <aside id="fh5co-slider-wrwap" style="border-radius: 8px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($courses as $course)
                                <li style="background-image: url('{{ asset($course->image) }}'); min-height: 380px; position: relative;">
                                    <div class="overlay-gradient" style="background: rgba(0,0,0,0.35);"></div>
                                    <div class="container-fluid" style="height: 100%;">
                                        <div class="row" style="height: 100%; display: flex; align-items: center; padding: 40px 20px;">
                                            <div class="col-md-11 col-md-offset-1">
                                                <div class="slider-text-inner">
                                                    <span class="project-tag">{{ $course->badge }}</span>
                                                    <h2 style="color: #fff; font-size: 28px; margin: 10px 0 12px 0;">{{ $course->title }}</h2>
                                                    <p style="color: #eee; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                                                        {{ $course->description }}
                                                    </p>
                                                    <p style="margin-bottom: 0;">
                                                        <a href="https://wa.me/525583531829?text={{ urlencode($course->whatsapp_message ?? 'Hola, me interesa el curso de ' . $course->title) }}" target="_blank" class="btn btn-primary btn-outline" style="padding: 8px 20px; font-size: 13px;">
                                                            Más Detalles por WhatsApp
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

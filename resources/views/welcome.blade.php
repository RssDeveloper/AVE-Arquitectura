<x-layouts.app>
    <x-navbar />

    <x-hero 
        backgroundImage="images/ave/viviendas-efimeras.jpg"
        badge="Colectivo & Plataforma"
        title="AVE"
        titleEm="Arquitectura"
        subtitle="Representación arquitectónica, difusión de proyectos, renders y capacitación para arquitectos, diseñadores y estudiantes."
    />

    <x-about />

    <x-projects :projects="$featuredProjects" />

    <x-services />

    <x-course-slider :courses="$activeCourses" />

    <x-cta-banner />

    <x-footer />
</x-layouts.app>

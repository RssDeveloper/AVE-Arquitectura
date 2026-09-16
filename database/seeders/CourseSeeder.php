<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Modelado con SketchUp',
                'slug' => 'sketchup',
                'badge' => 'Modelado 3D',
                'description' => 'Domina el modelado tridimensional ágil, estructuración limpia por capas, creación de componentes y preparación para motores de render.',
                'image' => 'images/ave/cursos.jpg',
                'whatsapp_message' => 'Hola, me interesa el curso de SketchUp',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Representación Digital',
                'slug' => 'representacion-digital',
                'badge' => 'Visualización',
                'description' => 'Composición de escenas, iluminación arquitectónica realista, aplicación de texturas y postproducción profesional de proyectos.',
                'image' => 'images/ave/renderizado.jpg',
                'whatsapp_message' => 'Hola, me interesa el curso de Representación Digital',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'AutoCAD Arquitectónico',
                'slug' => 'autocad',
                'badge' => 'Planimetría',
                'description' => 'Estandarización de layers, cotas, escalas de impresión y dibujo técnico ejecutivo de alta calidad según normas vigentes.',
                'image' => 'images/ave/proyectos_hero.jpg',
                'whatsapp_message' => 'Hola, me interesa el curso de AutoCAD',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['slug' => $course['slug']],
                $course
            );
        }
    }
}

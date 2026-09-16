<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Casa Ramos',
                'slug' => 'casa-ramos',
                'author' => 'Jair Guzmán',
                'category' => 'Ampliación Residencial',
                'description' => 'En un área existente de 56 m² de desplante se diseñó una ampliación de 77 m² para una pareja, que permitiera una gran área social integrada a lo construido previamente.',
                'image' => 'images/ave/casa-ramos.jpg',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Residencia RECA',
                'slug' => 'reca',
                'author' => 'Sofía Campos',
                'category' => 'Alojamiento Estudiantil',
                'description' => 'El proyecto surge de la investigación sobre la necesidad de alojamiento para estudiantes locales y de intercambio en Cartagena, España.',
                'image' => 'images/ave/reca.jpg',
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Casa Jardines',
                'slug' => 'casa-jardines',
                'author' => 'Zurisadai Mercado + Jair Guzmán',
                'category' => 'Vivienda Compartida',
                'description' => 'Ampliación dentro de la CDMX en un nivel que brinda espacios abiertos internos, con vivienda familiar y habitaciones compartidas para estudiantes.',
                'image' => 'images/ave/casa-jardines.jpg',
                'order' => 3,
                'is_featured' => true,
            ],
            [
                'title' => 'Viviendas Efímeras',
                'slug' => 'viviendas-efimeras',
                'author' => 'Zurisadai Mercado + Jair Guzmán',
                'category' => 'Vivienda Mínima',
                'description' => 'En 30 m² por nivel se concibieron viviendas dignas mínimas para renta, optimizando el área reglamentaria para generar espacios flexibles.',
                'image' => 'images/ave/viviendas-efimeras.jpg',
                'order' => 4,
                'is_featured' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}

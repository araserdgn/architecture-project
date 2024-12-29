<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'Modern Villa Projesi',
                'category' => 'Konut',
                'short_description' => 'Doğa ile iç içe modern yaşam alanı tasarımı',
                'description' => 'Modern villa projemiz, çağdaş mimari ile doğal yaşamı harmanlıyor. Geniş pencereler ve açık yaşam alanları ile doğayla iç içe bir yaşam sunuyor.',
                'client' => 'Ahmet Yılmaz',
                'project_date' => '2024-03-01',
                'location' => 'İstanbul, Türkiye',
                'area' => '450 m²',
                'images' => [
                    'gallery-1.jpg',
                    'gallery-2.jpg',
                    'gallery-3.jpg',
                    'gallery-4.jpg'
                ],
            ],
            [
                'title' => 'Ticari Plaza Projesi',
                'category' => 'Ticari',
                'short_description' => 'Modern iş merkezi tasarımı',
                'description' => 'Şehir merkezinde konumlanan modern iş merkezi projesi, sürdürülebilir mimari anlayışıyla tasarlandı.',
                'client' => 'ABC Holding',
                'project_date' => '2024-02-15',
                'location' => 'Ankara, Türkiye',
                'area' => '2500 m²',
                'images' => ['gallery-4.jpg', 'gallery-5.jpg', 'gallery-6.jpg'],
            ],
            [
                'title' => 'Yeşil Vadi Konutları',
                'category' => 'Konut',
                'short_description' => 'Ekolojik yaşam alanı',
                'description' => 'Doğa dostu malzemeler ve yenilenebilir enerji sistemleriyle tasarlanan konut projesi.',
                'client' => 'Yeşil Yapı Ltd.',
                'project_date' => '2024-01-20',
                'location' => 'İzmir, Türkiye',
                'area' => '1200 m²',
                'images' => ['gallery-7.jpg', 'gallery-8-2.jpg', 'gallery-9.jpg'],
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'title' => $project['title'],
                'slug' => Str::slug($project['title']),
                'category' => $project['category'],
                'short_description' => $project['short_description'],
                'description' => $project['description'],
                'client' => $project['client'],
                'project_date' => $project['project_date'],
                'location' => $project['location'],
                'area' => $project['area'],
                'images' => $project['images'],
                'is_active' => true,
                'order' => 0
            ]);
        }
    }
}

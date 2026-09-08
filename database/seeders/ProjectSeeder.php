<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Веб-приложение для управления задачами',
            'description' => 'Fullstack-приложение для управления проектами и задачами с использованием Laravel и Vue.js.',
            'image' => 'https://via.placeholder.com/600x400',
            'url' => 'https://github.com/yourusername/project1',
            'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'Интеграция платежных систем с CRM',
            'description' => 'Комплексная система интеграции эквайринга и логистики с RetailCRM для автоматизации бизнес-процессов.',
            'image' => 'https://via.placeholder.com/600x400',
            'url' => 'https://github.com/yourusername/project2',
            'technologies' => ['PHP', 'RetailCRM', 'REST API', 'Telegram Bot API'],
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'SPA-дашборд на Vue.js',
            'description' => 'Интерактивный дашборд для аналитики с графиками и фильтрацией данных.',
            'image' => 'https://via.placeholder.com/600x400',
            'url' => 'https://github.com/yourusername/project3',
            'technologies' => ['Vue.js', 'Chart.js', 'Laravel API', 'Tailwind CSS'],
            'is_featured' => false,
        ]);
    }
}
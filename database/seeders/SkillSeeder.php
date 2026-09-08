<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'Laravel', 'icon' => '🐘', 'category' => 'backend', 'level' => 90],
            ['name' => 'Vue.js', 'icon' => '🟢', 'category' => 'frontend', 'level' => 85],
            ['name' => 'PHP 8', 'icon' => '⚡', 'category' => 'backend', 'level' => 95],
            ['name' => 'MySQL', 'icon' => '🐬', 'category' => 'database', 'level' => 80],
            ['name' => 'Docker', 'icon' => '🐳', 'category' => 'devops', 'level' => 70],
            ['name' => 'REST API', 'icon' => '🌐', 'category' => 'backend', 'level' => 90],
            ['name' => 'React', 'icon' => '⚛️', 'category' => 'frontend', 'level' => 75],
            ['name' => 'Git', 'icon' => '📚', 'category' => 'devops', 'level' => 85],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
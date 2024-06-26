<?php

namespace Database\Seeders;

use App\Models\Attributes\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['MS word', 'powerpint', 'Typing'];

        foreach($data as $item){
            Skill::create([
                'name'=> $item,
                'slug'=> Str::slug($item, '-'),
                'user_id'=> 1
            ]);
        }
    }
}

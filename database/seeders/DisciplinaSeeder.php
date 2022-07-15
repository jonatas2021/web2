<?php

namespace Database\Seeders;

use App\Models\disciplina;
use App\Models\estudante;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            disciplina::factory()->create([
                'user_id' => User::all()->random()->id
            ]);
        }
    }
}

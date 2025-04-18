<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serieTeste = Serie::create([
            'nome' => 'GOT',
            'episodios' => 10,
            'classificacao_indicativa' => 18
        ]);
    }
}

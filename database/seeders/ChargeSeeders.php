<?php

namespace Database\Seeders;

use App\Models\Charge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChargeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $charges = [
            [
                'charge' => '-Instructor de Tecnologías de información en Software',
                'occupation_id' => 10,
                'company_id' => 2,
            ],
            [
                'charge' => 'Talento Humano',
                'occupation_id' => 6,
                'company_id' => 2,
            ],
            [
                'charge' => 'Cultura Física',
                'occupation_id' => 17,
                'company_id' => 2,
            ],
            [
                'charge' => 'Gestión Empresaria',
                'occupation_id' => 1,
                'company_id' => 2,
            ],
            [
                'charge' => 'Instructor de Tecnologías de información en infraestructura y redes de datos',
                'occupation_id' => 12,
                'company_id' => 2,
            ]
        ];

        foreach ($charges as $chargeData) {
            Charge::create($chargeData);
        }
    }
    }

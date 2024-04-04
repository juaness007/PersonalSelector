<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'nit' => '123456789-0',
                'business_name' => 'SENA',
                'phone' => '123456789',
                'country_id' => 37,
                'city_id' => 1,
                'email' => 'empresaA@example.com',
                'address' => 'Calle 123, Soacha',
            ],
            [
                'nit' => '987654321-0',
                'business_name' => 'Servicio Nacional de Aprendizaje',
                'phone' => '987654241',
                'country_id' => 37,
                'city_id' => 2,
                'email' => 'empresaB@example.com',
                'address' => 'Avenida Principal, Bogota',
            ]
        ];

        foreach ($companies as $companyData) {
            Company::create($companyData);
        }
    }
}
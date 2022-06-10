<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    private $departments;

    public function __construct()
    {
        /*
          set the default seeds array departamens
        */
        $this->departments =  [
            'Antioquia',
            'Atlantico',
            'Bolivar',
            'Boyaca',
            'Caldas',
            'Caqueta',
            'Cauca',
            'Cesar',
            'Cordoba',
            'Cundinamarca',
            'Choco',
            'Huila',
            'La Guajira',
            'Magdalena',
            'Meta',
            'Nariño',
            'Norte de Santander',
            'Quindio',
            'Risaralda',
            'Santander',
            'Sucre',
            'Tolima',
            'Valle del Cauca',
            'Arauca',
            'Casanare',
            'Putumayo',
            'San Andres',
            'Amazonas',
            'Guainia',
            'Guaviare',
            'Vaupes',
            'Vichada',
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->departments as $department) {
            Department::create(['name' => $department]);
        }
    }
}

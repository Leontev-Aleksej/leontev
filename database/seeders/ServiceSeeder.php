<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{


    public function run(): void
    {
        Service::insert(
            [
                [
                    'title' => 'общий клининг',
                ],
                [
                    'title' => 'генеральная уборка',
                ]
            ]
        );
    }

}

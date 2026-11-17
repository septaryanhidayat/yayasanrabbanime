<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminUsers = [
            [
                'email' => 'admin@rabbanime.sch.id',
                'name' => 'Administrator Yayasan Generasi Rabbani',
                'password' => bcrypt('Rabbani2026!'),
                'role' => 'super_admin',
                'unit' => 'yayasan',
            ],
            [
                'email' => 'admin_tk@rabbanime.sch.id',
                'name' => 'Admin TKS IT Rabbani Muara Enim',
                'password' => bcrypt('Rabbani2026!'),
                'role' => 'admin',
                'unit' => 'tk',
            ],
            [
                'email' => 'admin_sd@rabbanime.sch.id',
                'name' => 'Admin SDS IT Rabbani Muara Enim',
                'password' => bcrypt('Rabbani2026!'),
                'role' => 'admin',
                'unit' => 'sd',
            ],
            [
                'email' => 'admin_smp@rabbanime.sch.id',
                'name' => 'Admin SMPS IT Rabbani Muara Enim',
                'password' => bcrypt('Rabbani2026!'),
                'role' => 'admin',
                'unit' => 'smp',
            ],
            [
                'email' => 'admin_sma@rabbanime.sch.id',
                'name' => 'Admin SMA IT Rabbani Muara Enim',
                'password' => bcrypt('Rabbani2026!'),
                'role' => 'admin',
                'unit' => 'sma',
            ],
        ];

        foreach ($adminUsers as $usr) {
            User::updateOrCreate(
                ['email' => $usr['email']],
                $usr
            );
        }

        $this->call([
            SchoolDataSeeder::class,
            UnitNewsPrestasiSeeder::class,
            EkstrakurikulerSeeder::class,
            DownloadSeeder::class,
        ]);
    }
}

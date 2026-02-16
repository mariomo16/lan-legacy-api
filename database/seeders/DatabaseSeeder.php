<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Computer;

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
        foreach (range(1, 5) as $i) {
            Computer::create([
                'code' => "PRO-" . str_pad($i, 2, '0', STR_PAD_LEFT),
                'range' => 'pro',
                'price_per_hour' => 7.00,
                'specs' => 'RTX 4070 Ti, 32GB RAM, Ryzen 7',
                'status' => 'available'
            ]);
        }

        foreach (range(6, 15) as $i) {
            Computer::create([
                'code' => "STD-" . str_pad($i, 2, '0', STR_PAD_LEFT),
                'range' => 'standard',
                'price_per_hour' => 4.00,
                'specs' => 'RTX 4060, 16GB RAM, Ryzen 5',
                'status' => 'available'
            ]);
        }

        User::create([
            'name' => 'LAN-Legacy Admin',
            'email' => 'admin@lanlegacy.es',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
            'wallet_balance' => 999.99
        ]);

        User::create([
            'name' => 'Mario Ortega',
            'email' => 'cliente@test.com',
            'password' => bcrypt('Cliente123'),
            'role' => 'customer',
            'wallet_balance' => 10.00
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            [
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'telefone' => '+55 123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Souza',
                'email' => 'maria.souza@example.com',
                'telefone' => '+55 987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

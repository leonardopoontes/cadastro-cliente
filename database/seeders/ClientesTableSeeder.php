<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientesTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'cpf' => '12345678901',
                'nome' => 'João Silva',
                'sexo' => 'Masculino',
                'nascimento' => '1990-01-01',
                'endereco' => 'Rua A, 123',
                'estado' => 'SP',
                'cidade' => 'Republica'
            ],
            [
                'cpf' => '23456789012',
                'nome' => 'Maria Souza',
                'sexo' => 'Feminino',
                'nascimento' => '1985-03-15',
                'endereco' => 'Rua B, 456',
                'estado' => 'RJ',
                'cidade' => 'Nova Varzea'
            ],
            [
                'cpf' => '34567890123',
                'nome' => 'José Santos',
                'sexo' => 'Masculino',
                'nascimento' => '1982-05-10',
                'endereco' => 'Rua C, 789',
                'estado' => 'MG',
                'cidade' => 'Aerianopolis'
            ],
        ]);
    }
}

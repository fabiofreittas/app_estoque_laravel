<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Sabão', 12, 3.5, '2018-11-01'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Amaciante', 20, 11, '2018-10-04'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Creme Dental', 100, 5, '2018-11-03'));

    }
}

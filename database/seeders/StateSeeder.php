<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => '1',
                'title' => 'Acre',
                'letter' => 'AC',
                'iso' => '12',
                'slug' => 'acre',
                'region_id' => 1
            ),
            1 =>
            array (
                'id' => '2',
                'title' => 'Alagoas',
                'letter' => 'AL',
                'iso' => '27',
                'slug' => 'alagoas',
                'region_id' => 2
            ),
            2 =>
            array (
                'id' => '3',
                'title' => 'Amazonas',
                'letter' => 'AM',
                'iso' => '13',
                'slug' => 'amazonas',
                'region_id' => 1
            ),
            3 =>
            array (
                'id' => '4',
                'title' => 'Amapá',
                'letter' => 'AP',
                'iso' => '16',
                'slug' => 'amapa',
                'region_id' => 1
            ),
            4 =>
            array (
                'id' => '5',
                'title' => 'Bahia',
                'letter' => 'BA',
                'iso' => '29',
                'slug' => 'bahia',
                'region_id' => 2
            ),
            5 =>
            array (
                'id' => '6',
                'title' => 'Ceará',
                'letter' => 'CE',
                'iso' => '23',
                'slug' => 'ceara',
                'region_id' => 2
            ),
            6 =>
            array (
                'id' => '7',
                'title' => 'Distrito Federal',
                'letter' => 'DF',
                'iso' => '53',
                'slug' => 'distrito-federal',
                'region_id' => 3
            ),
            7 =>
            array (
                'id' => '8',
                'title' => 'Espírito Santo',
                'letter' => 'ES',
                'iso' => '32',
                'slug' => 'espirito-santo',
                'region_id' => 4
            ),
            8 =>
            array (
                'id' => '9',
                'title' => 'Goiás',
                'letter' => 'GO',
                'iso' => '52',
                'slug' => 'goias',
                'region_id' => 3
            ),
            9 =>
            array (
                'id' => '10',
                'title' => 'Maranhão',
                'letter' => 'MA',
                'iso' => '21',
                'slug' => 'maranhao',
                'region_id' => 2
            ),
            10 =>
            array (
                'id' => '11',
                'title' => 'Minas Gerais',
                'letter' => 'MG',
                'iso' => '31',
                'slug' => 'minas-gerais',
                'region_id' => 4
            ),
            11 =>
            array (
                'id' => '12',
                'title' => 'Mato Grosso do Sul',
                'letter' => 'MS',
                'iso' => '50',
                'slug' => 'mato-grosso-do-sul',
                'region_id' => 3
            ),
            12 =>
            array (
                'id' => '13',
                'title' => 'Mato Grosso',
                'letter' => 'MT',
                'iso' => '51',
                'slug' => 'mato-grosso',
                'region_id' => 3
            ),
            13 =>
            array (
                'id' => '14',
                'title' => 'Pará',
                'letter' => 'PA',
                'iso' => '15',
                'slug' => 'para',
                'region_id' => 1
            ),
            14 =>
            array (
                'id' => '15',
                'title' => 'Paraiba',
                'letter' => 'PB',
                'iso' => '25',
                'slug' => 'paraiba',
                'region_id' => 2
            ),
            15 =>
            array (
                'id' => '16',
                'title' => 'Pernambuco',
                'letter' => 'PE',
                'iso' => '26',
                'slug' => 'pernambuco',
                'region_id' => 2
            ),
            16 =>
            array (
                'id' => '17',
                'title' => 'Piauí',
                'letter' => 'PI',
                'iso' => '22',
                'slug' => 'piaui',
                'region_id' => 2
            ),
            17 =>
            array (
                'id' => '18',
                'title' => 'Paraná',
                'letter' => 'PR',
                'iso' => '41',
                'slug' => 'parana',
                'region_id' => 5
            ),
            18 =>
            array (
                'id' => '19',
                'title' => 'Rio de Janeiro',
                'letter' => 'RJ',
                'iso' => '33',
                'slug' => 'rio-de-janeiro',
                'region_id' => 4
            ),
            19 =>
            array (
                'id' => '20',
                'title' => 'Rio Grande do Norte',
                'letter' => 'RN',
                'iso' => '24',
                'slug' => 'rio-grande-do-norte',
                'region_id' => 2
            ),
            20 =>
            array (
                'id' => '21',
                'title' => 'Rondônia',
                'letter' => 'RO',
                'iso' => '11',
                'slug' => 'rondonia',
                'region_id' => 1
            ),
            21 =>
            array (
                'id' => '22',
                'title' => 'Roraima',
                'letter' => 'RR',
                'iso' => '14',
                'slug' => 'roraima',
                'region_id' => 1
            ),
            22 =>
            array (
                'id' => '23',
                'title' => 'Rio Grande do Sul',
                'letter' => 'RS',
                'iso' => '43',
                'slug' => 'rio-grande-do-sul',
                'region_id' => 5
            ),
            23 =>
            array (
                'id' => '24',
                'title' => 'Santa Catarina',
                'letter' => 'SC',
                'iso' => '42',
                'slug' => 'santa-catarina',
                'region_id' => 5
            ),
            24 =>
            array (
                'id' => '25',
                'title' => 'Sergipe',
                'letter' => 'SE',
                'iso' => '28',
                'slug' => 'sergipe',
                'region_id' => 2
            ),
            25 =>
            array (
                'id' => '26',
                'title' => 'São Paulo',
                'letter' => 'SP',
                'iso' => '35',
                'slug' => 'sao-paulo',
                'region_id' => 4
            ),
            26 =>
            array (
                'id' => '27',
                'title' => 'Tocantins',
                'letter' => 'TO',
                'iso' => '17',
                'slug' => 'tocantins',
                'region_id' => 1
            ),
        ));

    }
}

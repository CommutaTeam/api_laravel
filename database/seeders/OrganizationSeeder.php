<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Institutos Federais
        DB::table('organizations')->insert([
            [
                'name' => 'Instituto Federal do Acre',
                'acronym' => 'IFAC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Alagoas',
                'acronym' => 'IFAL',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Amapá',
                'acronym' => 'IFAP',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Amazonas',
                'acronym' => 'IFAM',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal da Bahia',
                'acronym' => 'IFBA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Ceará',
                'acronym' => 'IFCE',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Brasília',
                'acronym' => 'IFB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Espírito Santo',
                'acronym' => 'IFES',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Goiás',
                'acronym' => 'IFG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Mato Grosso',
                'acronym' => 'IFMT',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Maranhão',
                'acronym' => 'IFMA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Mato Grosso do Sul',
                'acronym' => 'IFMS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Minas Gerais',
                'acronym' => 'IFMG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Pará',
                'acronym' => 'IFPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal da Paraíba',
                'acronym' => 'IFPB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Paraná',
                'acronym' => 'IFPR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Pernambuco',
                'acronym' => 'IFPE',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Piauí',
                'acronym' => 'IFPI',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Rio de Janeiro',
                'acronym' => 'IFRJ',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Rio Grande do Norte',
                'acronym' => 'IFRN',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal do Rio Grande do Sul',
                'acronym' => 'IFRS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Rondônia',
                'acronym' => 'IFRO',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Roraima',
                'acronym' => 'IFRR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de São Paulo',
                'acronym' => 'IFSP',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Santa Catarina',
                'acronym' => 'IFSC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Sergipe',
                'acronym' => 'IFS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Instituto Federal de Tocantins',
                'acronym' => 'IFTO',
                'sphere_id' => 3
            ],

            // Universidades Federais
            [
                'name' => 'Universidade de Brasília',
                'acronym' => 'UNB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Grande Dourados',
                'acronym' => 'UFGD',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Goiás',
                'acronym' => 'UFGD',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Mato Grosso ',
                'acronym' => 'UFMT',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Mato Grosso do Sul',
                'acronym' => 'UFMS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Catalão',
                'acronym' => 'UFCat',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Jataí ',
                'acronym' => 'UFJ',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Rondonópolis',
                'acronym' => 'UFR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Bahia',
                'acronym' => 'UFBA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Sul da Bahia',
                'acronym' => 'UFSB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Recôncavo da Bahia',
                'acronym' => 'UFRB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Lusofonia Afro-Brasileira',
                'acronym' => 'UNILAB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Paraíba',
                'acronym' => 'UFPB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Cariri',
                'acronym' => 'UFCA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Alagoas',
                'acronym' => 'UFAL',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Campina Grande',
                'acronym' => 'UFCG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Pernambuco',
                'acronym' => 'UFPE',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Sergipe',
                'acronym' => 'UFS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Ceará',
                'acronym' => 'UFC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Maranhão',
                'acronym' => 'UFMA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Oeste da Bahia',
                'acronym' => 'UFOB',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Piauí',
                'acronym' => 'UFPI',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Rio Grande do Norte',
                'acronym' => 'UFRN',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Vale do São Francisco',
                'acronym' => 'UNIVASF',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal Rural de Pernambuco',
                'acronym' => 'UFRPE',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal Rural do Semi-Árido',
                'acronym' => 'UFERSA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Rondônia',
                'acronym' => 'UNIR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Roraima',
                'acronym' => 'UFRR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Acre',
                'acronym' => 'UFAC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Amapá',
                'acronym' => 'UNIFAP',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Amazonas',
                'acronym' => 'UFAM',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Oeste do Pará',
                'acronym' => 'UFOPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Pará',
                'acronym' => 'UFPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Tocantins',
                'acronym' => 'UFT',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal Rural da Amazônia',
                'acronym' => 'UFRA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Sul e Sudeste do Pará',
                'acronym' => 'UNIFESSPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Alfenas',
                'acronym' => 'UNIFAL-MG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Itajubá',
                'acronym' => 'UNIFEI',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Juiz de Fora',
                'acronym' => 'UFJF',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Lavras',
                'acronym' => 'UFLA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Minas Gerais',
                'acronym' => 'UFMG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Ouro Preto',
                'acronym' => 'UFOP',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de São Carlos',
                'acronym' => 'UFSCAR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de São João del-Rei',
                'acronym' => 'UFSJ',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de São Paulo',
                'acronym' => 'UNIFESP',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Uberlândia',
                'acronym' => 'UFU',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Viçosa',
                'acronym' => 'UFV',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do ABC',
                'acronym' => 'UFABC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Espírito Santo',
                'acronym' => 'UFES',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Estado do Rio de Janeiro',
                'acronym' => 'UNIRIO',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Rio de Janeiro',
                'acronym' => 'UFRJ',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Triângulo Mineiro',
                'acronym' => 'UFTM',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal dos Vales do Jequitinhonha e Mucuri',
                'acronym' => 'UFVJM',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal Fluminense',
                'acronym' => 'UFF',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal Rural do Rio de Janeiro',
                'acronym' => 'UFRRJ',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Tecnológica Federal do Paraná',
                'acronym' => 'UTFPR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Fronteira Sul',
                'acronym' => 'UFFS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal da Integração Latino-Americana',
                'acronym' => 'UNILA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Ciências da Saúde de Porto Alegre',
                'acronym' => 'UFCSPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Pelotas',
                'acronym' => 'UFPEL',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Santa Catarina',
                'acronym' => 'UFSC',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal de Santa Maria',
                'acronym' => 'UFSM',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Pampa',
                'acronym' => 'UNIPAMPA',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Paraná',
                'acronym' => 'UFPR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Rio Grande',
                'acronym' => 'FURG',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Rio Grande do Sul',
                'acronym' => 'UFRGS',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Agreste de Pernambuco',
                'acronym' => 'UFAPE',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Delta do Parnaíba',
                'acronym' => 'UFDPAR',
                'sphere_id' => 3
            ],
            [
                'name' => 'Universidade Federal do Norte do Tocantins',
                'acronym' => 'UFNT',
                'sphere_id' => 3
            ],
        ]);
    }
}

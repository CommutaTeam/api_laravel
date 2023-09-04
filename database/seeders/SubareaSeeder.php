<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subareas')->insert([
            // Ciências Exatas e da Terra
            ['name' => 'Matemática', 'area_id' => 1],
            ['name' => 'Ciência da Computação', 'area_id' => 1],
            ['name' => 'Astronomia', 'area_id' => 1],
            ['name' => 'Física', 'area_id' => 1],
            ['name' => 'Química', 'area_id' => 1],
            ['name' => 'GeoCiências', 'area_id' => 1],
            ['name' => 'Oceanografia', 'area_id' => 1],

            // Ciências Biológicas
            ['name' => 'Biologia Geral', 'area_id' => 2],
            ['name' => 'Genética', 'area_id' => 2],
            ['name' => 'Botânica', 'area_id' => 2],
            ['name' => 'Zoologia', 'area_id' => 2],
            ['name' => 'Ecologia', 'area_id' => 2],
            ['name' => 'Morfologia', 'area_id' => 2],
            ['name' => 'Fisiologia', 'area_id' => 2],
            ['name' => 'Bioquímica', 'area_id' => 2],
            ['name' => 'Biofísica', 'area_id' => 2],
            ['name' => 'Farmacologia', 'area_id' => 2],
            ['name' => 'Imunologia', 'area_id' => 2],
            ['name' => 'Microbiologia', 'area_id' => 2],
            ['name' => 'Parasitologia', 'area_id' => 2],

            // Engenharias
            ['name' => 'Engenharia Civil', 'area_id' => 3],
            ['name' => 'Engenharia de Minas', 'area_id' => 3],
            ['name' => 'Engenharia de Materiais e Metalúrgica', 'area_id' => 3],
            ['name' => 'Engenharia Elétrica', 'area_id' => 3],
            ['name' => 'Engenharia Mecânica', 'area_id' => 3],
            ['name' => 'Engenharia Química', 'area_id' => 3],
            ['name' => 'Engenharia Sanitária', 'area_id' => 3],
            ['name' => 'Engenharia de Produção', 'area_id' => 3],
            ['name' => 'Engenharia Nuclear', 'area_id' => 3],
            ['name' => 'Engenharia de Transportes', 'area_id' => 3],
            ['name' => 'Engenharia Naval e Oceânica', 'area_id' => 3],
            ['name' => 'Engenharia Aeroespacial', 'area_id' => 3],
            ['name' => 'Engenharia Biomédica', 'area_id' => 3],

            // Ciências da Saúde
            ['name' => 'Medicina', 'area_id' => 4],
            ['name' => 'Odontologia', 'area_id' => 4],
            ['name' => 'Farmácia', 'area_id' => 4],
            ['name' => 'Enfermagem', 'area_id' => 4],
            ['name' => 'Nutrição', 'area_id' => 4],
            ['name' => 'Saúde Coletiva', 'area_id' => 4],
            ['name' => 'Fonoaudiologia', 'area_id' => 4],
            ['name' => 'Fisioterapia e Terapia Ocupacional', 'area_id' => 4],
            ['name' => 'Educação Física', 'area_id' => 4],

            // Ciências Agrárias
            ['name' => 'Agronomia', 'area_id' => 5],
            ['name' => 'Recursos Florestais e Engenharia Florestal', 'area_id' => 5],
            ['name' => 'Engenharia Agrícola', 'area_id' => 5],
            ['name' => 'Zootecnia', 'area_id' => 5],
            ['name' => 'Medicina Veterinária', 'area_id' => 5],
            ['name' => 'Recursos Pesqueiros e Engenharia de Pesca', 'area_id' => 5],
            ['name' => 'Ciência e Tecnologia de Alimentos', 'area_id' => 5],

            // Ciências Sociais
            ['name' => 'Direito', 'area_id' => 6],
            ['name' => 'Administração', 'area_id' => 6],
            ['name' => 'Economia', 'area_id' => 6],
            ['name' => 'Arquitetura e Urbanismo', 'area_id' => 6],
            ['name' => 'Planejamento Urbano e Regional', 'area_id' => 6],
            ['name' => 'Demografia', 'area_id' => 6],
            ['name' => 'Ciência da Informação', 'area_id' => 6],
            ['name' => 'Museologia', 'area_id' => 6],
            ['name' => 'Comunicação', 'area_id' => 6],
            ['name' => 'Serviço Social', 'area_id' => 6],
            ['name' => 'Economia Doméstica', 'area_id' => 6],
            ['name' => 'Desenho Industrial', 'area_id' => 6],
            ['name' => 'Turismo', 'area_id' => 6],

            // Ciências Humanas
            ['name' => 'Filosofia', 'area_id' => 7],
            ['name' => 'Sociologia', 'area_id' => 7],
            ['name' => 'Antropologia', 'area_id' => 7],
            ['name' => 'Arqueologia', 'area_id' => 7],
            ['name' => 'História', 'area_id' => 7],
            ['name' => 'Geografia', 'area_id' => 7],
            ['name' => 'Psicologia', 'area_id' => 7],
            ['name' => 'Educação', 'area_id' => 7],
            ['name' => 'Ciência Política', 'area_id' => 7],
            ['name' => 'Teologia', 'area_id' => 7],

            // Linguística, Letras e Artes
            ['name' => 'Linguística', 'area_id' => 8],
            ['name' => 'Letras', 'area_id' => 8],
            ['name' => 'Artes', 'area_id' => 8],
        ]);
    }
}

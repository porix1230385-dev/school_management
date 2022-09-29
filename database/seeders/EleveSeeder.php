<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //37
        // 38
        // 39
        // 40
        // 41
        // 42
        // 43
        // 44
        // 45
        // 46
        // $dt = new DateTime();
        $statut_eleve = ['AF','NAF'];
        $villes = ['Abidjan','Yamoussoukro','Bouake','Ferkessedougou','Daloa','Bonoua','Daoukro','Gagnoa','Man','odienne'];
        $nationnalites = ['Ivoirienne','Gabonnaise','Francaise','Italienne','Allemande','Perouvienne','Russe','Americaine','Anglaise','burkinabe','Malienne'];
        $data = [
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' =>37],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 38],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 39],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 40],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 41],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 42],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 43],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 44],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 45],
            [
            'matricule' => strtoupper(Str::random(3)),
            'date_naissance' => date('Y-m-d H:i:s'),
            'lieu_naissance' =>$villes[array_rand($villes)],
            'nationnalite' => $nationnalites[array_rand($nationnalites)],
            'statut_eleve' => $statut_eleve[array_rand($statut_eleve)],
            'user_id' => 46],
        ];
        DB::table('eleves')->insert($data);     

    }
}

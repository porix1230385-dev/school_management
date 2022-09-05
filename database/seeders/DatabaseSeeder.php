<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\NoteSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CycleSeeder;
use Database\Seeders\EleveSeeder;
use Database\Seeders\ClasseSeeder;
use Database\Seeders\NiveauSeeder;
use Database\Seeders\ParentSeeder;
use Database\Seeders\ProfilSeeder;
use Database\Seeders\MatiereSeeder;
use Database\Seeders\InscrireSeeder;
use Database\Seeders\ParenterSeeder;
use Database\Seeders\VersementSeeder;
use Database\Seeders\EnseignantSeeder;
use Database\Seeders\EvaluationSeeder;
use Database\Seeders\AvoirProfilSeeder;
use Database\Seeders\InstituteurSeeder;
use Database\Seeders\EstEnseignerSeeder;
use Database\Seeders\AnneeScolaireSeeder;
use Database\Seeders\AdministrationSeeder;
use Database\Seeders\ClassePrimaireSeeder;
use Database\Seeders\TypeEvaluationSeeder;
use Database\Seeders\ClasseSecondaireSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProfilSeeder::class,
            AvoirProfilSeeder::class,
            EnseignantSeeder::class,
            InstituteurSeeder::class,
            ParentSeeder::class,
            EleveSeeder::class,
            AdministrationSeeder::class,
            CycleSeeder::class,
            NiveauSeeder::class,
            ClasseSeeder::class,
            MatiereSeeder::class,
            ClasseSecondaireSeeder::class,
            ClassePrimaireSeeder::class,
            AnneeScolaireSeeder::class,
            EnseignerSeeder::class,
            ParenterSeeder::class,
            InscrireSeeder::class,
            VersementSeeder::class,
            EstEnseignerSeeder::class,
            TypeEvaluationSeeder::class,
            EvaluationSeeder::class,
            NoteSeeder::class
        ]);
    }
}

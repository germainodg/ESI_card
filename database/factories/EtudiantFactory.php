<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = Etudiant::class;

    public function definition()
    {
        return [
            'matricule' => $this->faker->matricule(),
            'name' => $this->faker->lastname(),
            'prenom' => $this->faker->Fristname(),
            'cycle_id' =>rand(1,4), 
            'classe' => $this->faker->classe(),
            'annee' => $this->faker->annee(),


        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Helpers\UsersHelpers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = Hash::make('1234'); // Default user password
        $etat_user = [false,true];
        $gender = ['Masculin', 'Féminin'];
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'genre' => $gender[array_rand($gender)],
            'email_verified_at' => now(),
            'photo' => UsersHelpers::getDefaultUserImage(),
            'adresse' =>$this->faker->address,
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'etat_user' => $etat_user[array_rand($etat_user)],
            'password' => $password, // password
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cellphone' => ['required', 'string', 'max:15', 'unique:users'],
            'role' => ['required', 'string', 'in:customer,admin,manager'],
            'birthdate' => ['nullable', 'date'],
            'country' => ['nullable', 'string', 'max:60'],
            'city' => ['nullable', 'string', 'max:60'],
            'address' => ['nullable', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'cellphone' => $input['cellphone'],
            'role' => $input['role'],
            'birthdate' => $input['birthdate'] ?? null,
            'country' => $input['country'] ?? null,
            'city' => $input['city'] ?? null,
            'address' => $input['address'] ?? null,
            'password' => Hash::make($input['password']),
        ]);
    }
}

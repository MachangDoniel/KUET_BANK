<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, mixed>  $input
     * @return \App\Models\User
     */
    
public function create(array $input): User
{
    Validator::make($input, [
        'uid',
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:255'],
        // 'image' => ['required', 'image', 'max:2048'], // Adjust the max file size as needed
        'image',
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    ])->validate();

    $user = new User([
        'uid' =>0,
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'],
        'image' => 'photos\user.jpg',
        'password' => Hash::make($input['password']),
    ]);

    DB::transaction(function () use ($user) {
        $user->save(); // Save the user to generate the auto-incremented ID
        $user->uid = $user->id + 100000; // Set the UID based on the generated ID
        $user->save(); // Save the user with the updated UID
    });

    return $user;
    }
}

<?php

namespace App\Http\controllers;

use App\Models\User;
use Core\Exceptions\FileNotFoundException;

class UnAuthenticatedSessionController
{
    private User $user;

    public function __construct()
    {
        try {
            $this->user = new User(base_path('.env.local.ini'));
        } catch (FileNotFoundException $exception) {
            die($exception->getMessage());
        }
    }

    public function create(): void
    {
        view('auth.logout');
    }
}
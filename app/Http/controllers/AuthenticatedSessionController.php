<?php

namespace App\Http\Controllers;

use App\Models\Jiri;
use App\Models\User;
use Core\Exceptions\FileNotFoundException;
use Core\Response;
use Core\Validator;
use JetBrains\PhpStorm\NoReturn;

class AuthenticatedSessionController {
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
        view('auth.login');
    }

    #[NoReturn] public function store(): void
    {

        $data = Validator::check([
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($this->user->create($data)) {
            Response::redirect('/jiris');
        } else {
            Response::abort(Response::SERVER_ERROR);
        }
    }
}

<?php

namespace App\Http\Actions\User;

use App\Domain\User\UseCases\Login\Command;
use App\Domain\User\UseCases\Login\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginAction
{
    public function __invoke(Request $request, Handler $handler): JsonResponse
    {
        $command = new Command();

        $command->email = $request->get('email');
        $command->password = $request->get('password');

        $token = $handler->handle($command);

        if ($token) {
            return new JsonResponse(['token' => $token]);
        }

        return new JsonResponse(['message' => 'Неверный логин или пароль'], 403);
    }
}

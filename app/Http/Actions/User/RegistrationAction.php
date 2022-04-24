<?php

namespace App\Http\Actions\User;

use App\Domain\User\UseCases\Registration\Command;
use App\Domain\User\UseCases\Registration\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegistrationAction
{
    public function __invoke(Request $request, Handler $handler)
    {
        $command = new Command();

        $command->name = $request->get('name');
        $command->email = $request->get('email');
        $command->password = Hash::make($request->get('password'));
        $command->apiToken = Str::random(80);

        $user = $handler->handle($command);

        return new JsonResponse($user);
    }
}

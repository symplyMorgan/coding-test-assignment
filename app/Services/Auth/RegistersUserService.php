<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\DataTransferObjects\UserDto;
use Illuminate\Support\Facades\Auth;
use App\DataTransferObjects\ImageDto;
use Illuminate\Auth\Events\Registered;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\Auth\RegistersUserInterface;
use App\Repositories\Interfaces\ImageRepositoryInterface;

class RegistersUserService implements RegistersUserInterface
{
     public function __construct(
          protected readonly UserRepositoryInterface $userRepository,
          protected readonly ImageRepositoryInterface $imageRepository
     ) {}

     public function handle(UserDto $data): User
     {
          $user = DB::transaction(function () use ($data) {
               $user = $this->userRepository->create($data);

               $image = $this->imageRepository->make(
                    ImageDto::fromArray([
                         'url' => $data->avatar->store('avatars')
                    ])
               );
               
               $user->image()->save($image);

               Auth::login($user);

               return $user;
          });

          event( new Registered($user) );

          return $user;
     }
}

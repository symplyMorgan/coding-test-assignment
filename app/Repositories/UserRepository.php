<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use App\DataTransferObjects\UserDto;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
     public function __construct(
          protected readonly Model $model
     ) {}

     public function create(UserDto $data): User
     {
          return $this->model->create([
               'first_name' => $data->first_name,
               'last_name' => $data->last_name,
               'email' => $data->email,
               'password' => $data->password
          ]);
     }
}

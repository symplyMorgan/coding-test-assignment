<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\User;
use App\DataTransferObjects\UserDto;

interface UserRepositoryInterface
{
     public function create(UserDto $data): User;
}

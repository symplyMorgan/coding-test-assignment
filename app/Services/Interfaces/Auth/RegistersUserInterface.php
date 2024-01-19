<?php

declare(strict_types=1);

namespace App\Services\Interfaces\Auth;

use App\Models\User;
use App\DataTransferObjects\UserDto;

interface RegistersUserInterface
{
     public function handle(UserDto $data): User;
}

<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use Illuminate\Http\UploadedFile;

class UserDto
{
     private function __construct(
          public readonly string $first_name,
          public readonly string $last_name,
          public readonly string $email,
          public readonly string $password,
          public readonly UploadedFile $avatar
     ) {}

     public static function fromArray(array $data): self
     {
          return new self(...$data);
     }
}

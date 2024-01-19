<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use Illuminate\Http\UploadedFile;

class ImageDto
{
     private function __construct(
          public readonly string $url
     ) {}

     public static function fromArray(array $data): self
     {
          return new self(...$data);
     }
}

<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Image;
use App\DataTransferObjects\ImageDto;

interface ImageRepositoryInterface
{
     public function make(ImageDto $data): Image;
}

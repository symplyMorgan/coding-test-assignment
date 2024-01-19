<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Image;
use App\DataTransferObjects\ImageDto;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ImageRepositoryInterface;

class ImageRepository implements ImageRepositoryInterface
{
     public function __construct(
          protected readonly Model $model
     ) {}

     public function make(ImageDto $data): Image
     { 
          /**
           * @var \App\Models\Image $image
           */
          $image = $this->model;

          $image->url = $data->url;

          return $image;
     }
}

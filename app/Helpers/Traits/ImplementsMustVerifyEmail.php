<?php

namespace App\Helpers\Traits;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;

trait ImplementsMustVerifyEmail
{
     public function sendEmailVerificationNotification(Request $request): void
     {
          if($request->user() instanceof MustVerifyEmail) {
               $request->user()->sendEmailVerificationNotification();
          }
     }
}

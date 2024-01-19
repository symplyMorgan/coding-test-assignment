<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\DataTransferObjects\UserDto;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\RegistersUser;
use App\Services\Auth\RegistersUserService;

class RegistersUserController extends Controller
{
    public function __construct(
        protected readonly RegistersUserService $userRegistrationService
    ) {}

    public function create(): View
    {
        return view('auth.register');
    }

    public function store(RegistersUser $request): RedirectResponse
    {
        try {
            $this->userRegistrationService->handle(
                UserDto::fromArray(
                    $request->validated()
                )
            );
        } catch(\Throwable $e) {
            report($e);

            return back()->with(
                'error', 
                __('We encountered an error while processing your request, please try again.')
            );
        }

        return redirect()->route('verification.notice');
    }
}

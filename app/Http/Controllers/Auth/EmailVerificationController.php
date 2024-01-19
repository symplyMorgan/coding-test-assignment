<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Traits\ImplementsMustVerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class EmailVerificationController extends Controller
{
    use ImplementsMustVerifyEmail;

    public function index(EmailVerificationRequest $request): RedirectResponse
    {
        $request->fulfill();

        return redirect()->route('home');
    }

    public function create(): View
    {
        return view('auth.verify-email');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->sendEmailVerificationNotification($request);

        return back()->with(
            'message', 
            __('We have emailed you another verification link')
        );
    }
}

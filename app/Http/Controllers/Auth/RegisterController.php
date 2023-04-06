<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\EmailNotificationService;
use App\Services\UserService;

class RegisterController extends Controller
{
    
    protected $userService;
    protected $emailNotificationService;

    public function __construct(UserService $userService, EmailNotificationService $emailNotificationService)
    {
        $this->userService = $userService;
        $this->emailNotificationService = $emailNotificationService;
    }

    public function store(RegisterRequest $request)
    {
        $user = $this->userService->store($request->validated());

        $this->emailNotificationService->sendWelcomEmailNotification($user->email);

        return back()->with('success', 'Thank you');
    }

}

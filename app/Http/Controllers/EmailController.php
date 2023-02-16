<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEmailRequest;
use App\Models\Email;
use App\Services\EmailService;

class EmailController extends Controller
{
    protected Email $email;
    protected EmailService $emailService;

    /**
     * Instantiate a new controller instance.
     *
     * @param  mixed $emailService
     * @return void
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateEmailRequest $request
     * @return void
     */
    public function store(CreateEmailRequest $request)
    {
        $data = $request->validated();
        $email = $this->emailService->store($data);
        return back();
    }
}

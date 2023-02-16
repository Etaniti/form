<?php

namespace App\Services;

use App\Http\Requests\CreateEmailRequest;
use App\Models\Email;

class EmailService
{
    protected Email $email;

    /**
     * Store a newly created resource in storage.
     *
     * @param  mixed $request
     * @return void
     */
    public function store($data)
    {
        $email = Email::create($data);
    }
}

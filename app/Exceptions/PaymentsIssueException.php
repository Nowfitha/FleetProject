<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;


class PaymentsIssueException extends HttpException
{
    public function __construct($message)
    {
        parent::__construct(404, $message);
    }
}
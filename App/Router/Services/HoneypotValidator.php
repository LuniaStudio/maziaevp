<?php

namespace App\Router\Services;

use Exception;

class HoneypotValidator
{
    private bool $honepot;

    public function __construct()
    {
        $this->honepot = isset($_POST['tel']) ?? false;
    }

    public function validateHoneypot(): void
    {
        if (isset($this->honepot) && !empty($this->honepot)) {

            throw new Exception('Honeypot was triggered', 400);
        }
    }
}

<?php

namespace App\Validations\Url;

use App\Responses\RelocationResponseInterface;
use App\Types\RoleType;

class UserSessionValidation {

/** -------------------------------------------------------------------------------------------- */

    private array $roles;

/** -------------------------------------------------------------------------------------------- */

    function __construct(
        private RelocationResponseInterface $Response,
        private array             $session,
                RoleType          $Roles
    ) {

        $this->roles = $Roles->get();
    }

/** -------------------------------------------------------------------------------------------- */

    function isValid(): bool {

        if (
            !array_key_exists('email', $this->session)      ||
            !array_key_exists('userId', $this->session)     ||
            !array_key_exists('tableId', $this->session) ||
            !in_array($this->session['role'], $this->roles, true)
        ):

            return false;

        endif;

        return true;
    }

/** -------------------------------------------------------------------------------------------- */

    function validate(): void {

        if (!$this->has()):

            $this->Response->setStatus(403);
            $this->Response->setUrl(URL . 'log-in');
            $this->Response->respond();

            die;

        endif;
    }
}

<?php

namespace App\Validations\Url;

use App\Responses\RelocationResponseInterface;
use App\Types\RoleType;
use App\Validations\Url\UserSessionValidation;

class RoleValidation {

/** -------------------------------------------------------------------------------------------- */

    private array $roles;

/** -------------------------------------------------------------------------------------------- */

    function __construct(private RelocationResponseInterface $Response, RoleType $Roles) {

        $this->roles = $Roles->get();
    }

/** -------------------------------------------------------------------------------------------- */

    function validate(): void {

        $Session = new UserSessionValidation(
            $this->Response,
            $_SESSION,
            new RoleType($this->roles)
        );
        $hasAuth = $Session->isValid();

        if (!$hasAuth):

            $this->Response->setStatus(403);
            $this->Response->setUrl(URL . 'errors/403');
            $this->Response->respond();

            die;

        endif;
    }
}

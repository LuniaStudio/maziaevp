<?php

namespace App\Policies;

class RolePolicy {

/** -------------------------------------------------------------------------------------------- */

    function get(): array {

        return [
            'officer',
            'deputy',
            'operator'
        ];
    }

/** -------------------------------------------------------------------------------------------- */

    function getInbox(): array {

        return [
            'officer',
            'deputy',
            'operator'
        ];
    }

/** -------------------------------------------------------------------------------------------- */

    function getArchive(): array {

        return [
            'officer',
            'deputy',
            'operator'
        ];
    }

/** -------------------------------------------------------------------------------------------- */

    function getFlagged(): array {

        return [
            'officer',
            'deputy',
            'operator'
        ];
    }

/** -------------------------------------------------------------------------------------------- */

    function getBin(): array {

        return [
            'officer',
            'deputy',
            'operator'
        ];
    }
}

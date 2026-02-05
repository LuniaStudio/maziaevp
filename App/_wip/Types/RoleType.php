<?php

namespace App\Types;

use App\Policies\RolePolicy;
use App\Tools\Stop;

class RoleType implements TypeInterface {

    public function __construct(private string|array $value, private bool $isStrict = true)
    {}

    public function has(): bool
    {
        $RolePolicy = new RolePolicy();

        $roles = $RolePolicy->get();

        if (is_array($this->value)) {

            if (array_diff($this->value, $roles)) {

                if ($this->isStrict) {

                    Stop::page('400');

                } else {

                    return false;
                }
            }

        } else {

            if (!in_array($this->value, $policy['roles']['all'], true)) {

                if ($this->isStrict) {

                    Stop::page('400');

                } else {

                    return false;
                }
            }
        }

        return true;
    }

    public function get(): string|array|false {

        if (!$this->has()) {

            return false;
        }

        if (is_array($this->value)) {

            foreach ($this->value as &$value) {

                ucfirst(strtolower($value));
            }

        } else {

            $this->value = ucfirst(strtolower($this->value));
        }

        return $this->value;
    }
}

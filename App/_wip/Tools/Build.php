<?php

namespace App\Tools;

class Build {

/** -------------------------------------------------------------------------------------------- */

    static function fab(array $inserts): string {

        ob_start(
            null,
            0,
            PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE
        );

        require MARKUP . 'tags/fab.php';

        return ob_get_clean();
    }

/** -------------------------------------------------------------------------------------------- */

    static function input(array $inserts): string {

        ob_start(
            null,
            0,
            PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE
        );

        require MARKUP . 'tags/input.php';

        return ob_get_clean();
    }

/** -------------------------------------------------------------------------------------------- */

    static function select(array $inserts): string {

        $value   = $inserts['value']   ?? '';
        $options = $inserts['options'] ?? '';
        $list    = '';

        if ($options):

            foreach ($options as $option):

                ob_start(
                    null,
                    0,
                    PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE
                );

                if ($value === $option):

                    require MARKUP . 'tags/option-selected.php';

                else:

                    require MARKUP . 'tags/option.php';

                endif;

                $list .= ob_get_clean();

            endforeach;

        endif;

        ob_start(
            null,
            0,
            PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE
        );

        require MARKUP . 'tags/select.php';

        return ob_get_clean();
    }

/** -------------------------------------------------------------------------------------------- */

    static function textarea(array $inserts): string {

        ob_start(
            null,
            0,
            PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE
        );

        require MARKUP . 'tags/textarea.php';

        return ob_get_clean();
    }
}

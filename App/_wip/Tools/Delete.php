<?php

namespace App\Tools;

class Delete {

/** -------------------------------------------------------------------------------------------- */

    static function folder(string $path): bool {

        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $file) {

            $name = $file->getRealPath();

            if ($file->isFile()):

                unlink($name);

            elseif ($file->isDir()):

                rmdir($name);

            endif;
        }

        return rmdir($path);
    }
}

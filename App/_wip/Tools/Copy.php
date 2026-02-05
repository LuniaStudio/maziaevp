<?php

namespace App\Tools;

class Copy {

/** -------------------------------------------------------------------------------------------- */

    static function contents(string $source, string $target): bool {

        if (!is_dir($target)) mkdir($target, FOLDER_PERM);

        $folder = new \DirectoryIterator($source);

        foreach ($folder as $file):

            if (!$file->isDot()):

                $filePath = $file->getPathname();
                $newFile  = $target . '/' . $folder->getFilename();
                $isCopy   = copy($filePath, $newFile);

                if (!$isCopy):

                    return false;

                endif;

                chmod($newFile, FILE_PERM);

            endif;

        endforeach;

        return true;
    }
}

<?php

spl_autoload_register(function ($name) {

    $paths = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(ROOT)
    );
    $paths->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

    foreach ($paths as $path):

        $fileName = $paths->getSubPathName();
        $newName  = str_replace("\\", "/", $name) . '.php';

        if ($newName === $fileName) require ROOT . $newName;

    endforeach;
});

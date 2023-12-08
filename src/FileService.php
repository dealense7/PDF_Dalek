<?php

namespace Dalek\Pdf;

use Dalek\Pdf\dto\FileDto;

class FileService
{
    private static FileDto $file;

    public function __construct(FileDto $file)
    {
        self::$file = $file;
    }

    public function getDocument(): FileDto
    {
        return self::$file;
    }
}

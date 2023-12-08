<?php

namespace Dalek\Pdf;

use Dalek\Pdf\dto\FileDto;

class Dalek
{
    public static function initial(string $path = null): FileService
    {
        if ($path === null) {
            $path = Support::getTmpPath();

            $emptyFileContent = file_get_contents(__DIR__.'/resources/empty.pdf');

            file_put_contents($path, $emptyFileContent);
        }

        $dto = new FileDto($path);

        return new FileService($dto);
    }
}

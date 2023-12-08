<?php

namespace Dalek\Pdf;

use Throwable;
use Illuminate\Support\Str;

class Support
{
    public static function getTmpPath(): string
    {
        $path = sys_get_temp_dir().'/'.Str::uuid()->toString();

        app()->terminating(function () use ($path) {
            try {
                unlink($path);
            } catch (Throwable $th) {
                throw new $th;
            }
        });

        return $path;
    }
}

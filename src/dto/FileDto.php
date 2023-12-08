<?php

namespace Dalek\Pdf\dto;

class FileDto
{
    private string $fileName;
    private string $path;
    private int $size;
    private string $readableSize;
    private string $extension = 'pdf';

    public function __construct(string $filePath)
    {
        $this->fileName     = basename($filePath).'.'.$this->extension;
        $this->size         = filesize($filePath);
        $this->readableSize = $this->formatFileSize($this->size);
        $this->path         = $filePath;
    }

    function formatFileSize($bytes, $decimals = 2): string
    {
        $size = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        $factor = floor((strlen($bytes) - 1) / 3);

        $sizeLabel = isset($size[$factor]) ? $size[$factor] : 'N/A';

        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)).' '.$sizeLabel;
    }

}

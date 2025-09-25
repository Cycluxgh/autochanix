<?php

namespace App;

use Illuminate\Support\Facades\Crypt;

trait Util
{
    public static function uploadSingleImage($file, $directory = 'uploads'): string
    {
        if (config('app.env') == 'local') {
            return 'storage/' . $file->store($directory, 'public');
        } else {
            return 'storage/app/public/' . $file->store($directory, 'public');
        }
    }

    public static function uploadMultipleImages($files, $directory = 'uploads'): string
    {
        $paths = [];
        foreach ($files as $file) {
            if (config('app.env') == 'local') {
                $paths[] = 'storage/' . $file->store($directory, 'public');
            } else {
                $paths[] = 'storage/app/public/' . $file->store($directory, 'public');

            }
        }
        return implode('|', $paths);
    }

    public static function encrypt(int | string $id): string
    {
        return Crypt::encryptString($id);
    }

    public static function decrypt(string $id): string
    {
        return Crypt::decryptString($id);
    }
}

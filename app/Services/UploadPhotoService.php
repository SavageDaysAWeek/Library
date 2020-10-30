<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadPhotoService {

    public static function uploadPhoto($folder, $file, $replacedUrl = null)
    {
        if (!$file)
            return null;

        Storage::disk('public')->delete($replacedUrl);
        return $file->store($folder, 'public');
    }

}

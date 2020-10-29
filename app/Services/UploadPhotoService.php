<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadPhotoService {

    public static function uploadPhoto($folder, $file, $replacedUrl = null)
    {
        Storage::delete($replacedUrl);
        return $file->store($folder, 'public');
    }

}

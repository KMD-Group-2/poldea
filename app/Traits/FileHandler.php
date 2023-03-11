<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait FileHandler {

    public function uploadFilePath($file, $directory, $nullable = false)
    {
        if ($file) {
            $upload_path = public_path() . "/upload/{$directory}/";
            $file_ext = $file->getClientOriginalExtension();
            $filename = time() .  round(microtime(true) * 1000) . '.' . $file_ext;
            $file->move($upload_path, $filename);
            $file_url = "/upload/{$directory}/" . $filename;
            return $file_url;
        }
        return null;
    }

    public function deleteFilePath($path)
    {
        if($path) {
            try {
                File::delete($path);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
}

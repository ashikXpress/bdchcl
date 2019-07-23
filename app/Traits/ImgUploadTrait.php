<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/24/19
 * Time: 11:49 AM
 */

namespace App\Traits;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait ImgUploadTrait
{
    public function uploadImg(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(10);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}
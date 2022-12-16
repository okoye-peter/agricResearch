<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait FilesTrait{
    public function upload(UploadedFile $file, String $path)
    {
        $name = uniqid() . $file->getClientOriginalName();
        if($file->move(public_path($path), $name)){
            $url = substr($path, -1) == '/' ? $path . $name : $path . '/' . $name;
            return [
                'url' => $url,
                'type' => $file->getClientMimeType()
            ];
        }
    }

    public function delete($path, $file_name)
    {
        if(is_dir(public_path($path))){
            $file_name = substr($path, -1) == '/' ? $path . $file_name : $path . '/' . $file_name;
            if(file_exists(public_path($path . $file_name))){
                unlink(public_path($path . $file_name));
                return ['status' => true, 'msg' => 'file deleted successfully'];
            }
            return ['status' => false, 'msg' => 'file doesn\'t exist'];
        }

        return ['status' => false, "msg" => "invalid directory path"];
    }
}
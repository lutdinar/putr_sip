<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('hashing_string'))
{
    function hashing_string($values): string
    {
        $context    = hash_init('sha256', HASH_HMAC, config('constant.SALT_KEY_PASSWORD'));
        hash_update($context, $values);

        return hash_final($context);
    }
}

if (!function_exists('random_string'))
{
    function random_string(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('base64_file')) {
    function base64_encode_file($file, $nameAttr)
    {
        $temp_file		= $file[$nameAttr]['tmp_name'];
        $file_name		= $file[$nameAttr]['name'];
        $type_file		= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $data_image		= file_get_contents($temp_file);
        $encode_image	= 'data:' . $file[$nameAttr]['type'] . ';base64,' . base64_encode($data_image);

        return $encode_image;
    }
}

if (!function_exists('base64_decode_file')) {
    function base64_decode_file($name, $file, $location)
    {
        if (!is_dir(public_path() . $location)) {
            mkdir(public_path() . $location, 0777, true);
        }

        $file_parts	    = explode(";base64,", $file);
        $file_type_ext	= explode("/", $file_parts[0]);
        $file_type		= $file_type_ext[1];
        $file_base64	= base64_decode($file_parts[1]);
        $file_name	    = str_replace(' ', '_', strtolower($name)) . "_" . time() . "." . $file_type;
        $files		    = public_path() . $location . $file_name;

        $file_save		= file_put_contents($files, $file_base64);

        if ($file_save) {
            $path = $location . $file_name;
        } else {
            $path = null;
        }

        return $path;
    }
}

if (!function_exists('file_store')) {
    function file_store($filename, $request, $location)
    {
        if (!is_dir(storage_path('/app/public') . $location)) {
            mkdir(storage_path('/app/public') . $location, 0777, true);
//            return storage_path('/app/public') . $location;
        }

        $new_location   = '/public' . $location;
        $store_file     = Storage::putFileAs($new_location, $request, $filename);

        if (!empty($store_file)) {
            return $location . $filename;
        } else {
            return null;
        }
    }
}

<?php

namespace App\Tool;

use Illuminate\Http\Request;

class Upload
{
    public static function images(Request $request, $name, $key = [], $path = '')
    {
        $url = null;
        $file = $request->file($name);
        if (!empty($file)) {
            $type = $file->getMimeType();
            $type = explode('/', $type);
            if ($type[0] != 'image') {
                throw new \Exception('请上传图片文件!');
            }
            if (empty($key) && !in_array($type[1], $key)) {
                throw new \Exception('不支持' . join(', ', $key) . '以外的图片格式!');
            }
            $url = $file->store('public/images/' . date('Y-m-d') . "/{$path}");
            $url = explode('/', $url);
            unset($url[0]);
            $url = join('/', $url);
        }

        return $url;
    }

    public static function audiovisual(Request $request, $name, $path = '')
    {
        $url = null;
        $file = $request->file($name);
        if (!empty($file)) {
            $type = $file->getMimeType();
            $type = explode('/', $type);
            if (!in_array($type[0], ['audio', 'video'])) {
                throw new \Exception('请上传视音频文件!');
            }
            $url = $file->store('public/audiovisual/' . date('Y-m-d') . "/{$path}");
            $url = explode('/', $url);
            unset($url[0]);
            $url = join('/', $url);
        }

        return $url;
    }
}

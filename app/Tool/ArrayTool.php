<?php

namespace App\Tool;

class ArrayTool
{
    public static function index(array $array, $name)
    {
        $indexedArray = array();

        if (empty($array)) {
            return $indexedArray;
        }

        foreach ($array as $item) {
            if (isset($item[$name])) {
                $indexedArray[$item[$name]] = $item;
                continue;
            }
        }

        return $indexedArray;
    }

    public static function indexByObj($Obj, $name)
    {
        $indexedArray = array();
        if (empty($Obj)) {
            return $indexedArray;
        }

        foreach ($Obj as $item) {
            if (isset($item->$name)) {
                $indexedArray[$item->$name] = $item;
                continue;
            }
        }
        return $indexedArray;
    }

    public static function parts(array $array, array $keys)
    {
        foreach (array_keys($array) as $key) {
            if (!in_array($key, $keys)) {
                unset($array[$key]);
            }
        }

        return $array;
    }

    public static function columns(array $array, array $columnNames)
    {
        if (empty($array) || empty($columnNames)) {
            return array();
        }

        $columns = array();

        foreach ($array as $item) {
            foreach ($columnNames as $key) {
                $value = isset($item[$key]) ? $item[$key] : '';
                $columns[$key][] = $value;
            }
        }

        return array_values($columns);
    }

    public static function group(array $array, $key)
    {
        $grouped = array();

        foreach ($array as $item) {
            if (empty($grouped[$item[$key]])) {
                $grouped[$item[$key]] = array();
            }

            $grouped[$item[$key]][] = $item;
        }

        return $grouped;
    }
}

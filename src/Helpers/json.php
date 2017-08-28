<?php
if (!function_exists('is_json')) {
    /**
     * Проверяем является ли переданная строка json-строкой
     *
     * @param string $string
     * @return bool
     */
    function is_json(string $string): bool
    {
        $json = json_decode($string);

        return is_string($string) && (is_object($json) || is_array($json));
    }
}
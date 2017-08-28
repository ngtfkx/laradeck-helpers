<?php
if (!function_exists('str_is_positive_int')) {
    /**
     * Проверяем является ли переданная строка целым числом
     *
     * @param mixed $string
     * @return bool
     */
    function str_is_positive_int(string $string): bool
    {
        return preg_match('/^\d+$/', $string) === 1;
    }
}

if (!function_exists('comma')) {

    /**
     * Перечисление элементов через запятую
     *
     * @param array ...$items
     * @return string
     */
    function comma(...$items): string
    {
        $arr = [];
        foreach ($items as $item) {
            if (!empty($item)) {
                $arr[] = $item;
            }
        }
        return implode(', ', $arr);
    }
}
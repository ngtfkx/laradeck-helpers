<?php

if (!function_exists('return_if')) {
    /**
     * Если условие истинное вернуть значение параметра $first, иначе параметра $second
     *
     * @param bool $expression Условие
     * @param string $first Строка для вывода если условие истинно
     * @param string $second Строка для вывода если условие ложно. По умолчанию пустая строка
     * @return string
     */
    function return_if(bool $expression, string $first, string $second = ''): string
    {
        return $expression ? $first : $second;
    }
}

if (!function_exists('return_unless')) {
    /**
     * Если условие ложное вернуть значение параметра $first, иначе параметра $second
     *
     * @param bool $expression Условие
     * @param string $first Строка для вывода если условие ложно
     * @param string $second Строка для вывода если условие ложно. По умолчанию пустая строка
     * @return string
     */
    function return_unless(bool $expression, string $first, string $second = ''): string
    {
        return $expression === false ? $first : $second;
    }
}
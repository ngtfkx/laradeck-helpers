<?php

if(!function_exists('is_even')) {
    /**
     * Проверка является ли число четным
     *
     * @param int $value
     * @return bool
     */
    function is_even(int $value): bool
    {
        return $value % 2 === 0;
    }
}

if(!function_exists('is_odd')) {
    /**
     * Проверка является ли число нечетным
     *
     * @param int $value
     * @return bool
     */
    function is_odd(int $value): bool
    {
        return $value % 2 === 1;
    }
}

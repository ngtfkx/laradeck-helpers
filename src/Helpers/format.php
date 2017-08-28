<?php

if (!function_exists('format_rub')) {
    /**
     * Форматировать сумму в рублях
     *
     * @param mixed $val Сумма в рублях
     * @param string $sign Символ рубля
     * @return string
     */
    function format_rub($val, $sign = '&#8381;'): string
    {
        return number_format($val, 0, '.', ' ') . $sign;
    }
}
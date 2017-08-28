<?php
if (!function_exists('css_visibility_by_display')) {
    /**
     * Установовить видимость блока через inline-стиль
     *
     * @param bool $display  Показывать элемент или нет
     * @param string $state В каком режиме отображать блок. По умолчанию block
     * @return string
     */
    function css_visibility_by_display(bool $display, string $state = 'block'): string
    {
        return 'display: ' . ($display ? $state : 'none') . ';';
    }
}

if (!function_exists('css_visibility_by_class')) {
    /**
     * Установовить видимость блока через класс
     *
     * @param bool $display Показывать элемент или нет
     * @param string $classForHide
     * @param string $classForShow
     * @return string
     */
    function css_visibility_by_class(bool $display, string $classForHide = 'hide', string $classForShow = ''): string
    {
        return $display ? $classForShow : $classForHide;
    }
}
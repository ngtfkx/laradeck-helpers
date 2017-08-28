<?php

if (!function_exists('is_ajax')) {
    /**
     * Проверяем является ли запрос аяксовым
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    function is_ajax(\Illuminate\Http\Request $request): bool
    {
        return $request->ajax() || $request->wantsJson();
    }
}
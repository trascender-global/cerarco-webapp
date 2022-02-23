<?php

use App\Models\ListaValores;
use Illuminate\Support\Facades\Cache;

if (!function_exists('cache_lista_valores')) {
    function cache_lista_valores(string $key, string $function)
    {
        $key = $key . '_lista_valores';
        if (Cache::has($key) === false) {
            Cache::put($key, ListaValores::$function()->get(), config('cache.cache_time'));
        }
        return Cache::get($key);
    }
}
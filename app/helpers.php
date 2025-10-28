<?php

if (! function_exists('assets_storage')) {
    function assets_storage(string $path) {

        $cleanPath = ltrim($path, '/');

        return asset('storage/' . $cleanPath);
    }
}

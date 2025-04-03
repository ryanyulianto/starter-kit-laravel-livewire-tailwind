<?php

use Carbon\Carbon;

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'D MMMM YYYY')
    {
        return Carbon::parse($date)->locale('id')->isoFormat($format);
    }
}

if (!function_exists('formatRupiah')) {
    function formatRupiah($number, $withSymbol = true, $withBetween = false)
    {
        $formatted = number_format($number, 0, ',', '.');
        $value = $withSymbol ? 'Rp. ' . $formatted : $formatted;

        if ($withBetween) {
            return "<span style='display: flex; justify-content: space-between; width: 100%;'>
                        <span>Rp.</span>
                        <span>{$formatted}</span>
                    </span>";
        }

        return $value;
    }
}
if (!function_exists('formatTimeAgo')) {
    function formatTimeAgo($date)
    {
        Carbon::setLocale('id');
        return Carbon::parse($date)->diffForHumans();
    }
}
if (!function_exists('formatPhoneNumber')) {
    function formatPhoneNumber($number)
    {
        return preg_replace('/^(\+62|62|0)/', '+62', $number);
    }
}


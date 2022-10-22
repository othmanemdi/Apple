<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function dd($array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    // exit();
}

// number_format($total, 2, ',', ' ')

function _number_format(float $num): string
{
    return number_format($num, 2, ',', ' ');
}

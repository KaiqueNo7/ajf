<?php 

function normalizeString($string)
{
    $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);

    $string = str_replace(' ', '-', $string);

    $string = strtolower($string);
    
    return $string;
}
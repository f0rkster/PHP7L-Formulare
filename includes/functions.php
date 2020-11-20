<?php

function sortByName($left,$right)
{
    return strcasecmp($left['name'], $right['name']);
}

function validateInput($str, $check)
{
    if (is_array($check))
    {
        foreach ($check as $checkValue)
        {
            if (strpos($str, $checkValue) !== false)
            {
                // vorzeitiges Beenden der Funktion
                return false;
            }
        }
    }
    else
    {
        if (strpos($str, $check) !== false)
        {
            // vorzeitiges Beenden der Funktion
            return false;
        }
    }
    return true;
}

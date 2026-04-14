<?php

namespace App\Implementations;

function without(array $collection, array $values = [])
{
    return array_values(array_intersect($collection, $values));
}

print_r(without([2, 1, 2, 3]));

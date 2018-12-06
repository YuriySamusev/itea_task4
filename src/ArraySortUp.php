<?php

namespace App;

use \RuntimeException;


class ArraySortUp implements ArraySortInterface
{
    public function sort(array $data)
    {
        if(!arsort($data)){
            throw new RuntimeException('Sort up is failed');
        }

        return $data;
    }
}
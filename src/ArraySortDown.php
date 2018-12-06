<?php

namespace App;


class ArraySortDown implements ArraySortInterface
{
    public function sort(array $data)
    {
        if(!\asort($data)){
            throw new \RuntimeException('Sort is failed');
        }

        return $data;
    }
}
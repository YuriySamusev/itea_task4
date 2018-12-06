<?php

namespace App;


class ContextController
{
    public static function sort($array, $way)
    {
        switch ($way){
            case 'up':
                $obj = new Context(new ArraySortUp());
                break;
            case 'down':
                $obj = new Context(new ArraySortDown());
                break;
            default:
                $obj = new Context(new NullArraySort());
        }

        return [
            'data' => $obj->sort($array, $error),
            'error' => $error
        ];
    }

}
<?php

namespace App;


final class Context
{
    private $arraySortObject;

    public function __construct(ArraySortInterface $arraySortObject)
    {
        $this->arraySortObject = $arraySortObject;
    }

    public function sort(array $data, &$error)
    {
        try{
            $result = $this->arraySortObject->sort($data);
        } catch (\RuntimeException $e){
            $result = $data;
            $error = $e->getMessage();
        }

        return $result;
    }
}
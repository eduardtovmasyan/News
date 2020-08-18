<?php

namespace App\Services;

use App\Type;

class TypeService
{
    protected  $typeModel;

    function __construct(Type $typeModel)
    {
        $this->typeModel = $typeModel;
    }

    public function getAll()
    {
        return $this->typeModel->all();
    }

    public function get($type_id)
    {
        return $this->typeModel::findOrFail($type_id);
    }
}

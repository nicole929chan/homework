<?php

namespace App\Repositories;

use App\Models\Box;

class BoxRepository
{
    protected $box;

    public function __construct(Box $box)
    {
        $this->box = $box;
    }

    public function get()
    {
        return $this->box->all();
    }
}
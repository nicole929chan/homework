<?php

namespace App\Repositories;

use App\Models\Box;
use App\Repositories\Contracts\IBoxRepository;

class BoxRepository implements IBoxRepository
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
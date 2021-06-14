<?php

namespace App\Repositories\Contracts;

interface IItemRepository
{
    public function get();
    public function set();
    public function filter();
}
<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface {

    public function create(array $data): Model;

}
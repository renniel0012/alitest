<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface {

    protected $model;

    public function __construct( Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Model {
        return $this->model->create($data);
    }

}
<?php

namespace App\Models\Repositories;

use Illuminate\Database\Eloquent\Model;


abstract class BaseRepositoryAbstract
{
    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(protected Model $model)
    {}
}

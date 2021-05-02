<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;

trait UserSearchable
{
    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @param $request
     * @return Builder
     */
    public function scopeSearch($query, $request): Builder
    {
        return $query->where('name', 'LIKE', '%'.$request.'%');
    }
}

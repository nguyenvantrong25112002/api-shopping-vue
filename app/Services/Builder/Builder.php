<?php

namespace App\Services\Builder;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class Builder extends  EloquentBuilder
{
    public function parentCategory()
    {
        return $this->where('parent_id', 0);
    }

    /**
     * Has request url
     */
    public function hasRequest($data = [])
    {
        if (count($data) == 0) return $this;
        $q = $this;
        foreach ($data as $key => $v) {
            if ($v) $q = $q->where($key, $v);
        }
        return $q;
    }
    public function sortBy()
    {
    }
}
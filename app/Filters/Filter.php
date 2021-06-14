<?php

namespace App\Filters;

class Filter
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * 執行搜尋
     *
     * @return query builder
     */
    public function apply()
    {
        $filters = request()->only(['category_id', 'place', 'description']);
        $this->query->where(function () use ($filters) {
            foreach ($filters as $filtered_by => $filter) {
                if ($filter) {
                    if ($filtered_by == 'category_id') {
                        $this->query->orWhere($filtered_by, $filter);
                    } else {
                        $this->query->orWhere($filtered_by, 'like', "%{$filter}%");
                    }
                }
            }
        });

        return $this->query;
    }
}
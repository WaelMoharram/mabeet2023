<?php


namespace App\Traits;


trait Search
{
    public function scopeSearch($query, $keyword)
    {
        $columns = implode(',', $this->searchable ?? []);

        if (empty($keyword) || empty($columns)) {
            return $query;
        }

        return $query->whereRaw("CONCAT_WS(' ', {$columns}) like '%{$keyword}%'");
    }
}

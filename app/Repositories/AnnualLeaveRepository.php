<?php

namespace App\Repositories;

use App\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeaves;

class AnnualLeaveRepository implements AnnualLeaveRepositoryInterface 
{
    public function filter(array $filter){
        $annualLeaves = AnnualLeaves::query();

        foreach ($filter as $key => $value) {
            $annualLeaves->where($key, $value);
        }

        return $annualLeaves;
    }

    public function getList(array $filter, int $page, int $perPage)
    {
        $annualLeaves = $this->filter($filter);
        $count = $annualLeaves->count();
        $offset = ($perPage * $page) - $perPage;
        $data = $annualLeaves->skip($offset)->take($perPage)->get();

        return [
            'page' => $page,
            'per_page' => $perPage,
            'total_count' => $count,
            'annual_leave' => $data,
        ];
    }

    public function find(string $id) 
    {
        return AnnualLeaves::find($id);
    }

    public function create(array $inputDetail) 
    {
        return AnnualLeaves::Create($inputDetail);
    }
}
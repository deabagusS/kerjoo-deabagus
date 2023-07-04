<?php

namespace App\Interfaces;

interface AnnualLeaveRepositoryInterface 
{
    public function getList(array $filter, int $page, int $perPage);
    public function find(string $id);
    public function create(array $inputDetail) ;
}
<?php

namespace App\Repository\CompanyLogo;

use App\Models\CompanyLogo;

interface CompanyLogoInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function statusChange($id);
    public function delete($id);
}
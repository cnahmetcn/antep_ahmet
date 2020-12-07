<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'price' => $row[1],
            'photo' => $row[2],
            'description' => $row[3],
            'created_by' => $row[4],
            'category_id' => $row[5],

        ]);
    }
}

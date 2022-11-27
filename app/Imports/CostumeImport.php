<?php

namespace App\Imports;

use App\Models\Costume;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;

class CostumeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Costume([
            'costume_name' => $row[1],
            'description' => $row[2],
            'price' => $row[3],
            'gambar' => Str::slug($row[1], '_') . '.jpg',
            'status' => 'ready',
            'category_id' => $row[4]
        ]);
    }
}
<?php

namespace App\Imports;

use App\Models\ikasleak;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ikasleak([
            //
            'name'     => $row['email'],
            'pasahitza' => Hash::make($row['pasahitza']),
            'egoera'    => $row['egoera'],
           
        ]);
    }
}

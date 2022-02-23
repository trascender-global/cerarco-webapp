<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class FichasImport implements WithMultipleSheets
{

    public function sheets(): array
    {
        return [
            new PiezaClaveCollectionImport(),
        ];
    }
}

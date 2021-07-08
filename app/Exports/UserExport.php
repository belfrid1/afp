<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return User::query()->select('id', 'firstname', 'lastname', 'email', 'created_at', 'updated_at');
    }

    public function headings(): array
    {
        return [
            'ID',
            'First Name',
            'Last Name',
            'Email',
            'Created At',
            'Updated At',
        ];
    }

}

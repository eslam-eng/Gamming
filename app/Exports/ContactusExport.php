<?php

namespace App\Exports;

use App\Models\Contactus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactusExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contactus::all();
    }

    public function map($contactUs): array
    {
        return [
            $contactUs->name,
            $contactUs->email,
            $contactUs->message,
            $contactUs->is_replied ? 'Yes' : 'No',
            $contactUs->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            'name',
            'email',
            'message',
            'replied',
            'created_at',
        ];
    }
}

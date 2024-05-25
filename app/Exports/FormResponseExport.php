<?php

namespace App\Exports;

use App\Models\FormResponse;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormResponseExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public $from_date, $to_date;
    public function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function query()
    {
        return FormResponse::select(
            'form_responses.name',
            'form_responses.email',
            'form_responses.message',
            'form_responses.ip_address',
            'form_responses.user_agent',
            'form_responses.created_at',
        )
            ->where('created_at', '>=', $this->from_date)
            ->where('created_at', '<=', date('Y-m-d', strtotime($this->to_date . ' + 1 day')));
    }

    public function headings(): array
    {
        return [
            'NAME',
            'EMAIL',
            'MESSAGE',
            'IP ADDRESS',
            'USER AGENT',
            'CREATED AT',
        ];
    }
}

<?php

namespace App\Http\Controllers\Dashboard\Contactus;

use App\DataTables\ContactusDataTable;
use App\Exports\ContactusExport;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ContactusController extends Controller
{
    public function index(ContactusDataTable $dataTable,Request $request)
    {
        return $dataTable->render('dashboard.pages.contactus.index');
    }

    public function reply(Contactus $contactus)
    {
        $contactus->update(['is_replied'=>true]);
        return back()->with('success','status updated successfully');
    }

    public function export()
    {
        return Excel::download(new ContactusExport(), 'contact_us.xlsx');
    }
}

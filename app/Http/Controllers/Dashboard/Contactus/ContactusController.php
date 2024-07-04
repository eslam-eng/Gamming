<?php

namespace App\Http\Controllers\Dashboard\Contactus;

use App\DataTables\ContactusDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index(ContactusDataTable $dataTable,Request $request)
    {
        return $dataTable->render('dashboard.pages.contactus.index');
    }
}

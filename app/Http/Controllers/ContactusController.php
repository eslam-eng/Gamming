<?php

namespace App\Http\Controllers;

use App\Mail\ContactusMail;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public $mail_to = '';
    public function __construct()
    {
        $this->mail_to = config('services.mail_to_address');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);
            $contact = Contactus::create($request->except('_token'));
            Mail::to('info@2024studios.com')
                ->send(new ContactusMail($contact,$contact->email));
            return back()->with('success', 'Thanks for contacting us!');
        }catch (\Exception $exception){
            return back()->with('success', 'Thanks for contacting us!');
        }
    }
}

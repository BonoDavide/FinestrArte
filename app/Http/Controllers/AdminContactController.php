<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class AdminContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.contacts.index', compact('messages'));
    }
}

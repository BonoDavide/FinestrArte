<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use App\Mail\NewContactMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        // 🔒 Protezione da campi invertiti (nome <-> email)
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) && filter_var($this->name, FILTER_VALIDATE_EMAIL)) {
            [$this->name, $this->email] = [$this->email, $this->name]; // scambia i valori
        }

        DB::transaction(function () {
            $contact = ContactMessage::create([
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
            ]);

            Mail::to(config('mail.contact_address'))->send(new NewContactMessage($contact));
        });

        $this->reset(['name', 'email', 'message']);

        session()->flash('success', 'Messaggio inviato con successo!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

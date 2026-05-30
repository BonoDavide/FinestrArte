<?php

namespace App\Livewire\Admin;

use App\Models\ContactMessage;
use Livewire\Component;

class ContactMessageShow extends Component
{
    public ContactMessage $message;

    public function mount(ContactMessage $message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.admin.contact-message-show');
    }
}

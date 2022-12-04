<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
//first step is create a state variable for each value that the user may enter into the contact form
//second in the form on the blade file, you use wire:model to link the variables here with the form fields
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        // $contact['name'] = $this->name;
        // $contact['email'] = $this->email;
        // $contact['phone'] = $this->phone;
        // $contact['message'] = $this->message;

        sleep(1);
        Mail::to('andre@andre.com')->send(new ContactFormMailable($contact));

        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
        // session()->flash('success_message', 'We received your message successfully and will get back to you shortly!');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

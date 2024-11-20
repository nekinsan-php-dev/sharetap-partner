<?php

namespace App\Livewire;

use App\Models\DistributorQuery;
use Livewire\Component;

class DistributorForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'phone' => 'required|string|max:15',
        'address' => 'nullable|string|max:255',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        // Save to database or perform any other action
        DistributorQuery::create($validatedData);

        // Reset the form fields
        $this->reset();

        // Show success message
        session()->flash('success', 'Application submitted successfully!');
    }

    public function render()
    {
        return view('livewire.distributor-form');
    }
}

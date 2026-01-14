<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AppSetting;
use Livewire\Attributes\Layout;

class AppConfiguration extends Component
{
    #[Layout('components.layouts.admin')]

    public $address;
    public $phones = ['']; // Array to hold multiple numbers. Default one empty input.
    public $customer_desk_email;
    public $app_email;

    // Social Links
    public $facebook;
    public $instagram;
    public $twitter;
    public $whatsapp;

    public $existingSetting = null;

    public function mount()
    {
        $this->existingSetting = AppSetting::first();

        if ($this->existingSetting) {
            $settings = $this->existingSetting->settings;

            $this->address = $settings['address'] ?? '';

            // Handle Phone Numbers: Ensure it's always an array
            if (isset($settings['phones']) && is_array($settings['phones'])) {
                $this->phones = $settings['phones'];
            } elseif (isset($settings['phone']) && !empty($settings['phone'])) {
                // Backward compatibility if it was a single string previously
                $this->phones = [$settings['phone']];
            } else {
                $this->phones = [''];
            }

            $this->customer_desk_email = $settings['customer_desk_email'] ?? '';
            $this->app_email = $settings['app_email'] ?? '';
            $this->facebook = $settings['social']['facebook'] ?? '';
            $this->instagram = $settings['social']['instagram'] ?? '';
            $this->twitter = $settings['social']['twitter'] ?? '';
            $this->whatsapp = $settings['social']['whatsapp'] ?? '';
        }
    }

    // Dynamic Input Actions
    public function addPhone()
    {
        $this->phones[] = '';
    }

    public function removePhone($index)
    {
        unset($this->phones[$index]);
        $this->phones = array_values($this->phones); // Re-index array
    }

    protected $rules = [
        'address' => 'required|string|max:500',
        'phones.*' => 'required|string|max:20', // Validate each phone input
        'customer_desk_email' => 'required|email',
        'app_email' => 'required|email',
        'facebook' => 'nullable|url',
        'instagram' => 'nullable|url',
        'twitter' => 'nullable|url',
        'whatsapp' => 'nullable|string',
    ];

    // Custom messages for dynamic fields
    protected $messages = [
        'phones.*.required' => 'This phone number field cannot be empty.',
        'phones.*.max' => 'Phone number is too long.',
    ];

    public function create()
    {
        $this->validate();

        $data = $this->prepareData();

        AppSetting::create([
            'settings' => $data
        ]);

        session()->flash('message', 'App configuration created successfully!');
        return $this->redirect(request()->header('Referer'), navigate: true);
    }

    public function update()
    {
        $this->validate();

        if (!$this->existingSetting) {
            return;
        }

        $data = $this->prepareData();

        $this->existingSetting->update([
            'settings' => $data
        ]);

        session()->flash('message', 'App configuration updated successfully!');
    }

    private function prepareData()
    {
        // Filter out empty phone numbers just in case
        $validPhones = array_filter($this->phones, fn($value) => !is_null($value) && $value !== '');

        return [
            'address' => $this->address,
            'phones' => array_values($validPhones), // Save as 'phones' array
            'customer_desk_email' => $this->customer_desk_email,
            'app_email' => $this->app_email,
            'social' => [
                'facebook' => $this->facebook,
                'instagram' => $this->instagram,
                'twitter' => $this->twitter,
                'whatsapp' => $this->whatsapp,
            ]
        ];
    }

    public function render()
    {
        if ($this->existingSetting) {
            return view('livewire.update-app-configuration');
        }

        return view('livewire.app-configuration');
    }
}

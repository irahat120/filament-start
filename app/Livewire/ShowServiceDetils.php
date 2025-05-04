<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServiceDetils extends Component
{

    public $services;

    public function mount($id) {
        $this->services = Service::findOrFail($id);
        
    }
    public function render()
    {
        return view('livewire.show-service-detils',[
            'services' => $this->services,
        ]);
        
    }
}

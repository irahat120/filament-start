<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class Showabout extends Component
{
    public function render()
    {

        $aboutus = AboutUs::where('status',true)->get();
        return view('livewire.showabout',[
            'about_us' => $aboutus,
        ]);
    }
}
